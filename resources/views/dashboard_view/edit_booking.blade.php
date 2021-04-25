@extends('dashboard_layouts.index')

@section('content')
<style>
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
</div>
@endsection