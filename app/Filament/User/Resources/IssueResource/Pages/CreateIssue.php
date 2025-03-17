<?php

namespace App\Filament\User\Resources\IssueResource\Pages;

use App\Filament\User\Resources\IssueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIssue extends CreateRecord
{
    protected static string $resource = IssueResource::class;
}
