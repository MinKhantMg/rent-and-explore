@extends("layouts.app")

@section("content")
    <div class="container">

        {{ $cars->links() }}

        @foreach($cars as $car)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h4 class="card-title">{{ $car->name }}</h4>
                        </div>
                        <div class="col-4">
                            @auth
                                @can('delete-car', $car)
                                    <div class="float-end">
                                        <a class="btn btn-outline-danger" href="{{ url("/cars/delete/$car->id") }}">
                                            Delete
                                        </a>
                                        <a class="btn btn-outline-secondary" href="{{ url("/cars/edit/$car->id") }}">
                                            Edit
                                        </a>
                                    </div>
                                @endcan
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
