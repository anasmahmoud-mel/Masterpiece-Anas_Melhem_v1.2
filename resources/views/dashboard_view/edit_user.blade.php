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
                                                <h4>Admin / User Table</h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="/dashboard/admin/register">Users Table</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Edit Users</a>
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
                                                    <form action="/dashboard/admin/update/{{ $users->id }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        {{-- @method('PUT') --}}
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }}
                                                        <div class="form-group has-success">
                                                            <label for="cc-name" class="control-label mb-1"> Name</label>
                                                            <input id="cc-name" name="name" type="text" class="form-control cc-name valid"
                                                                value="{{ $users->name }}">
                                                        </div>
                                
                                                        <div class="form-group has-success">
                                                            <label for="cc-name" class="control-label mb-1">Email</label>
                                                            <input id="cc-email" name="email" type="text" class="form-control cc-name valid"
                                                                value="{{ $users->email }}">
                                                        </div>
                                                        {{-- <div class="form-group has-success">
                                                            <label for="cc-name" class="control-label mb-1">Mobile</label>
                                                            <input id="cc-mobile" name="mobile" type="text" class="form-control cc-name valid"
                                                                value="{{ $users->mobile }}">
                                                        </div> --}}
                                                        <div class="form-group has-success">
                                                            <label for="cc-name" class="control-label mb-1">Password</label>
                                                            <input id="cc-password" name="password" type="password" class="form-control cc-name valid"
                                                                value="">
                                                        </div>
                                                        <div class="from-group">
                                                            <label>Give Role</label>
                                                            <select name="usertype" class="from-control">
                                                                <option value="admin">Admin</Option>
                                                                <option value="user">User</Option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                                <span id="payment-button-amount">Update</span>
                                                            </button>
                                                            {{-- <button id="payment-button" type="submit"
                                                                class="btn btn-lg btn-danger btn-block">
                                                                <span id="payment-button-amount">Cancel</span>
                                                            </button> --}}
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        @endsection
