@extends('dashboard_layouts.index')

@section('content')
{{-- <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Partner
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('bookings.update', $booking->id) }}">
                @csrf

        @method('PUT')

        <div class="form-group">
          <label for="price">Name:</label>
          <input type="text" id="post_body" class="form-control" name="booking_name" value={{ $booking->booking_name }}>
        </div>
        <div class="form-group">
          <label for="price">Email:</label>
          <input type="email" id="post_body" class="form-control" name="booking_email" value={{ $booking->booking_email }}>
        </div>
        <div class="form-group">
          <label for="price">Mobile:</label>
          <input type="text" id="post_body" class="form-control" name="booking_mobile" value={{ $booking->booking_mobile }}>
        </div>
        <div class="form-group">
          <label for="price">Passenger:</label>
          <input type="text" id="post_body" class="form-control" name="booking_passenger" value={{ $booking->booking_passenger }}>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
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
                                  <h4>Booking Table</h4>
                           
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="page-header-breadcrumb">
                              <ul class="breadcrumb-title">
                                  <li class="breadcrumb-item">
                                      <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="/dashboard/bookings">Booking Table</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="#!">Edit Booking</a>
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
                                    <form method="post" action="{{ route('bookings.update', $booking->id) }}">
                                      @csrf
                      
                              @method('PUT')
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Name:</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="booking_name"  class="form-control"  id="booking_name" value={{ $booking->booking_name }}>
                                                  <span class="messages"></span>
                                              </div>
                                          </div>
                                           <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Email:</label>
                                              <div class="col-sm-10">
                                                  <input type="email" class="form-control" id="email" name="booking_email" value={{ $booking->booking_email }}>
                                                  <span class="messages"></span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mobile:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="booking_mobile"  class="form-control"  id="booking_mobile" value={{ $booking->booking_mobile }}>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 col-form-label">Passenger:</label>
                                          <div class="col-sm-10">
                                              <input type="number" name="booking_passenger"  class="form-control"  id="booking_passenger" value={{ $booking->booking_passenger }}>
                                              <input class="form-control" id="user_id" type="hidden"
                                              name="user_id" value="{{ Auth::user()->id }}">

                                              <span class="messages"></span>
                                          </div>
                                      </div>

                                          <div class="form-group row">
                                              <label class="col-sm-2"></label>
                                              <div class="col-sm-10">
                                                  <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                              </div>
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