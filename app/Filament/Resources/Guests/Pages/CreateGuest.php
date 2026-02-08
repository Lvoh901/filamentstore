<?php

namespace App\Filament\Resources\Guests\Pages;

use App\Filament\Resources\Guests\GuestResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Booking;
use App\Models\Room; // Add this use statement
use Illuminate\Database\Eloquent\Model;

class CreateGuest extends CreateRecord
{
    protected static string $resource = GuestResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $room_id = $data['room_id'];
        $check_in_date = $data['check_in_date'];
        $check_out_date = $data['check_out_date'];

        unset($data['room_id']);
        unset($data['check_in_date']);
        unset($data['check_out_date']);

        $guest = static::getModel()::create($data);

        Booking::create([
            'guest_id' => $guest->id,
            'room_id' => $room_id,
            'check_in_date' => $check_in_date,
            'check_out_date' => $check_out_date,
        ]);

        // Mark the room as occupied
        $room = Room::find($room_id);
        if ($room) {
            $room->status = 'occupied';
            $room->save();
        }

        return $guest;
    }
}
