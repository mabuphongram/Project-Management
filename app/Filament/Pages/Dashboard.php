<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\Add_Chart;
use App\Filament\Widgets\LatestIssues;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

    public function getWidgets(): array
    {
        return [
            // Add_Chart::class,
            // LatestIssues::class,
        ];
    }
}
