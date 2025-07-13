<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Role;
use App\Models\Team;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeamResource\RelationManagers;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(128)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->directory('team')
                    ->columnSpanFull()
                    ->required(),
                Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->label('Role')
                    ->searchable()
                    ->options(Role::limit(5)->pluck('name', 'id'))
                    ->getSearchResultsUsing(function (string $search) {
                        return Role::where('name', 'like', "%{$search}%")
                            ->limit(5)
                            ->pluck('name', 'id')
                            ->toArray();
                    })
                    ->getOptionLabelUsing(function ($value) {
                        return Role::find($value)?->name;
                    })
                    ->columnSpanFull()
                    ->required(),
                Repeater::make('social_media')
                    ->schema([
                        TextInput::make('platform')
                            ->label('Platform')
                            ->placeholder('facebook, instagram, etc')
                            ->required(),
                        TextInput::make('url')
                            ->label('URL')
                            ->placeholder('https://...')
                            ->required()
                            ->url(),
                    ])
                    ->default([])
                    ->label('Social Media Links')
                    ->addActionLabel('Tambah Link')
                    ->reorderable()
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('benner_certificate')
                    ->image()
                    ->directory('benner_certificate')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('cv')
                    ->required()
                    ->label('CV')
                    ->maxLength(255),
                TextInput::make('url_portofolio')
                    ->required()
                    ->label('URL Portofolio')
                    ->maxLength(128),
                Toggle::make('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('roles.name')
                    ->label('Role')
                    ->badge()
                    ->separator(','),
                TextColumn::make('social_media')
                    ->label('Social Media'),
                ImageColumn::make('benner_certificate')
                    ->label('Benner Certificate'),
                TextColumn::make('cv')
                    ->label('CV')
                    ->color('info')
                    ->url(fn ($record) => $record->cv)
                    ->openUrlInNewTab()
                    ->searchable(),
                TextColumn::make('url_portofolio')
                    ->searchable()
                    ->color('info')
                    ->url(fn ($record) => $record->url_portofolio)
                    ->openUrlInNewTab(),
                IconColumn::make('active')
                    ->boolean(),
                TextColumn::make('createdBy.name')
                    ->label('Created By'),
                TextColumn::make('updatedBy.name')
                    ->label("Updated by"),
                TextColumn::make('deletedBy.name')
                    ->label("Deleted by"),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
