<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('guest_id')
                    ->relationship('guest', 'first_name')
                    ->required(),
                Select::make('room_id')
                    ->relationship('room', 'room_number')
                    ->required(),
                DatePicker::make('check_in_date')
                    ->required(),
                DatePicker::make('check_out_date')
                    ->required(),
            ]);
    }
}
