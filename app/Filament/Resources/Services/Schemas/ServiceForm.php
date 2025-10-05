<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->autosize(),
                TextInput::make('price')
                    ->numeric()
                    ->required(),
            ]);
    }
}
