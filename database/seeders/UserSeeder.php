<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@admin.com')->first();

        if(!$user){
            User::create([
                'user_type' => 'admin',
                'regnum' => 'Administration',
                'name' => 'Msu Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ]);
        }
    }
}
