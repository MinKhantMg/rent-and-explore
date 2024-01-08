<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Car;

class BookController extends Controller
{
    public function book($id)
    {
        $car = Car::find($id);

        $booking = new Book();
        $booking->car_id = $car->id;
        $booking->pickup_location = request()->pickup_location;
        $booking->return_location = request()->return_location;
        $booking->pickup_date = request()->pickup_date;
        $booking->pickup_time = request()->pickup_time;
        $booking->return_date = request()->return_date;
        $booking->return_time = request()->return_time;
        $booking->save();

        $car->status = false;
        $car->save();

        return redirect('/cars')->with('info', "Booking Complete");
    }
}
