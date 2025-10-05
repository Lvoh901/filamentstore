<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BookingsChart extends ChartWidget
{
    protected ?string $heading = 'Bookings Chart';

    protected function getData(): array
    {
        $driver = DB::connection()->getDriverName();

        $dateFunction = match ($driver) {
            'mysql' => 'DATE_FORMAT(created_at, \'%Y-%m\')',
            'sqlite' => 'strftime(\'%Y-%m\', created_at)',
            default => 'DATE(created_at)',
        };

        $bookings = Booking::select(DB::raw("COUNT(id) as count, {$dateFunction} as month"))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Bookings',
                    'data' => $bookings->pluck('count'),
                ],
            ],
            'labels' => $bookings->pluck('month'),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    public function getColumnSpan(): int
    {
        return 2;
    }
}
