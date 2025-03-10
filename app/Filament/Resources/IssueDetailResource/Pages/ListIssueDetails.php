<?php

namespace App\Filament\Resources\IssueDetailResource\Pages;

use App\Filament\Resources\IssueDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIssueDetails extends ListRecords
{
    protected static string $resource = IssueDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
