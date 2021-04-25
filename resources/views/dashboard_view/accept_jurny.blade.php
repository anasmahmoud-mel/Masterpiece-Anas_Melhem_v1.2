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
      <form method="post" action="/accept/save/{{$jurny->id}}">
                @csrf
           
   

        <div class="form-group">
          <label for="price">From:</label>
        
          
          <select class="form-control input-lg" name="from" id="from">
            <option value="Amman">Amman</option>
            <option value="Irbid">Irbid</option>
            <option value="Mafraq">Mafraq</option>
            <option value="AL-Zarqa">AL-Zarqa</option>
            <option value="Ajlon">Ajlon</option>
            <option value="Jerash">Jerash</option>
            <option value="madaba">madaba</option>
            <option value="Al-Salt">Al-Salt</option>
            <option value="Ma'an">Ma'an</option>
            <option value="Tafila">Tafila</option>
            <option value="Aqaba">Aqaba</option>
            <option value="Al-Karak">Al-Karak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="price">To:</label>
          <select class="form-control input-lg" name="to" id="to">
            <option value="Amman">Amman</option>
            <option value="Irbid">Irbid</option>
            <option value="Mafraq">Mafraq</option>
            <option value="AL-Zarqa">AL-Zarqa</option>
            <option value="Ajlon">Ajlon</option>
            <option value="Jerash">Jerash</option>
            <option value="madaba">madaba</option>
            <option value="Al-Salt">Al-Salt</option>
            <option value="Ma'an">Ma'an</option>
            <option value="Tafila">Tafila</option>
            <option value="Aqaba">Aqaba</option>
            <option value="Al-Karak">Al-Karak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="price">Date:</label>
          <input type="text" id="post_body" class="form-control" name="date" value={{ $jurny->date }}>
        </div>
        <div class="form-group">
          <label for="price">Break:</label>
          <input type="text" id="post_body" class="form-control" name="break" value={{ $jurny->break }}>
        </div>
        <div class="form-group">
          <label for="price">Arrival_time:</label>
          <input type="text" id="post_body" class="form-control" name="arrival_time" value={{ $jurny->arrival_time }}>
        </div>
        <div class="form-group">
          <label for="price">Driver_name:</label>
          <input type="text" id="post_body" class="form-control" name="driver_name" value={{ $jurny->driver_name }}>
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="double" id="post_body" class="form-control" name="price" value={{ $jurny->price }}>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection