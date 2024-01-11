@extends("layouts.app")

@section("content")
    <div class="container">

        {{ $books->links() }}


        @foreach($books as $book)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h3>{{ $book->user->name }}</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Car Name</th>
                                    <th scope="col">Pickup Location</th>
                                    <th scope="col">Return Location</th>
                                    <th scope="col">Pickup Date</th>
                                    <th scope="col">Pickup Time</th>
                                    <th scope="col">Return Date</th>
                                    <th scope="col">Return Time</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <tr>
                                    <td>{{ $book->car->name }}</td>
                                    <td>{{ $book->pickup_location }}</td>
                                    <td>{{ $book->return_location }}</td>
                                    <td>{{ $book->pickup_date }}</td>
                                    <td>{{ $book->pickup_time }}</td>
                                    <td>{{ $book->return_date }}</td>
                                    <td>{{ $book->return_time }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                                <div class="float-end">
                                    <a class="btn btn-outline-danger" href="{{ url("/cars/book/decline/$book->id") }}">
                                        Decline
                                    </a>
                                      <a class="btn btn-outline-secondary" href="{{ url("/cars/book/approve/$book->id") }}">
                                          Approve
                                     </a>
                                </div>

                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
