@extends('dashboard_layouts.index')

@section('content')
 <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Data Jurnys
                </h3>
                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Jurnys</li>
                    </ol>

                </nav>

            </div>
            <div class="card">
                <div class="col-12">
                    <div class="table-responsive">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i
                                    class="fas fa-backward "></i>
                            </a>
                            <a href="create/jurny" class="btn btn-primary me-md-2" type="button">Add New</a>
                        </div>
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>

                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Break</th>
                                    <th scope="col">Arrival time</th>
                                    <th scope="col">Driver name</th>
                                    <th scope="col">price</th>
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
                                    <td>{{ $jurny->date }}</td>
                                    <td>{{ $jurny->break }}</td>
                                    <td>{{ $jurny->arrival_time }}</td>
                                    <td>{{ $jurny->driver_name }}</td>
                                    <td>{{ $jurny->price }}</td>
                                    {{-- {{ route('visitors.edit', $visitor->id) }} --}}
                                    <td><a href="{{ route('jurnys.edit', $jurny->id) }}" class="btn btn-success">EDIT</a></td>
                                    {{-- <td>
                                        <form action="{{ action('VisitorController@destroy') }}" method="post"> --}}
                                    <td>
                                        <form action="{{ route('jurnys.destroy', $jurny->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                    </td>
                                    {{-- <td> <button type="submit" class="btn btn-success">Display</button></td> --}}
                                    <td><a class="btn btn-primary" href="{{ route('jurnys.show',$jurny->id) }}">Show</a></td>
                                    <td><a href="/accept/{{$jurny->id}}" class="btn btn-success">Accept</a></td>
                                    </form>
                
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
