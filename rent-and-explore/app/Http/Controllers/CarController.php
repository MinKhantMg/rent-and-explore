<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $data = Car::all();

        return view('mains.index', [
            'cars' => $data
        ]);
    }

    public function detail($id)
    {
        $data = Car::find($id);

        return view('mains.detail', [
            'car' => $data
        ]);
    }
}
