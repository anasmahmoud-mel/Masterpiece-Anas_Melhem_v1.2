@extends('dashboard_layouts.index')

@section('content')




    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Data Partners
                </h3>
                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Partners</li>
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
                            <a href="create/partner" class="btn btn-primary me-md-2" type="button">Add New</a>
                        </div>
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($partner as $partner)
                                    <tr>

                                        <td>{{ $partner->partner_name }}</td>
                                        <td>{{ $partner->partner_email }}</td>
                                        {{-- {{ route('visitors.edit',$visitor->id)}} --}}
                                        <td><a href="{{ route('partners.edit', $partner->id) }}"
                                                class="btn btn-success">EDIT</a></td>
                                        {{-- <td>  <form action="{{ action('VisitorController@destroy') }}" method="post"> --}}
                                        <td>
                                            <form action="{{ route('partners.destroy', $partner->id) }}" method="post">
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
