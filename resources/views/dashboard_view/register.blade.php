@extends('dashboard_layouts.index')

@section('content')
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Data Admin
            </h3>
            <nav aria-label="breadcrumb">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
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
                        <a href="/dashboard/admin/create/" class="btn btn-primary me-md-2" type="button">Add New</a>
                    </div>
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                            <tr>
                                 <td>{{ $user->name }}</td>
                                 <td>{{ $user->email }}</td>
                                 <td>{{ $user->usertype }}</td>
                                 <td><a href="/dashboard/admin/register/{{ $user->id }}" class="btn btn-success">EDIT</a></td>
                                 <td><a href="/dashboard/admin/delete/{{ $user->id }}" class="btn btn-danger">DELETE</a></td>
             
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
