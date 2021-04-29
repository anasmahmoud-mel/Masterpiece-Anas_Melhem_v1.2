@extends('dashboard_layouts.index')

@section('content')
    <!-- MAIN CONTENT-->
    {{-- <div class="main-panel">
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
                          
                        </div>
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>

                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Show</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contact as $contact)
                                <tr>
                                    <td>{{ $contact->contact_fname }}</td>
                                    <td>{{ $contact->contact_lname }}</td>
                                    <td>{{ $contact->contact_email }}</td>
                                    <td>{{ $contact->contact_subject }}</td>
                                    <td>{{ $contact->contact_message }}</td>
                                    <td>
                                        <a href="{{ route('contacts.show', $contact->id) }}"
                                            class="btn btn-success">Show</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
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
                                        <h4>Contact Table</h4>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Contact Table</a>
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
                            <div class="pull-left">
                                <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i
                                        class="fas fa-backward "></i>
                                </a>
                      

                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <div class="dt-responsive table-responsive">
                                        <table id="res-config" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Subject</th>
                                      
                                                    <th scope="col">Show</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($contact as $contact)
                                                <tr>
                                                    <td>{{ $contact->contact_fname }}</td>
                                                    <td>{{ $contact->contact_lname }}</td>
                                                    <td>{{ $contact->contact_email }}</td>
                                                    <td>{{ $contact->contact_subject }}</td>
                                                  
                                                    <td>
                                                        <a href="{{ route('contacts.show', $contact->id) }}"
                                                            class="btn btn-success">Show</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </td>
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
