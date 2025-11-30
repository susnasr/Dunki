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

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Optional: You can remove this override if you want — the trait works fine
    // But keeping it clean and safe
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        event(new Registered($user));
        $this->guard()->login($user);

        return redirect($this->redirectTo)->with('success', 'Welcome to Dunki!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'       => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
            'country'    => ['required', 'string', 'max:255'],
            'location'   => ['required', 'string', 'max:255'],
            'phone'      => ['nullable', 'string', 'max:20'],
            'profile_pic' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],        ]);
    }

    protected function create(array $data)
    {
        // Handle profile picture safely — only if it's actually an uploaded file
        $profilePicPath = null;

        if (
            isset($data['profile_pic']) &&
            $data['profile_pic'] instanceof \Illuminate\Http\UploadedFile &&
            $data['profile_pic']->isValid()
        ) {
            $profilePicPath = $data['profile_pic']->store('avatars', 'public');
        }

        $user = User::create([
            'name'        => $data['name'],
            'email'       => $data['email'],
            'password'    => Hash::make($data['password']),
            'user_type'   => 'student',           // Always student
            'phone'       => $data['phone'] ?? null,
            'country'     => $data['country'],
            'location'    => $data['location'],
            'profile_pic' => $profilePicPath,
            'is_active'   => true,
        ]);

        // Auto-create client profile for students
        ClientProfile::create([
            'user_id'           => $user->id,
            'country_preference'=> $data['country'],
        ]);

        return $user;
    }
}
