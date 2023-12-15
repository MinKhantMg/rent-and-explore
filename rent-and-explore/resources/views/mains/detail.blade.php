
@extends('layouts.app')

@section('content')
    <div class="container">

        <nav style="--bs-breadcrumb-divider: '->';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href='{{ url("/cars/") }}'>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car</li>
            </ol>
        </nav>

        <div class="row">
            <h1 class="text-center mb-5"> {{ $car->name }}</h1>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h2> Reduce your carbon footprint without constraints</h2>

                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('/storage/images/car2.jpg') }}" class="d-block w-100" style="height: 400px" alt="">
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('/storage/images/car2.jpg') }}" class="d-block w-100" style="height: 400px" alt="">
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <h2> Reduce your carbon footprint without constraints</h2>

                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
            </div>

        </div>

        <div class="row mb-5">

            <div class="col-lg-6 col-md-12 col-sm-12">
                <h2> Reduce your carbon footprint without constraints</h2>

                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
                <p>dafaaaaaaaaaaaaaaaaaaaaaaaaaaaaf</p>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('/storage/images/car2.jpg') }}" class="d-block w-100" style="height: 400px" alt="">
            </div>
        </div>

        <div class="row" >
            <div class="card text-center" >
                <div class="card-body ">

                        <form>
                            <label class="col-lg-3 col-md-12 col-sm-12 float-start">
                                <strong>Pick up & Return location</strong>
                                <div class="input-group">
                                    <input type="text" class="form-control " placeholder="Pick up location">
                                    <input type="text" class="form-control" placeholder="Return location">
                                </div>
                            </label>
                            <label class="col-lg-3 col-md-12 col-sm-12">
                                <strong>Pick up date & time</strong>
                                <div class="input-group">
                                    <input type="date" class="form-control">
                                    <input type="time" class="form-control">
                                </div>
                            </label>
                            <label class="col-lg-3 col-md-12 col-sm-12 float-end">
                                <strong>Return date & time</strong>
                                <div class="input-group">
                                    <input type="date" class="form-control">
                                    <input type="time" class="form-control">
                                </div>
                            </label>
                            <div >
                                <a href="">
                                    <button class="btn btn-secondary form-control mt-2">
                                        Book
                                    </button>
                                </a>
                            </div>
                        </form>
                </div>
            </div>
        </div>

    </div>
@endsection
