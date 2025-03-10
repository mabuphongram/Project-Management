<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Website Redesign',
                'description' => 'Complete redesign of corporate website with modern UI/UX',
                'client_id' => 1
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Develop a new mobile app for customer engagement',
                'client_id' => 1
            ],
            [
                'name' => 'CRM Implementation',
                'description' => 'Implementation of customer relationship management system',
                'client_id' => 2
            ],
            [
                'name' => 'E-commerce Platform',
                'description' => 'Build new e-commerce platform with payment integration',
                'client_id' => 3
            ],
            [
                'name' => 'Cloud Migration',
                'description' => 'Migrate existing systems to cloud infrastructure',
                'client_id' => 4
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
