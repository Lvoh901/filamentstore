<?php

namespace App\Filament\Widgets;

use App\Models\Amenity;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count()),
            Stat::make('Total Rooms', Room::count()),
            Stat::make('Total Bookings', Booking::count()),
            Stat::make('Total Guests', Guest::count()),
            Stat::make('Total Amenities', Amenity::count()),
            Stat::make('Total Services', Service::count()),
        ];
    }

    public function getColumnSpan(): int
    {
        return 2;
    }
}
