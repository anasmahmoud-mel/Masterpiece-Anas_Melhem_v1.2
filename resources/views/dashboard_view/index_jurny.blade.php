@extends('dashboard_layouts.index')

@section('content')
  


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
                                    <li class="breadcrumb-item"><a href="/dashboard/jurnys">Journey Table </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i
                                    class="fas fa-backward "></i>
                            </a>
                            <a href="create/jurny" class="btn btn-primary me-md-2" type="button">Add New</a>

                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <div class="dt-responsive table-responsive">
                                    <table id="res-config" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">From</th>
                                                <th scope="col">To</th>
                                                {{-- <th scope="col">Date</th>
                                                <th scope="col">Break</th>
                                                <th scope="col">Arrival time</th>
                                                <th scope="col">Driver name</th>
                                                <th scope="col">price</th> --}}
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Display</th>
                                                <th scope="col">Accept</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($jurny as $jurny)


                                                <tr>

                                                    <td>{{ $jurny->from }}</td>
                                                    <td>{{ $jurny->to }}</td>
                                                    {{-- <td>{{ $jurny->date }}</td>
                                                    <td>{{ $jurny->break }}</td>
                                                    <td>{{ $jurny->arrival_time }}</td>
                                                    <td>{{ $jurny->driver_name }}</td>
                                                    <td>{{ $jurny->price }}</td> --}}
                                                    {{-- {{ route('visitors.edit', $visitor->id) }} --}}
                                                    <td><a href="{{ route('jurnys.edit', $jurny->id) }}"
                                                            class="btn btn-success">EDIT</a></td>
                                                    {{-- <td>
                                                        <form action="{{ action('VisitorController@destroy') }}" method="post"> --}}
                                                    <td>
                                                        <form action="{{ route('jurnys.destroy', $jurny->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" data-type="inverse" type="submit">Delete</button>
                                                    </td>
                                                    {{-- <td> <button type="submit" class="btn btn-success">Display</button></td> --}}
                                                    <td><a class="btn btn-primary"
                                                            href="{{ route('jurnys.show', $jurny->id) }}">Show</a></td>
                                                    <td><a href="/accept/{{ $jurny->id }}"
                                                            class="btn btn-success">Accept</a></td>
                                                    </form>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Config. table end -->
                </div>
            </div>
        </div>
        <!-- Warning Section Starts -->
        <div id="styleSelector">

        </div>
    </div>
    </div>







@endsection
