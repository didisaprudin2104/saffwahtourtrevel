<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TentangKami;

class AbautSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TentangKami::create([
            'title' => 'About Us',
            'description' => 'This is the about us page description.'
        ]); 
    }
}
