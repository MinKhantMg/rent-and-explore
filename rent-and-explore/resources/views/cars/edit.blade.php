@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 600px">

        @if($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $msg)
                    {{ $msg }}
                @endforeach
            </div>
        @endif

        <h1 class="text-center">Car Edit Form</h1>
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control mb-2" name="name" placeholder="Title" value="{{ $car->name }}">
                        <textarea name="description" placeholder="Body" class="form-control mb-2">{{ $car->description }}</textarea>
                        <input type="file" class="form-control mb-2" name="photo" placeholder="Photo">
                        <input type="number" class="form-control mb-2" name="door" placeholder="Doors" value="{{ $car->door }}">
                        <input type="number" class="form-control mb-2" name="gas" placeholder="Gas" value="{{ $car->gas }}">
                        <input type="number" class="form-control mb-2" name="seat" placeholder="Seat" value="{{ $car->seat }}">
                        <input type="number" class="form-control mb-2" name="MPG" placeholder="Miles per gallon" value="{{ $car->MPG }}">
                        <input type="number" class="form-control mb-2" name="price" placeholder="Price" value="{{ $car->price }}">

                        <button class="btn btn-primary">Update Article</button>
                    </form>
                </div>
            </div>
    </div>
@endsection
