<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('guest_full_name')
                    ->label('Guest Name')
                    ->getStateUsing(function ($record) {
                        $firstName = $record->guest->first_name ?? '';
                        $lastName = $record->guest->last_name ?? '';
                        return trim($firstName . ' ' . $lastName);
                    }),
                TextColumn::make('room.room_number'),
                TextColumn::make('check_in_date'),
                TextColumn::make('check_out_date'),
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
