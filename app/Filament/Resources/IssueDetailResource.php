<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IssueDetailResource\Pages;
use App\Filament\Resources\IssueDetailResource\RelationManagers;
use App\Models\IssueDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IssueDetailResource extends Resource
{
    protected static ?string $model = IssueDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Project Management';
    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('issue_id')
                    ->relationship('issue', 'name')
                    ->required(),
                Forms\Components\Select::make('developer_id')
                    ->relationship('developer', 'name')
                    ->required(),
                Forms\Components\DatePicker::make('comment_date'),
                Forms\Components\Textarea::make('comment')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('issue.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('developer.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('comment_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIssueDetails::route('/'),
            'create' => Pages\CreateIssueDetail::route('/create'),
            'edit' => Pages\EditIssueDetail::route('/{record}/edit'),
        ];
    }
}
