
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Looking for a vehicle? You’re at the right place.</h1>

        <div id="carouselExampleInterval" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('/storage/images/car2.jpg') }}" class="d-block w-100" style="height: 400px" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('/storage/images/car2.jpg') }}" class="d-block w-100" style="height: 400px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/storage/images/car2.jpg') }}" class="d-block w-100" style="height: 400px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h2 class="mb-4">Our most popular destinations</h2>
        <div class="container text-center mb-5">
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            One
                        </div>
                        <div class="col-4">
                            One
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>A fleet that meets your needs</h3>
        <h4 class="text-muted">Take the opportunity to test the new models</h4>

        <div class="row flex-wrap">
            @foreach ($cars as $car)
                <div class="col-12 col-md-6 col-xl-3 p-3">
                    <div class="card p-3">
                        {{-- <div class="card-title">{{ $book['title'] }}</div> --}}
                        <div class="card-body">
                            <div class="row flex-wrap">
                                <div class="col-6 col-md-12">
                                    <img src="https://images.dog.ceo/breeds/weimaraner/n02092339_363.jpg" class="card-img">
                                </div>
                                <div class="col-6 col-md-12 mt-lg-2">
                                    <div class="card-title"><b>Name: </b>{{ $car->name}}</div>
                                    <span class="card-text">
                                        <b>Description:</b>
                                            <small class="text-secondary">{{ $car->body }} </small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-info" href='{{ url("/cars/detail/$car->id") }}'>See More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h5>Frequently Asked Questions</h5>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
