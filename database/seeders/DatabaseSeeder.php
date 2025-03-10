<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ClientSeeder;
use Database\Seeders\DeveloperSeeder;
use Database\Seeders\IssueDetailAttachSeeder;
use Database\Seeders\IssueDetailSeeder;
use Database\Seeders\IssueSeeder;
use Database\Seeders\ProjectSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
            DeveloperSeeder::class,
            ProjectSeeder::class,
            IssueSeeder::class,
            IssueDetailSeeder::class,
            IssueDetailAttachSeeder::class,
        ]);
    }
}
