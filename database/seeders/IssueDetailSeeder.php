<?php

namespace Database\Seeders;

use App\Models\IssueDetail;
use Illuminate\Database\Seeder;

class IssueDetailSeeder extends Seeder
{
    public function run(): void
    {
        $issueDetails = [
            [
                'issue_id' => 1,
                'developer_id' => 1, // John Smith
                'comment_date' => '2025-03-02',
                'comment' => 'Fixed the responsive layout issues on homepage'
            ],
            [
                'issue_id' => 1,
                'developer_id' => 2, // Sarah Johnson
                'comment_date' => '2025-03-02',
                'comment' => 'Reviewed and tested the layout fixes'
            ],
            [
                'issue_id' => 2,
                'developer_id' => 3, // Michael Chen
                'comment_date' => '2025-03-03',
                'comment' => 'Implemented caching to improve load times'
            ],
            [
                'issue_id' => 3,
                'developer_id' => 4, // Emily Brown
                'comment_date' => '2025-03-04',
                'comment' => 'Created initial mockup for login screen'
            ],
            [
                'issue_id' => 4,
                'developer_id' => 5, // David Wilson
                'comment_date' => '2025-03-05',
                'comment' => 'Set up database schema and initial migrations'
            ],
        ];

        foreach ($issueDetails as $detail) {
            IssueDetail::create($detail);
        }
    }
}
