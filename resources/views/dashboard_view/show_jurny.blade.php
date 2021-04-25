@extends('dashboard_layouts.index')

@section('content')
    <style>
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
    </div>
@endsection
