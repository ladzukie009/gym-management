<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'birthdate' => now(),
            'age' => 30,
            'gender' => 'male',
            'contact' => '09123456789',
            'address' => 'Tarlac City',
            'medical_condition' => 'None',
            'allergy' => 'None',
            'current_medication' => 'None',
            'family_doctor' => 'None',
            'doctors_phone' => '09123456789',
            'guardian_name' => 'None',
            'guardian_contact' => '09123456789',
            'guardian_address' => 'Tarlac City',
            'membership_type' => 'Premium',
            'membership_start' => now(),
            'membership_end' => now(),

        ])->assignRole('writer', 'admin');
    }
}