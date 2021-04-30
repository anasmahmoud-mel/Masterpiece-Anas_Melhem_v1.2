 @extends('dashboard_layouts.index')

 @section('content')

  <div class="main-panel">
         <div class="content-wrapper">
             <div class="page-header">
                 <h3 class="page-title">
                     Data Visitor
                 </h3>
                 <nav aria-label="breadcrumb">

                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="/dashboard/admin">Dashboard</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Data Visitor</li>
                     </ol>

                 </nav>

             </div>
             <div class="card">
                  <div class="col-12">
                     <div class="table-responsive">
                         <div class="pull-right">
                             <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i
                                     class="fas fa-backward "></i>
                             </a>
                             <a href="create/visitor" class="btn btn-primary me-md-2" type="button">Add New</a>
                         </div>
                         <table id="order-listing" class="table">
                             <thead>
                                 <tr>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Edit</th>
                                     <th>Delete</th>
                                 </tr>
                             </thead>
                             <tbody>

                                 @foreach ($visitor as $visitor)
                                   <tr>
                                         <td>{{ $visitor->login_name }}</td>
                                         <td>{{ $visitor->login_email }}</td>
                                         <td> <a href="{{ route('visitors.edit', $visitor->id) }}"
                                                 class="btn btn-success">EDIT</a></td>
                                          <td>
                                             <form action="{{ route('visitors.destroy', $visitor->id) }}" method="post">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button class="btn btn-danger" type="submit">Delete</button>
                                             </form>
                                         </td>
                                    </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>



 @endsection
