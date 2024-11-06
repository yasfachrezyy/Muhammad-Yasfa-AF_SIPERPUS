<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
        ])->assignRole('pustakawan');

        User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@unsur.ac.id',
        ])->assignRole('mahasiswa');
    }
}
