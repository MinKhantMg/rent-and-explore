
@extends('layouts.app')

@section('content')
    <div class="container" style="width: 600px">
        <h1 class="text-center">Car Add Form</h1>
        <div class="card">
            <div class="card-body">

                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
                    <textarea class="form-control mb-2" name="description" placeholder="Description" required></textarea>
                    <input type="file" class="form-control mb-2" name="photo" placeholder="Photo" required>
                    <input type="number" class="form-control mb-2" name="door" placeholder="Doors" required>
                    <input type="number" class="form-control mb-2" name="gas" placeholder="Gas" required>
                    <input type="number" class="form-control mb-2" name="seat" placeholder="Seat" required>
                    <input type="number" class="form-control mb-2" name="MPG" placeholder="Miles per gallon" required>
                    <input type="number" class="form-control mb-2" name="price" placeholder="Price" required>
                    <button type="submit" class="btn btn-primary">Add Car</button>
                </form>

            </div>
        </div>
    </div>
@endsection
