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
                                    <li class="breadcrumb-item"><a href="/dashboard/contacts">Contact Table</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Show</a>
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
     
    
    
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="card">

                            <!-- Email-card start -->
                            <div class="card-block email-card">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-3">
                                        <div class="user-head row">
                                            <div class="user-face">
                                                <img class="img-fluid"
                                                    src="{{ asset('dashboard_theme\assets\files\assets\images\logo.png') }}"
                                                    alt="Theme-Logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-9">
                                        <div class="mail-box-head row">
                                            <div class="col-md-12">
                                                <form class="f-right">

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Left-side section start -->
                                    <div class="col-lg-12 col-xl-3">
                                        <div class="user-body">



                                        </div>
                                    </div>
                                    <!-- Left-side section end -->
                                    <!-- Right-side section start -->
                                    <div class="col-lg-12 col-xl-9">
                                        <div class="mail-body">
                                            <div class="mail-body-content email-read">
                                                <div class="card">
                                                    <div class="card-header">

                                                        <h6 class="f-right">{{$contact->created_at}}</h6>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="media m-b-20">
                                                            <div class="media-left photo-table">
                                                                <a href="#">
                                                                    <img class="media-object img-radius"
                                                                        src="{{ asset('dashboard_theme\assets\files\assets\images\avatar-3.jpg') }}"
                                                                        alt="E-mail User">
                                                                </a>
                                                            </div>
                                                            <div class="media-body photo-contant">
                                                                <a href="#">
                                                                    <h6 class="user-name txt-primary">{{$contact->contact_fname}}</h6>
                                                                </a>
                                                                <a class="user-mail txt-muted" href="#">
                                                                    <h6><span class="__cf_email__"
                                                                             data-cfemail="503a3f383e343f356165646310373d31393c7e333f3d">{{$contact->contact_email}}</span>
                                                                    </h6>
                                                                </a>
                                                                <div>
                                                                    <h6 class="email-welcome-txt">Hello Dear...</h6>
                                                                    <p class="email-content">
                                                                    {{$contact->contact_message}}
                                                                    </p>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Right-side section end -->
                                </div>
                            </div>
                            <!-- Email-card end -->

                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
 


@endsection
