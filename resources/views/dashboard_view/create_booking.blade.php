@extends('dashboard_layouts.index')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Booking
    <div class="pull-right">
      <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
  </div>
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
      <form method="post" action="{{ route('settinges') }}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Name:</label>
          <input type="text" class="form-control" name="booking_name" id="title" />
      </div>
          <div class="form-group">
              @csrf
              <label for="title">Email:</label>
              <input type="email" class="form-control" name="booking_email" id="title" />
          </div>
          <div class="form-group">
            <label for="title">Mobile:</label>
            <input type="text" class="form-control" name="booking_mobile" id="title" />
        </div>
          <div class="form-group">
              <label for="price">Passenger</label>
              <input name="booking_passenger" type="number" id="body" class="form-control"></ه>
              
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection