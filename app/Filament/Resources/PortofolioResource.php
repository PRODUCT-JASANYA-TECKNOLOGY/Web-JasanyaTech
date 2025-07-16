<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Client;
use App\Models\Category;
use Filament\Forms\Form;
use App\Models\Portofolio;
use App\Models\Technology;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortofolioResource\Pages;
use App\Filament\Resources\PortofolioResource\RelationManagers;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Client & Technology')
                    ->description('Prevent abuse by limiting the number of requests per period')
                    ->icon('heroicon-m-building-office')
                    ->schema([
                        Select::make('client_id')
                            ->required()
                            ->searchable()
                            ->columnSpanFull()
                            ->label('Client Name')
                            ->options(Client::all()->pluck('name', 'id')),
                        Select::make('category')
                            ->multiple()
                            ->relationship('category', 'name')
                            ->label('Category')
                            ->searchable()
                            ->options(Category::limit(5)->pluck('name', 'id'))
                            ->getSearchResultsUsing(function (string $search) {
                                return Category::where('name', 'like', "%{$search}%")
                                    ->limit(5)
                                    ->pluck('name', 'id')
                                    ->toArray();
                            })
                            ->getOptionLabelUsing(function ($value) {
                                return Category::find($value)?->name;
                            })
                            ->required(),
                        Select::make('technology')
                            ->multiple()
                            ->relationship('technology', 'name')
                            ->label('Technology')
                            ->searchable()
                            ->options(Technology::limit(5)->pluck('name', 'id'))
                            ->getSearchResultsUsing(function (string $search) {
                                return Technology::where('name', 'like', "%{$search}%")
                                    ->limit(5)
                                    ->pluck('name', 'id')
                                    ->toArray();
                            })
                            ->getOptionLabelUsing(function ($value) {
                                return Technology::find($value)?->name;
                            })
                            ->required(),
                    ]),
                FileUpload::make('thumbnail')
                    ->required()
                    ->directory('portofolio thumbnail')
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(128),
                Textarea::make('desc')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->multiple()
                    ->directory('portofolio images')
                    ->columnSpanFull(),
                DatePicker::make('start_project')
                    ->native(false),
                DatePicker::make('end_project')
                    ->native(false),
                Toggle::make('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_project')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_project')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_by')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
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
