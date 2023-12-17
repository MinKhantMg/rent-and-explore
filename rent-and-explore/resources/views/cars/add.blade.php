
@extends('layouts.app')

@section('content')
    <div class="container" style="width: 600px">
        <h1 class="text-center">Car</h1>
        <div class="card">
            <div class="card-body">

                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name">
                    <textarea class="form-control mb-2" name="description" placeholder="Description"></textarea>
                    <input type="file" class="form-control mb-2" name="photo" placeholder="Photo">
                    <input type="number" class="form-control mb-2" name="door" placeholder="Doors">
                    <input type="number" class="form-control mb-2" name="gas" placeholder="Gas">
                    <input type="number" class="form-control mb-2" name="seat" placeholder="Seat">
                    <input type="number" class="form-control mb-2" name="MPG" placeholder="Miles per gallon">
                    <input type="number" class="form-control mb-2" name="price" placeholder="Price">
                    <button type="submit" class="btn btn-primary">Add Car</button>
                </form>
            </div>
        </div>
    </div>
@endsection
