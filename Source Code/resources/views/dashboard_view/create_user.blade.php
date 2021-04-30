@extends('dashboard_layouts.index')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Admin
    
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
      <form method="post" action="{{ route('users.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">name:</label>
              <input type="text" class="form-control" name="name" id="title" />
          </div>
          <div class="form-group">
              <label for="price">Body:</label>
              <textarea name="email" id="body" class="form-control"></textarea>
              
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection