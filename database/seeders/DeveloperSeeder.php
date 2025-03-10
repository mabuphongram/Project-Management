<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    public function run(): void
    {
        $developers = [
            ['name' => 'John Smith'],
            ['name' => 'Sarah Johnson'],
            ['name' => 'Michael Chen'],
            ['name' => 'Emily Brown'],
            ['name' => 'David Wilson'],
        ];

        foreach ($developers as $developer) {
            Developer::create($developer);
        }
    }
}
