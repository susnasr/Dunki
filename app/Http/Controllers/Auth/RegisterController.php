<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ClientProfile;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     */
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle registration request.
     */
    public function register(Request $request)
    {
//        dd('Controller hit! Data: ', $request->all(), 'Files: ', $request->file('profile_pic'));  // ← TEMP DEBUG

        // 🧩 Step 2: Validate input
        $this->validator($request->all())->validate();

        // 📸 Step 3: Handle profile picture upload
        $profilePicPath = null;
        if ($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()) {
            $profilePicPath = $request->file('profile_pic')->store('avatars', 'public');
        }

        // 👤 Step 4: Create the user and fire event
        event(new Registered($user = $this->create(
            array_merge($request->all(), ['profile_pic' => $profilePicPath])
        )));

        // 🔐 Step 5: Log the user in automatically
        $this->guard()->login($user);

        // 🏠 Step 6: Redirect to home page with success flash message
        return redirect($this->redirectTo)->with('success', 'Account created successfully!');
    }


    /**
     * Validation rules.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required', 'in:admin,hr,visa_consultant,travel_agent,academic_advisor,student'],
            'country' => ['required', 'string'],
            'location' => ['required', 'string', 'max:255'],
            'profile_pic' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);
    }

    /**
     * Create a new user instance after validation.
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => $data['user_type'],
            'phone' => $data['phone'] ?? null,
            'country' => $data['country'],
            'location' => $data['location'],
            'profile_pic' => $data['profile_pic'] ?? null,
            'is_active' => true,
        ]);

        // ✅ Auto-create client profile for students
        if ($data['user_type'] === 'student') {
            ClientProfile::create([
                'user_id' => $user->id,
                'country_preference' => $data['country'],
            ]);
        }

        return $user;
    }
}
