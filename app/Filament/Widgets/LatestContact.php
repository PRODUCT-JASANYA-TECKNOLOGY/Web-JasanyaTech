<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\Client;
use App\Models\Contact;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestContact extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    protected static ?string $heading = 'List Contact';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Contact::query()->latest()->limit(10))
            ->defaultPaginationPageOption(10)
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('need')
                    ->label('Need')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('massage')
                    ->label('Massage')
                    ->searchable()
                    ->sortable(),
            ])
            ->searchable();
    }
}
