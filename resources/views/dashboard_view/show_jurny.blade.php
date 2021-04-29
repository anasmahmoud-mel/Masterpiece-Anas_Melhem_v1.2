@extends('dashboard_layouts.index')

@section('content')
    {{-- <style>
        .uper {
            margin-top: 40px;
        }

    </style>
     <a class="btn btn-primary" href="/dashboard/jurnys" title="Go back"> <i class="fas fa-backward "></i> </a>

    <div class="card uper">
        
        <div class="card-header">
            View Jurny
            
        </div>
    
        <div class="card-body">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>From:</strong>

                        {{ $jurny->from }}

                    </div>

                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>TO:</strong>

                        {{ $jurny->to }}

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Date:</strong>

                        {{ $jurny->date }}

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Break:</strong>

                        {{ $jurny->break }}

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Arrival Time:</strong>

                        {{ $jurny->arrival_time }}

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Driver Name:</strong>

                        {{ $jurny->driver_name }}

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Price:</strong>

                        {{ $jurny->price}}

                   

                </div>
                

            </div>

        </div>
    </div>
    </div> --}}

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Journey Table</h4>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="/dashboard/jurnys">Journey Table</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Show </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <!-- Invoice list card start -->
                        <div class="col-sm-4">
                            <div class="card card-border-primary">

                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6 center">
                                            <ul class="list list-unstyled">
                                                <strong>From:</strong>

                                                {{ $jurny->from }}
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 center">
                                            <ul class="list list-unstyled">
                                                <strong>To:</strong>

                                                {{ $jurny->to }}
                                            </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6 center">
                                            <ul class="list list-unstyled">
                                                <strong>Break time:</strong>

                                                {{ $jurny->break }}
                                            </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6 center">
                                            <ul class="list list-unstyled">
                                                <strong>Arrival time:</strong>

                                                {{ $jurny->arrival_time }}
                                            </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6 center">
                                            <ul class="list list-unstyled">
                                                <strong>Name:</strong>

                                             {{ $jurny->driver_name }}
                                            </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6 center">
                                            <ul class="list list-unstyled">
                                                <strong>Price:</strong>

                                             {{ $jurny->price }}
                                            </ul>
                                        </div>
                                    </div>
                                 </div>
                                <div class="card-footer">


                                    <!-- end of pull-right class -->
                                </div>
                                <!-- end of card-footer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
