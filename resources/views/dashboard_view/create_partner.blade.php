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
                                        <h4>Partners Table</h4>
                                 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="/dashboard/partners">Partners Table</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Edit Partners</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert background-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Inputs Validation start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic Inputs Validation</h5>


                                        </div>
                                        <div class="card-block">
                                          <form method="post" action="{{ route('settingss') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                @csrf
                                                <label for="title">Email:</label>
                                                <input type="text" class="form-control" name="partner_email" id="title" />
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Password:</label>
                                                <input name="partner_password" type="password" id="body" class="form-control"></ه>
                            
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                


                    @endsection
