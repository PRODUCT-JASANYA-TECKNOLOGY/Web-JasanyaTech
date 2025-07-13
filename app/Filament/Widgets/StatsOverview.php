<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Product', '12')
                ->color('success')
                ->description('Total Produk')
                ->icon('heroicon-o-calendar')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Portfolio', '20')
                ->color('warning')
                ->description('Proyek')
                ->icon('heroicon-o-document')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Client', '14')
                ->color('info')
                ->description('Pelanggan')
                ->icon('heroicon-o-building-office-2')
                ->chart([7, 2, 10, 3, 15, 4, 17])
        ];
    }
}
