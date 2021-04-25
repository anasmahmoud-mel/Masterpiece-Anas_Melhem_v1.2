@extends('dashboard_layouts.index')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Jurny
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
      <form method="post" action="{{ route('settings') }}">
          <div class="form-group">
              @csrf
              <label for="title">From:</label>
              <select class="form-control input-lg" name="from" id="from" >
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
              <label for="price">To</label>
            
              <select class="form-control input-lg" name="to" id="to" >
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
              <label for="price">Date</label>
              <input name="date" type="date" id="body" class="form-control"></ه>
          </div>
          <div class="form-group">
              <label for="price">Arrivel Time</label>
              <input name="arrival_time" type="time" id="body" class="form-control"></ه>
          </div>
          <div class="form-group">
              <label for="price">Break</label>
              <input name="break" type="time" id="body" class="form-control"></ه>
          </div>
          <div class="form-group">
              <label for="price">Driver Name</label>
              <input name="driver_name" type="text" id="body" class="form-control"></ه>
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input name="price" type="double" id="body" class="form-control"></ه>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection