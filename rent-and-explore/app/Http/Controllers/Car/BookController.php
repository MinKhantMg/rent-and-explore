<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Car;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $data = Book::latest()->paginate(7);

        return view('cars.book', [
            'books' => $data
        ]);
    }

    public function book($id)
    {
        $validator = validator(request()->all(),[
            'pickup_location' => 'required',
            'return_location' => 'required',
            'pickup_date' => 'required',
            'pickup_time' => 'required',
            'return_date' => 'required',
            'return_time' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $car = Car::find($id);

        $booking = new Book();
        $booking->car_id = $car->id;
        $booking->pickup_location = request()->pickup_location;
        $booking->return_location = request()->return_location;
        $booking->pickup_date = request()->pickup_date;
        $booking->pickup_time = request()->pickup_time;
        $booking->return_date = request()->return_date;
        $booking->return_time = request()->return_time;
        $booking->user_id = auth()->user()->id;
        $booking->save();

        $car->status = false;
        $car->save();

        return redirect('/cars')->with('info', "Booking Complete");
    }

    public function decline($id)
    {
        $book = Book::find($id);

        $car = $book->car;
        $car->status = true;
        $car->save();

        $book->delete();

        return redirect('/cars');

    }

    public function approve($id)
    {
        $book = Book::find($id);

        $car = $book->car;
        $car->status = false;
        $car->save();

        $book->delete();

        return redirect('/cars');

    }
}
