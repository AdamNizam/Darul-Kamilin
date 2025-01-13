<?php

namespace App\Filament\Widgets;

use App\Models\Santri;
use App\Models\UserLog;
use App\Models\WaliSantri;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {

        return [
            Stat::make('Jumlah Santri', Santri::count())
            ->description('Peningkatan')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('Jumlah Wali Santri', WaliSantri::count())
            ->description('Peningkatan')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('Jumlah Akun', UserLog::count())
            ->description('Peningkatan')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }
}
