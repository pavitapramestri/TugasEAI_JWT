<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nim' => '1204220053',
                'name' => 'pavitong',
                'email' => 'pavitong@gmail.com',
                'address' => 'buduran cyak',
                'phone' => '082245559339'
            ],
            [
                'nim' => '1204210054',
                'name' => 'bintank',
                'email' => 'bintank@gmail.com',
                'address' => 'tomotomo',
                'phone' => '081358965041'
            ],
        ]);
    }
}
