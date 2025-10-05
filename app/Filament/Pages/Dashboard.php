<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BookingsChart;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            BookingsChart::class,
        ];
    }

    public function getColumns(): int | array
    {
        return 2;
    }

    public function getTitle(): string
    {
        return 'Dashboard';
    }
}
