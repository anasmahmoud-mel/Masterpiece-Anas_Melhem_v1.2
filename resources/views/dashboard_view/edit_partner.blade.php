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
      <form method="post" action="{{ route('partners.update', $partner->id) }}">
                @csrf

        @method('PUT')

        <div class="form-group">
          <label for="price">Email:</label>
          <input type="email" id="post_body" class="form-control" name="partner_email" value={{ $partner->partner_email }}>
        </div>
        <div class="form-group">
          <label for="price">Password:</label>
          <input type="password" id="post_body" class="form-control" name="partner_password" value={{ $partner->partner_password }}>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection