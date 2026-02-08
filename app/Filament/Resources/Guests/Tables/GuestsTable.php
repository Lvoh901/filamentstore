<?php

namespace App\Filament\Resources\Guests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;

class GuestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->label('Full Name')
                    ->getStateUsing(function ($record) {
                        $firstName = $record->first_name ?? '';
                        $lastName = $record->last_name ?? '';
                        return trim($firstName . ' ' . $lastName);
                    }),
                TextColumn::make('email'),
                TextColumn::make('phone_number'),
                TextColumn::make('room_number')
                    ->label('Room Number')
                    ->getStateUsing(function ($record) {
                        return $record->bookings->first()?->room?->room_number;
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
