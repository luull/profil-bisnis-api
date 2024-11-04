<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('members')->insert([
            [
                'username' => 'john_doe',
                'password' => bcrypt('password123'), // Store hashed password
                'email' => 'john@example.com', // Assuming you have an email column
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'jane_doe',
                'password' => bcrypt('securepass'), // Store hashed password
                'email' => 'jane@example.com', // Assuming you have an email column
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'alice_smith',
                'password' => bcrypt('mypassword'), // Store hashed password
                'email' => 'alice@example.com', // Assuming you have an email column
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'bob_johnson',
                'password' => bcrypt('bobspassword'), // Store hashed password
                'email' => 'bob@example.com', // Assuming you have an email column
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
