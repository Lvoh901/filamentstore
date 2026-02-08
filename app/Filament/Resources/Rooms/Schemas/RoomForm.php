<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\Amenity;

class RoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('room_number')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('KSH'),
                TextInput::make('status')
                    ->required()
                    ->default('available'),
                Select::make('amenities')
                    ->multiple()
                    ->relationship('amenities', 'name')
                    ->required(),
            ]);
    }
}
