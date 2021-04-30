@extends('dashboard_layouts.index')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Visitors
    <div class="pull-right">
      <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
      
  </div>
  </div>
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
      <form method="post" action="{{ route('setting') }}">
        {{csrf_field()}}

        <div class="form-group">
          <label for="price">Name:</label>
          <input name="login_name" type="text" id="body" class="form-control"></ه>
       </div>
          <div class="form-group">
              @csrf
              <label for="title">Email:</label>
              <input type="email" class="form-control" name="login_email" id="title" />
          </div>
          <div class="form-group">
              <label for="price">Password:</label>
              <input name="login_password" type="password" id="body" class="form-control"></ه>
           </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection