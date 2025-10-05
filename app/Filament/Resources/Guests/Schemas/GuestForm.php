<?php

namespace App\Filament\Resources\Guests\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms\Components\TextInput;

class GuestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('phone_number')
                    ->tel(),
            ]);
    }
}
