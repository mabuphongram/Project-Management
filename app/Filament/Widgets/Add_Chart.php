<?php

namespace App\Filament\Widgets;

use App\Models\Issue;
use App\Models\Project;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class Add_Chart extends ChartWidget
{
    protected static ?string $heading = 'Issues per Project';
    
    protected function getData(): array
    {
        $issuesPerProject = Issue::select('projects.name', DB::raw('count(*) as count'))
            ->join('projects', 'issues.project_id', '=', 'projects.id')
            ->groupBy('projects.name')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Number of Issues',
                    'data' => $issuesPerProject->pluck('count')->toArray(),
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(153, 102, 255)',
                    ],
                ],
            ],
            'labels' => $issuesPerProject->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
