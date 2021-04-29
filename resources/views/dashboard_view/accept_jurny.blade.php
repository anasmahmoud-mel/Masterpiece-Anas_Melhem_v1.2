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
                                  <h4>Journey Table</h4>
                              
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="page-header-breadcrumb">
                              <ul class="breadcrumb-title">
                                  <li class="breadcrumb-item">
                                      <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="/dashboard/jurnys">Journey Table</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="#"> Accept Journey </a>
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
                          </div>
                      </div>
                  </div>
          </div>
      </div>
  </div>
</div>

@endsection