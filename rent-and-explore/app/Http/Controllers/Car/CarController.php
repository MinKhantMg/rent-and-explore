<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $data = Car::latest()->paginate(4);

        return view('cars.index', [
            'cars' => $data
        ]);
    }

    public function detail($id)
    {
        $data = Car::find($id);

        return view('cars.detail', [
            'car' => $data
        ]);
    }

    public function add()
    {
        return view('cars.add');
    }

    public function create()
    {
        $car = new Car();
        $car->name = request()->name;
        $car->description = request()->description;
        $car->door = request()->door;
        $car->gas = request()->gas;
        $car->seat = request()->seat;
        $car->MPG = request()-> MPG;
        $car->price = request()->price;
        if(request()->hasFile('photo')){
            $originalName=request()->file('photo')->getClientOriginalName();
            $imgPath=request()->file('photo')->storeAs('public/images/cars',$originalName);
            $car->photo = $imgPath;
        }
        $car->save();

        return redirect('/cars');
    }
}
