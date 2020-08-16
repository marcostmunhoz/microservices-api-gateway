<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        if (!User::where('email', 'test@mail.com')->exists()) {
            User::create([
                'email' => 'test@mail.com',
                'password' => Hash::make('test@password'),
            ]);
        }
    }
}
