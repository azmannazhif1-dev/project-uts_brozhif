<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        Booking::create([
            'customer_name' => 'Azman',
            'phone' => '08123456789',
            'service' => 'Haircut',
            'date' => '2025-01-20',
            'time' => '14:00',
            'status' => 'pending',
            'note' => 'Minta potong rapi',
        ]);
    }
}
