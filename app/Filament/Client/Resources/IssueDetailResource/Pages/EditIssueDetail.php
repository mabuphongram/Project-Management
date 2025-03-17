<?php

namespace App\Filament\Client\Resources\IssueDetailResource\Pages;

use App\Filament\Client\Resources\IssueDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIssueDetail extends EditRecord
{
    protected static string $resource = IssueDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
