@extends('public_layouts.header')

@section('main')

    <!-- /.pricing section -->
    <div id="myaccount">
        <div class="container">
            <div class="text-center ">
                <!-- /.pricing title -->
                <h2 class="wow fadeInLeft">Welcome : Kimaro Kyoto </h2>
                <div class="title-line wow fadeInRight"></div>
            </div>
            <div class="row account-details">

                <!-- /.account-control -->
                <div class="col-sm-3 account-control padding-b-50 padding-t-50">
                    <div class="panel panel-default sidebar-menu wow  fadeInLeft animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Control Menu</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="bookings-list.html">My bookings</a></li>
                                <li><a href="settings.html">Settings</a></li>
                                <li class="active"><a href="messages.html">Messages</a></li>
                                <li><a href="#">Shop Cart</a></li>
                                <li><a href="index.html">Sign Out</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 account-data padding-b-50 padding-t-50">
                    <div id="tab2" class="box-old-booking box-section animated fadeInUp">
                        <h2 style="padding-bottom: 17px;">Your messages :</h2>

                        <div class="alert success bg-success fade in">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong> <i class="fa fa-star"></i> Welcome Client : </strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio .
                        </div>
                        <div class="alert success bg-warning fade in">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong> <i class="fa fa-star"></i> New offer : </strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio .
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
