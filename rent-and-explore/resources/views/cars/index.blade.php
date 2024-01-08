
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Looking for a vehicle? You’re at the right place.</h1>

        <div id="carouselExampleInterval" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('/storage/images/toyota-corolla.svg') }}" class="d-block w-100" style="height: 400px" alt="...">
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

        <h1 class="mb-4">Our most popular destinations</h1>
        <div class="container text-center mb-5">
            <div class="row justify-content-between mb-3">
                <div class="row justify-content-between mb-3">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-4 fw-bold">
                               <h3> KyiteHteeYoe Pagoda</h3>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('/storage/images/destinations/kyite-htee-yoe.jpg') }}" class="img-thumbnail"
                                     alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-4 fw-bold">
                                <h3>ChaungThar Beach</h3>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('/storage/images/destinations/chaung-thar.jpg') }}" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mb-3">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-4 fw-bold">
                                <h3>Taunggyi</h3>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('/storage/images/destinations/taung-gyi.jpg') }}" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-4 fw-bold">
                               <h3>Ngapali Beach</h3>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('/storage/images/destinations/ngapali_beach.jpg') }}" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mb-3">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-4 fw-bold">
                                <h3>Bagan</h3>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('/storage/images/destinations/bagan.jpg') }}" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-4 fw-bold">
                                <h3>Kawthoung</h3>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('/storage/images/destinations/kaw-thoung.jpg') }}" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>A fleet that meets your needs</h3>

            <div class="row ">
                <div class="col-lg-9 float-start">
                    <h4 class="text-muted">Take the opportunity to test the new models</h4>
                </div>
                <div class="col-lg-3">
                    {{ $cars->links()  }}
                </div>
            </div>

        <div class="row flex-wrap text-center">
            @foreach ($cars as $car)
                    <div class="col-12 col-md-6 col-xl-3 p-3">
                        <a href='{{ url("/cars/detail/$car->id") }}' class="text-decoration-none " >
                            <div class="card">
                                <img src="{{ asset('storage/images/cars/' . basename($car->photo)) }}" class="card-img-top" style="height: 200px">
                                <div class="card-body">
                                    <div class="row flex-wrap">
                                        <p class="card-text fw-bold ">{{ $car->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>

        <h5>Frequently Asked Questions</h5>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What do I need to rent a car?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        To book your car, all you need is a credit or debit card. When you pick the car up, you’ll need:
                        <ul>
                            <li>Your voucher / eVoucher, to show that you’ve paid for the car.</li>
                            <li>The main driver’s credit / debit card, with enough available funds for the car’s deposit.</li>
                            <li>Each driver’s full, valid driving licence, which they’ve held for at least 12 months (often 24).</li>
                            <li>Your passport and any other ID the car rental company needs to see.</li>
                        </ul>
                            Different car rental companies have different requirements,
                            so please make sure you check the car’s terms and conditions as well.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How old do I have to be to rent a car?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                         For most car rental companies, the age requirement is between 21 and 70 years old.
                             If you’re under 25 or over 70, you might have to pay an additional fee.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I book a rental car for someone else?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, as long as they meet these requirements. Just fill in their details
                        while you’re making the reservation.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How do I find the cheapest car rental deal?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We work with all the major international car rental brands (and lots of smaller local companies)
                        to bring you a huge choice of cars at the very best prices. That’s how we can find you cheap car
                        rental deals at over 60,000 locations worldwide.
                        To compare prices and find your ideal car at an unbeatable price, just use our search form.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What should I look for when I’m choosing a car?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Space: You’ll enjoy your rental far more if you choose a car
                                with plenty of room for your passengers and luggage.</li>
                            <li>Fuel policy: Not planning on driving much? A Like for like fuel
                                policy can save you a lot of money.</li>
                            <li>Location: You can’t beat an ‘on-airport’ pick-up for convenience,
                                but an ‘off-airport’ pick-up with a shuttle bus can be much cheaper.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Are all fees included in the rental price?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The vast majority of our rentals include Theft Protection, Collision Damage Waiver (CDW),
                        local taxes, airport surcharges and any road fees. You’ll pay for any ‘extras’ when you pick your car up,
                        along with any young driver, additional driver or one-way fees – but we’ll explain any additional costs
                        before you book your car (and taking your own child seats or GPS can be an easy way to reduce your costs).
                        For more details on what’s included, just check the Ts&Cs of any car you’re looking at.
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
