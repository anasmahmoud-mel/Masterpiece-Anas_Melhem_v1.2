@extends('dashboard_layouts.index')

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
    
    </div>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">Name</th>
             
            </tr>
        </thead>
        <tbody>  
            @foreach ($jurnys as $jurny)


                <tr>
                
                    <th>{{ $jurny->from }}</th>
              
                
            

                </tr>
            @endforeach
        </tbody>
    </table>





@endsection