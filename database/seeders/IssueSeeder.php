<?php

namespace Database\Seeders;

use App\Models\Issue;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    public function run(): void
    {
        $issues = [
            [
                'name' => 'Homepage Layout Bug',
                'issue_date' => '2025-03-01',
                'issue_code' => 'WR-001',
                'project_id' => 1 // Website Redesign
            ],
            [
                'name' => 'Performance Optimization',
                'issue_date' => '2025-03-02',
                'issue_code' => 'WR-002',
                'project_id' => 1
            ],
            [
                'name' => 'Login Screen Design',
                'issue_date' => '2025-03-03',
                'issue_code' => 'MA-001',
                'project_id' => 2 // Mobile App
            ],
            [
                'name' => 'Database Integration',
                'issue_date' => '2025-03-04',
                'issue_code' => 'CRM-001',
                'project_id' => 3 // CRM
            ],
            [
                'name' => 'Payment Gateway Setup',
                'issue_date' => '2025-03-05',
                'issue_code' => 'EC-001',
                'project_id' => 4 // E-commerce
            ],
        ];

        foreach ($issues as $issue) {
            Issue::create($issue);
        }
    }
}
