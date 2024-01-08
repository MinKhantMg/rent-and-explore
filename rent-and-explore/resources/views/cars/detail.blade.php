
@extends('layouts.app')

@section('content')
    <div class="container ">

        <nav style="--bs-breadcrumb-divider: '->';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href='{{ url("/cars/") }}' class="text-decoration-none fw-bold">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $car->name }}</li>
            </ol>
        </nav>

        <div class="mb-5">
            <img src="{{ asset('/storage/images/cars/'. basename($car->photo)) }}" class="img-thumbnail">
        </div>

        <div class="row justify-content-between mb-5">

            <div class="col-lg-6 col-md-12 col-sm-12">
                <h1 class="text-center mb-5 fw-bold"> {{ $car->name }}</h1>
                <div class="container text-center">
                    <div class="row justify-content-between mb-4">
                                <div class="col-4 fs-5">
                                    <img src="{{ asset('/storage/images/detail_icon/fuel.png') }}"
                                         class="img-fluid mx-2 mb-1" alt=""> {{ $car->MPG }} MPG
                                </div>
                                <div class="col-4 fs-5 ">
                                    <img src="{{ asset('/storage/images/detail_icon/petrol-station.png') }}"
                                         class="img-fluid pe-1" alt=""> {{ $car->gas }}
                                </div>
                    </div>
                    <div class="row justify-content-between mb-5">
                        <div class="col-4 fs-5">
                            <img src="{{ asset('/storage/images/detail_icon/car-door.png') }}"
                                 class="img-fluid mb-1 me-2" alt=""> {{ $car->door }} doors
                        </div>
                        <div class="col-4 fs-5">
                            <img src="{{ asset('/storage/images/detail_icon/car-seat.png') }}"
                                 class="img-fluid mb-1 ps-4" alt=""> {{ $car->seat }} seats
                        </div>
                    </div>
                    <div class="row">
                        <p>INSURANCE & PROTECTION</p>
                        <p>Insurance via Travelers

                            <i class="fa-solid fa-question " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>

                        <div class="modal modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body lh-sm  text-start">
                                        All trips are covered under a third-party liability insurance policy issued to
                                        Turo from Travelers Excess and Surplus Lines Company (“Travelers”). The Travelers
                                        policy provides secondary (excess) coverage for third-party liability unless primary
                                        coverage is explicitly required by an applicable state statute (e.g., Maryland and New York).
                                        Liability coverage is typically the minimum amount required by law, except in some states and at
                                        some airports that require additional coverage. For New York trips, the liability coverage is $1,250,000.
                                        Protection plans also come with 24/7 customer support and access to roadside service, subject to additional
                                        terms, conditions, and costs described here https://support.turo.com/hc/en-us/articles/203990690-Roadside-assistance-
                                        for-guests-US-and-Canada. The purchase of a protection plan for New York trips comes with priority phone routing. Turo
                                        is not an insurance company, and the contract with Turo under the protection plan which limits your responsibility
                                        for physical damage to the host’s vehicle is not insurance. When a trip is booked in the state of Washington, physical
                                        damage to the host’s vehicle is covered by insurance purchased by Turo, but the Turo insurance does not change the
                                        contractual responsibilities of hosts or guests with respect to physical damage to a host’s vehicle. For questions
                                        or information about the third party liability insurance that is included in the protection plans, consumers in Maryland
                                        and the licensed states listed at https://turo.com/us/en/policies/additional-policies#insurance-license-disclosures may
                                        contact Turo Insurance Agency at (415) 508-0283 / claims@turo.agency. For questions about your
                                        responsibility for damage to your host’s vehicle during a trip, visit https://support.turo.com .
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 ">

                <div class="my-3 text-center">
                    <h3>${{ $car->price }}/day</h3>
                </div>

               <div class="card">
                   <div class="card-body ">
                       <form>
                               <strong>Pick up & Return location</strong>
                               <div class="input-group">
                                   <input type="text" class="form-control " placeholder="Pick up location">
                                   <input type="text" class="form-control" placeholder="Return location">
                               </div>

                               <strong>Pick up date & time</strong>
                               <div class="input-group">
                                   <input type="date" class="form-control">
                                   <input type="time" class="form-control">
                               </div>

                               <strong>Return date & time</strong>
                               <div class="input-group">
                                   <input type="date" class="form-control">
                                   <input type="time" class="form-control">
                               </div>

                               <a href="">
                                   <button class="btn btn-secondary form-control mt-2">
                                       Book
                                   </button>
                               </a>

                       </form>
                   </div>
               </div>
            </div>
        </div>

        <hr>

        <div class="row text-center">
            <h5 class="fw-bold">DESCRIPTION</h5>
            <p class="text-start lh-sm ">
               {{ $car->description }}
            </p>
        </div>

        <hr>

        <ul class="list-group mb-2">
            <li class="list-group-item active">
                <b>Comments ({{ count($car->reviews) }})</b>
            </li>
            @foreach($car->reviews as $review)
                <li class="list-group-item">
                    @can('delete-review', $review)
                        <a href="{{ url("/reviews/delete/$review->id") }}"
                            class="btn-close float-end">
                        </a>
                    @endcan
                    <div class="small mt-2 ">
                        <b class="text-secondary">{{ $review->user->name }}</b>
                        {{ $review->created_at->diffForHumans() }}
                    </div>
                    {{ $review->review_feedback }}
                </li>
            @endforeach
        </ul>

        @auth
            <form action="{{ url("/reviews/add") }}" method="post">
                  @csrf
                  <input type="hidden" name="car_id" value="{{ $car->id }}">
                  <textarea name="review_feedback" class="form-control my-2"></textarea>
                  <button class="btn btn-secondary">Add Comment</button>
              </form>
        @endauth

    </div>
    @endsection
