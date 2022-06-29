<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::create([
            'name'=>'Admin',
            'email'=>'manager@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('manager420'),
            'remember_token'=>Str::random(10),
        ]);
    }
}