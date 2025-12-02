<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. UK Universities 🇬🇧
        \App\Models\University::create([
            'name' => 'University of Oxford',
            'country' => 'United Kingdom',
            'city' => 'Oxford',
            'ranking' => 1,
            'tuition_fee' => 35000, // GBP approx converted
            'accepts_without_ielts' => false,
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Oxford_University_Coat_Of_Arms.svg/600px-Oxford.png'
        ]);

        \App\Models\University::create([
            'name' => 'University of Cambridge',
            'country' => 'United Kingdom',
            'city' => 'Cambridge',
            'ranking' => 2,
            'tuition_fee' => 36000,
            'accepts_without_ielts' => false,
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/University_of_Cambridge_Coat_of_Arms.svg/600px-Cambridge.png'
        ]);

        \App\Models\University::create([
            'name' => 'Imperial College London',
            'country' => 'United Kingdom',
            'city' => 'London',
            'ranking' => 6,
            'tuition_fee' => 38000,
            'accepts_without_ielts' => false,
            'logo' => null // Placeholder will show
        ]);

        // 2. USA Universities 🇺🇸
        \App\Models\University::create([
            'name' => 'Harvard University',
            'country' => 'USA',
            'city' => 'Cambridge, MA',
            'ranking' => 4,
            'tuition_fee' => 55000,
            'accepts_without_ielts' => false,
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Harvard_University_coat_of_arms.svg/1200px-Harvard_University_coat_of_arms.svg.png'
        ]);

        \App\Models\University::create([
            'name' => 'Stanford University',
            'country' => 'USA',
            'city' => 'Stanford, CA',
            'ranking' => 3,
            'tuition_fee' => 56000,
            'accepts_without_ielts' => false,
            'logo' => null
        ]);

        \App\Models\University::create([
            'name' => 'MIT',
            'country' => 'USA',
            'city' => 'Cambridge, MA',
            'ranking' => 1,
            'tuition_fee' => 58000,
            'accepts_without_ielts' => false,
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/MIT_logo.svg/1200px-MIT_logo.svg.png'
        ]);

        // 3. Canada Universities 🇨🇦
        \App\Models\University::create([
            'name' => 'University of Toronto',
            'country' => 'Canada',
            'city' => 'Toronto',
            'ranking' => 18,
            'tuition_fee' => 45000,
            'accepts_without_ielts' => true, // conditional
            'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/04/University_of_Toronto_coat_of_arms.svg/1200px-University_of_Toronto_coat_of_arms.svg.png'
        ]);

        \App\Models\University::create([
            'name' => 'University of British Columbia',
            'country' => 'Canada',
            'city' => 'Vancouver',
            'ranking' => 34,
            'tuition_fee' => 42000,
            'accepts_without_ielts' => true,
            'logo' => null
        ]);

        \App\Models\University::create([
            'name' => 'McGill University',
            'country' => 'Canada',
            'city' => 'Montreal',
            'ranking' => 31,
            'tuition_fee' => 35000,
            'accepts_without_ielts' => false,
            'logo' => null
        ]);

        // 4. Australia Universities 🇦🇺
        \App\Models\University::create([
            'name' => 'University of Melbourne',
            'country' => 'Australia',
            'city' => 'Melbourne',
            'ranking' => 33,
            'tuition_fee' => 40000,
            'accepts_without_ielts' => true,
            'logo' => null
        ]);

        \App\Models\University::create([
            'name' => 'University of Sydney',
            'country' => 'Australia',
            'city' => 'Sydney',
            'ranking' => 41,
            'tuition_fee' => 41000,
            'accepts_without_ielts' => true,
            'logo' => null
        ]);

        // 5. Germany (Low Fees Example) 🇩🇪
        \App\Models\University::create([
            'name' => 'Technical University of Munich',
            'country' => 'Germany',
            'city' => 'Munich',
            'ranking' => 50,
            'tuition_fee' => 1500, // Very low fees
            'accepts_without_ielts' => false,
            'logo' => null
        ]);
    }


}
