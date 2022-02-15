<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(20)->create();
        Student::factory(50)->create();

        User::create([
            'name'      => 'Admin Pertama',
            'email'     => 'adminpertama@gmail.com',
            'password'  => Hash::make('adminpertama')
        ]);

    }
}
