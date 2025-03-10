<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Issue;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Projects', Project::count())
                ->description('Active projects in the system')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('success'),
            
            Stat::make('Open Issues', Issue::count())
                ->description('Issues requiring attention')
                ->descriptionIcon('heroicon-m-bug-ant')
                ->color('danger'),
            
            Stat::make('Total Clients', Client::count())
                ->description('Active clients')
                ->descriptionIcon('heroicon-m-users')
                ->color('info'),
        ];
    }
}
