@extends('dashboard_layouts.index')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Admin</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Admin</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/admin/update/{{ $users->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1"> Name</label>
                            <input id="cc-name" name="name" type="text" class="form-control cc-name valid"
                                value="{{ $users->name }}">
                        </div>

                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Email</label>
                            <input id="cc-email" name="email" type="text" class="form-control cc-name valid"
                                value="{{ $users->email }}">
                        </div>
                        {{-- <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Mobile</label>
                            <input id="cc-mobile" name="mobile" type="text" class="form-control cc-name valid"
                                value="{{ $users->mobile }}">
                        </div> --}}
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Password</label>
                            <input id="cc-password" name="password" type="password" class="form-control cc-name valid"
                                value="">
                        </div>
                        <div class="from-group">
                            <label>Give Role</label>
                            <select name="usertype" class="from-control">
                                <option value="admin">Admin</Option>
                                <option value="user">User</Option>
                            </select>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Update</span>
                            </button>
                            {{-- <button id="payment-button" type="submit"
                                class="btn btn-lg btn-danger btn-block">
                                <span id="payment-button-amount">Cancel</span>
                            </button> --}}
                        </div>
                    </form>
                </div>
            </div>
        @endsection
