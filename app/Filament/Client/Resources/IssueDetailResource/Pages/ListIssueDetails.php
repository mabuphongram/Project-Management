<?php

namespace App\Filament\Client\Resources\IssueDetailResource\Pages;

use App\Filament\Client\Resources\IssueDetailResource;
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
