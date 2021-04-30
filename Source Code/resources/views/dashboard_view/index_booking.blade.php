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
                                    <h4>Booking Table</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="/dashboard/admin"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Booking Table</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i
                                    class="fas fa-backward "></i>
                            </a>
                            <a href="create/booking" class="btn btn-primary me-md-2" type="button">Add New</a>

                        </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div class="dt-responsive table-responsive">
                                            <table id="res-config" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th> 
                                                        <th scope="col">Email</th> 
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Passenger</th>
                                                        <th scope="col">Edit</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                        @foreach ($booking as $booking)
                        <tr>
 
                           <td>{{ $booking->booking_name }}</td> 
                             <td>{{ $booking->booking_email }}</td> 
                             <td>{{ $booking->booking_mobile }}</td>
                             <td>{{ $booking->booking_passenger }}</td>
                             {{-- {{ route('visitors.edit', $visitor->id) }} --}}
                             <td>
                                 <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-success">Edit</a>
                                 
                             </td>
                
                             <td>
                                 <form action="{{ route('bookings.destroy', $booking->id) }}" method="post" id="yourFormId">
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
                            <!-- Config. table end -->    
                        </div>
                    </div>
                </div>
                <!-- Warning Section Starts -->
                <div id="styleSelector">

                </div>
            </div>
        </div>




        
@endsection
<script>
    //== Class definition
    var SweetAlert2Demo = function() {

        //== Demos
        var initDemos = function() {
            $('.btn-danger').click(function(e) {
                var $form =  $(this).closest("form"); //Get the form here.
                e.preventDefault();
                   swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons:{
                            confirm: {
                                text : 'Yes, delete it!',
                                className : 'btn btn-success'
                            },
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        console.log(Delete); //This will be true when delete is clicked
                        if (Delete) {
                           $form.submit(); //Submit your Form Here. 
                           $('#yourFormId').submit(); //Use same Form Id to submit the Form.
                        }
                    });
        });
        };

        return {
            //== Init
            init: function() {
                initDemos();
            },
        };
    }();

    //== Class Initialization
    jQuery(document).ready(function() {
        SweetAlert2Demo.init();
    });
</script>


<tbody>
{{-- 
    @foreach ($booking as $booking)
        <tr>

            <td>{{ $booking->booking_name }}</td>
            <td>{{ $booking->booking_email }}</td>
            <td>{{ $booking->booking_mobile }}</td>
            <td>{{ $booking->booking_passenger }}</td>
            <td>
                <a href="{{ route('bookings.edit', $booking->id) }}"
                    class="btn btn-success">Edit</a>
               
                <button class="btn btn-danger" onclick="
     event.preventDefault();
     swal({
     title: 'Are you sure?',
     text: 'You wont be able to revert this!',
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3f51b5',
     cancelButtonColor: '#ff4081',
     confirmButtonText: 'Great ',
     buttons: {
     cancel: {
     text: 'Cancel',
     value: null,
     visible: true,
     className: 'btn btn-danger',
     closeModal: true,
     },
     confirm: {
     text: 'OK',
     value: true,
     visible: true,
     className: 'btn btn-primary',
     closeModal: true
       }
     }
             }).then(function(ok){
       if(ok===true)
       document.getElementById('delete-form-{{ $booking->id }}').submit();
    })">delete



                    <form id="delete-form-{{ $booking->id }}"
                        action="{{ route('bookings.destroy', $booking->id) }}"
                        method="post" class="d-none">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $booking->id }}">
                    </form>
                </button>
             </td>
        </tr>
    @endforeach

</tbody> --}}