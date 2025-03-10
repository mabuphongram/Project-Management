<?php

namespace Database\Seeders;

use App\Models\IssueDetailAttach;
use Illuminate\Database\Seeder;

class IssueDetailAttachSeeder extends Seeder
{
    public function run(): void
    {
        $attachments = [
            [
                'issue_detail_id' => 1,
                'file_name' => 'homepage-fix-screenshot.png',
                'file_type' => 'image/png',
                'file_size' => 1024 * 50 // 50KB
            ],
            [
                'issue_detail_id' => 2,
                'file_name' => 'test-results.pdf',
                'file_type' => 'application/pdf',
                'file_size' => 1024 * 100 // 100KB
            ],
            [
                'issue_detail_id' => 3,
                'file_name' => 'performance-report.xlsx',
                'file_type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'file_size' => 1024 * 75 // 75KB
            ],
            [
                'issue_detail_id' => 4,
                'file_name' => 'login-screen-design.fig',
                'file_type' => 'application/figma',
                'file_size' => 1024 * 200 // 200KB
            ],
            [
                'issue_detail_id' => 5,
                'file_name' => 'database-schema.sql',
                'file_type' => 'text/plain',
                'file_size' => 1024 * 30 // 30KB
            ],
        ];

        foreach ($attachments as $attachment) {
            IssueDetailAttach::create($attachment);
        }
    }
}
