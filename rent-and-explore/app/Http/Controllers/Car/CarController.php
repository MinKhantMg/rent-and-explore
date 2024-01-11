<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Support\Facades\Gate;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'detail']);
    }

    public function index()
    {
        $data = Car::latest()->paginate(4);

        return view('cars.index', [
            'cars' => $data
        ]);
    }

    public function show()
    {
        $data = Car::latest()->paginate(7);

        return view('cars.show', [
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
        $validator = validator(request()->all(),[
            'name' => 'required',
            'description' => 'required',
            'door' => 'required',
            'gas' => 'required',
            'seat' => 'required',
            'MPG' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $car = new Car();
        $this->extracted($car);

        return redirect('/cars');
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return view('cars.edit',[
            'car' => $car
        ]);
    }

    public function update($id)
    {
        $validator = validator(request()->all(),[
            'name' => 'required',
            'description' => 'required',
            'door' => 'required',
            'gas' => 'required',
            'seat' => 'required',
            'MPG' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $car = Car::find($id);
        $this->extracted($car);

        return redirect("/cars/show");
    }

    public function delete($id)
    {
        $car = Car::find($id);

        if(Gate::allows('delete-car', $car)) {
            $car->delete();
            return redirect('/cars/show')->with('info', 'Deleted an article');
        }

        return back()->with('info', 'Unauthorized');
    }

    /**
     * @param $car
     * @return void
     */
    public function extracted($car): void
    {
        $car->name = request()->name;
        $car->description = request()->description;
        $car->door = request()->door;
        $car->gas = request()->gas;
        $car->seat = request()->seat;
        $car->MPG = request()->MPG;
        $car->price = request()->price;
        $car->user_id = auth()->user()->id;
        if (request()->hasFile('photo')) {
            $originalName = request()->file('photo')->getClientOriginalName();
            $imgPath = request()->file('photo')->storeAs('public/images/cars', $originalName);
            $car->photo = $imgPath;
        }
        $car->save();
    }
}
