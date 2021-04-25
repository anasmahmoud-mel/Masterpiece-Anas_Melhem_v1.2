@extends('public_layouts.header')

@section('main')



    <div id="booking-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section id="id-130" class="booking booking-2 booking-car">
                        <div class="booking-section">
                            <div class="booking-top-nav wow fadeInTop animated" data-wow-delay="0.9s">
                                <ol>
                                    <li class="bkg-1 done"><a href="main">Find direction</a></li>
                                    <li class="bkg-2"><a href="#s-2" class="selected">Select your jurny</a></li>
                                    <li class="bkg-3"><a href="#s-3">Personal info & payment</a></li>
                                    <li class="bkg-4"><a href="#s-3">Final</a></li>
                                </ol>
                            </div>

                            <div class="stpe-content">
                                <div class="direction-data wow fadeInDown animated"></div>
                                <div class="cars-data wow fadeInUpBig animated">

                                    @if ($jurny->count())
                                        @foreach ($jurny as $jurnys)
                                            <div class="line"></div>
                                            <div class="car-item wow fadeInLeft animated">
                                                <div class="li-car col-xs-12 col-sm-5 col-md-5">
                                                    <img src="{{ asset('public_theme/images/cars/car2.png') }}" alt=""
                                                        class="car">
                                                </div>

                                                <div class="li-car-name col-sm-5 col-md-5">
                                                    <h2> FROM : {{ $jurnys->from }}</h2>
                                                    <h2> TO : {{ $jurnys->to }}</h2>
                                                    <p>Max passanger : 5</p>
                                                    <div class="car-details">
                                                        <div class="">
                                                            <ul class="car-features">
                                                                <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                                                <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                                                <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                                                <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                                                <li><i class="fa fa-flash" data-tooltip=""></i></li>
                                                                <li><i class="fa fa-music" data-tooltip=""></i></li>
                                                            </ul>
                                                            <div class="clearfix"></div>
                                                            <ul class="checklist">
                                                                <li><i class="fa fa-check"></i> Pay at place or pay today
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Pay at place or pay today
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="li-car-price col-xs-12 col-sm-2 col-md-2">
                                                    <div class="car-price-content">
                                                        <b class="overflow car-price">{{ $jurnys->price }}</b><b
                                                            class="price-currency">JD</b><br>
                                                        <del class="overflow del-car-price">10</del><del
                                                            class="del-price-currency">JD</del>
                                                    </div>
                                                    <a class="btn btn-default btn-nxt-booking">Next</a>
                                                </div>

                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-sm-9 account-data padding-b-50 padding-t-50">
                                            <div id="tab2" class="box-old-booking box-section animated fadeInUp">
                                              
                                                <div class="alert danger bg-danger fade in">
                                                   
                                                    <strong> <i class="fa fa-star"></i> New offer : </strong><br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                                                    euismod odio Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Nam viverra euismod odio .
                                                </div>
                                            </div>
                                        </div>

                                    @endif
                                    <div class="line"></div>

                                </div>

                                <div class="client-data hide wow fadeInLeft">
                                    <br>
                                    <form class="display_none" action="customer-orders.html" method="post">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" id="email" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" id="password" type="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>
                                                Log in</button>
                                        </div>
                                    </form>

                                    <div class="clearfix"></div>
                                    <form action="{{ route('bookings.store') }}" method="post">
                                        @csrf

                                        {{ csrf_field() }}
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name-login">Name</label>
                                                <input class="form-control" id="name-login" type="text" name="booking_name" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email-login">Email</label>
                                                <input class="form-control" id="email-login" type="text"
                                                    name="booking_email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{-- <label for="email-login">Email</label> --}}
                                                <input class="form-control" id="user_id" type="hidden"
                                                    name="user_id" value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        @foreach ($jurny as $jurnys)
                                        <input name="jurny_id" id="jurny_id"  type="hidden" value= "{{ $jurnys->id}}" >
                                        @endforeach
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone-login">Phone</label>
                                                <input class="form-control" id="phone-login" type="text"
                                                    name="booking_mobile">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="passenger-login">Passenger</label>
                                                <input class="form-control" id="passenger-login" min="1" max="8"
                                                    type="number" name="booking_passenger">
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="text-center">
                                            <button type="submit" id="client-booking-back"
                                                class="btn btn-default">Back</button>
                                            <button type="submit" id="client-booking-next"
                                                class="btn btn-primary">Next</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="pay-data hide wow fadeInLeft padding-10">
                                    <br>
                                    <h2>Payment section her :</h2>
                                    <br>
                                    <button type="button" id="pay-booking-back" class="btn btn-default">Back</button>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="booking-summary padding-15 col-md-3">
                    <div class="">
                        <h2 class="wow fadeInLeft animated">Booking Summary</h2>
                        <div class="title-line wow fadeInRight animated"></div>
                    </div>
                    <!-- / .title summary-->
                    <div class="sum-direction-data wow fadeInRight animated">

                        @foreach ($jurny as $jurnys)

                            <h3><strong class="color">1.</strong> Direction :</h3>
                            <ul class="report">
                                <li><strong>From :</strong><em class="em-picking-up">{{ $jurnys->from }} </em></li>
                                <li><strong>To :</strong><em class="em-dropping-off"> {{ $jurnys->to }}</em></li>
                                <li><strong>Date & Time :</strong><em class="em-time"> {{ $jurnys->date }} </em></li>
                                <li><strong>Distance : </strong><em class="em-distance"></em></li>
                            </ul>


                        @endforeach


                    </div>
                    <!-- / .sum-direction-data-->
                    <div class="sum-cars-data wow fadeInRight animated">
                        <h3><strong class="color">2.</strong> Your car :</h3>
                        <img src="{{ asset('public_theme/images/cars/car1.png') }}" alt="" class="summary-img">
                    </div>
                    <!-- / .sum-cars-data-->
                    <div class="sum-client-data wow fadeInRight animated">
                        <h3><strong class="color">3.</strong> Personal info :</h3>
                        <ul class="report">
                            <li><strong>Your Name :</strong><em class="em-name"> {{ Auth::user()->name }} </em></li>
                            <li><strong>Email :</strong><em class="em-email"> {{ Auth::user()->email }}</em></li>
                       
                        </ul>

                    </div>
                    <!-- / .sum-client-data-->
                </div>
                <!-- /.booking-summary-->

            </div>
        </div>
    </div>





@endsection
