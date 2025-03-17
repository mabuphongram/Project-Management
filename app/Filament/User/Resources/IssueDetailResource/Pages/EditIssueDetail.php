<?php

namespace App\Filament\User\Resources\IssueDetailResource\Pages;

use App\Filament\User\Resources\IssueDetailResource;
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
