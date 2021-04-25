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

                                    <li class="bkg-2"><a href="#s-2" class="selected">login </a></li>
                                    <li class="bkg-3"><a href="#s-3">insart a jurny</a></li>

                                </ol>
                            </div>

                            <div class="stpe-content">
                                <div class="direction-data wow fadeInDown animated"></div>
                                <div class="cars-data wow fadeInUpBig animated">



                                    <div class="line"></div>
                                    <form class="" action="{{ route('partners.store') }}" method="post">
                                        @csrf

                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" id="email" type="text" name="partner_email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" id="password" type="password"
                                                name="partner_password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary"> Log in</button>
                                        </div>
                                    </form>
                                    <div class="line"></div>
                                </div>
                                <div class="client-data hide wow fadeInLeft">
                                    <br>


                                    <div class="clearfix"></div>
                                    <form action="{{ route('jurnys.store') }}" method="post">
                                        @csrf

                                        {{ csrf_field() }}
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="from-insert">From</label>

                                                <select class="form-control input-lg" name="from" id="from">
                                                    <option value="Amman">Amman</option>
                                                    <option value="Irbid">Irbid</option>
                                                    <option value="Mafraq">Mafraq</option>
                                                    <option value="AL-Zarqa">AL-Zarqa</option>
                                                    <option value="Ajlon">Ajlon</option>
                                                    <option value="Jerash">Jerash</option>
                                                    <option value="madaba">madaba</option>
                                                    <option value="Al-Salt">Al-Salt</option>
                                                    <option value="Ma'an">Ma'an</option>
                                                    <option value="Tafila">Tafila</option>
                                                    <option value="Aqaba">Aqaba</option>
                                                    <option value="Al-Karak">Al-Karak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="to-insert">To</label>


                                                <select class="form-control input-lg" name="to" id="to">
                                                    <option value="Amman">Amman</option>
                                                    <option value="Irbid">Irbid</option>
                                                    <option value="Mafraq">Mafraq</option>
                                                    <option value="AL-Zarqa">AL-Zarqa</option>
                                                    <option value="Ajlon">Ajlon</option>
                                                    <option value="Jerash">Jerash</option>
                                                    <option value="madaba">madaba</option>
                                                    <option value="Al-Salt">Al-Salt</option>
                                                    <option value="Ma'an">Ma'an</option>
                                                    <option value="Tafila">Tafila</option>
                                                    <option value="Aqaba">Aqaba</option>
                                                    <option value="Al-Karak">Al-Karak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="date-insert">Date</label>
                                                <input class="form-control" id="date-insert" type="date" name="date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Launch time</label>
                                                <input class="form-control" id="launch-insert" type="time" name="break">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Arrival time</label>
                                                <input class="form-control" id="arrival-insert" type="time"
                                                    name="arrival_time">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Driver name</label>
                                                <input class="form-control" id="driver-insert" type="text"
                                                    name="driver_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Price</label>
                                                <input class="form-control" id="driver-insert" type="duble" name="price">
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
                      
{{-- 
                        @foreach ($jurny as $jurnys)

                        <h3><strong class="color">1.</strong> Direction :</h3>
                        <ul class="report">
                            <li><strong>From :</strong><em class="em-picking-up">{{ $jurnys->from }} </em></li>
                            <li><strong>To :</strong><em class="em-dropping-off"> {{ $jurnys->to }}</em></li>
                            <li><strong>Date & Time :</strong><em class="em-time"> {{ $jurnys->date }} </em></li>
                            <li><strong>Distance : </strong><em class="em-distance"></em></li>
                        </ul>


                    @endforeach --}}
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
                            <li><strong>Your Name :</strong><em class="em-name"> {{Auth::user()->name }}</em></li>
                            <li><strong>Email :</strong><em class="em-email"> {{Auth::user()->email }}</em></li>
                         
                        </ul>

                    </div>
                    <!-- / .sum-client-data-->
                </div>
                <!-- /.booking-summary-->

            </div>
        </div>
    </div>


@endsection
