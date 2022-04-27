<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("admin@admin.com"),
                "role_id" => 1
            ],
            [
                "name" => "Web",
                "email" => "web@web.com",
                "password" => Hash::make("web@web.com"),
                "role_id" => 3
            ],
            [
                "name" => "Redac",
                "email" => "redac@redac.com",
                "password" => Hash::make("redac@redac.com"),
                "role_id" => 4
            ],
            [
                "name" => "Member",
                "email" => "member@member.com",
                "password" => Hash::make("member@member.com"),
                "role_id" => 2
            ],
        ]);
    }
}
