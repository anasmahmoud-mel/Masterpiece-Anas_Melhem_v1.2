@extends('dashboard_layouts.index')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit visitor
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
      <form method="post" action="{{ route('visitors.update', $visitor->id) }}">
                @csrf

        @method('PUT')

        <div class="form-group">
          <label for="title">Name:</label>
          <input type="text" class="form-control" name="login_name" id="post_title" value={{ $visitor->login_name }} >
        </div>
        <div class="form-group">
          <label for="price">Email:</label>
          <input type="text" id="post_body" class="form-control" name="login_email" value={{ $visitor->login_email }}>
        </div>
        <div class="form-group">
          <label for="price">Password:</label>
          <input type="password" id="post_body" class="form-control" name="login_password" value={{ $visitor->login_password }}>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection