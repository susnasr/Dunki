<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\ClientProfile; // Optional: if you need a profile for admins too
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     * This is what you type in the terminal to RUN it.
     */
    protected $signature = 'user:create-admin';

    /**
     * The console command description.
     */
    protected $description = 'Create a new system administrator manually via CLI.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🛠️  Welcome to the Admin Generator!');

        // 1. Ask for input
        $name = $this->ask('Enter Full Name', 'System Admin');
        $email = $this->ask('Enter Email Address');

        // Check if email already exists
        if (User::where('email', $email)->exists()) {
            $this->error('❌ Error: A user with this email already exists.');
            return 1; // Return failure code
        }

        $password = $this->secret('Enter Password');
        $confirm = $this->secret('Confirm Password');

        // 2. Validate Password
        if ($password !== $confirm) {
            $this->error('❌ Error: Passwords do not match!');
            return 1;
        }

        $this->info('Creating admin account...');

        // 3. Create the User in Database
        $admin = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'user_type' => 'admin', // 🔑 THIS IS THE KEY FIELD
            'is_active' => true,

            // Fill required fields with defaults to prevent SQL errors
            'phone' => 'N/A',
            'country' => 'Headquarters',
            'location' => 'Global',
            'profile_pic' => null,
        ]);

        // 4. Success Message
        $this->newLine();
        $this->info('✅ Success! Admin account created.');
        $this->table(
            ['Name', 'Email', 'Role', 'Status'],
            [[$admin->name, $admin->email, $admin->user_type, 'Active']]
        );

        return 0; // Return success code
    }
}
