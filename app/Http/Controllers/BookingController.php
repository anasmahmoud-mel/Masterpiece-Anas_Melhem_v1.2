<?php

namespace App\Http\Controllers;

use App\Accept;
use Session;

use Illuminate\Support\Facades\Auth;
use DB;
use App\Booking;
use App\User;
use App\Jurny;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();

        // return view('show')->with('citzien',$citzien);
        return view('dashboard_view.index_booking', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create_booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'booking_name' => 'required',
            'booking_email' => 'required',
            'booking_mobile' => 'required',
            'booking_passenger' => 'required',

        ]);
        // Post::create([
        //     'body' => request('body'),
        //     'title' => request('title'),
        //     'user_id' => auth()->id()
        // ]);


        // Booking::create($request->all());
        Booking::create([
            'booking_name' => request('booking_name'),
            'booking_email' => request('booking_email'),
            'booking_mobile' => request('booking_mobile'),
            'booking_passenger' => request('booking_passenger'),
            'jurny_id' => request('jurny_id'),
            'user_id' => request('user_id'),
            // 'user_email' => auth()->id(),

        ]);

        //return redirect()->route('visitors.index')
        return redirect('jurny/booking');
        // ->with('success', 'Post created successfully.');
    }
    public function storee(Request $request)
    {
        $request->validate([

            'booking_name' => 'required',
            'booking_email' => 'required',
            'booking_mobile' => 'required',
            'booking_passenger' => 'required',

        ]);

        Booking::create($request->all());
        toast('Booking has been succesfully', 'success', 'top-right');

        //return redirect()->route('visitors.index')
        return redirect('/dashboard/bookings');
        // ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('dashboard_view.edit_booking', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([

            'booking_name' => 'required',
            'booking_email' => 'required',
            'booking_mobile'    => 'required',
            'booking_passenger'    => 'required'
        ]);
        $booking->update($request->all());
        toast('Successfully updated', 'success', 'top-right');

        return redirect('/dashboard/bookings');
        // ->route('dashboard_view.index_visitor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        toast('Successfully Deleted', 'success', 'top-right');
        return redirect('/dashboard/bookings');
        // ->route('visitors.dashboard_view.index_visitor');
    }
    public function hello()
    {
        $booking = Booking::with('getpartnars')->get();
        dd($booking);
    }

    public function storex(Request $request)
    {
//       $jurny = Jurny::where('user_id', '=', auth()->id())->get();
//       dd($jurny);

//   ;

// $booking = new Booking();
// $booking->user_id = $request->session()->get('user_id');
// $booking->jurny_id  = $request->session()->get('jurny_id ');
// $booking->additional_info = $request->session()->get('room_price');
//        $booking->date_from = $request->input('arrival');
// $booking->date_from = Carbon::createFromFormat('m/d/Y', $request->input('arrival'))->format('Y-m-d');
//        $booking->date_to = $request->input('departure');
// $booking->date_to = Carbon::createFromFormat('m/d/Y', $request->input('departure'))->format('Y-m-d');
// $booking->save();
// $request->session()->put('success',"Your Book is Successes");
// return redirect("/jurny/main");

   
    //   $booking = new Booking();

    // //  $booking->from=$request->session()->get('from');
    // //  $booking->to= $request->session()->get('to');
    // //  $booking->date= $request->session()->get('date');
    // //  $booking->break= $request->session()->get('break');
    // //  $booking->price= $request->session()->get('price');
    // //  $booking->driver_name= $request->session()->get('driver_name');
    // //  $booking->arrival_time= $request->session()->get('arrival_time');

    //  $booking->save();
    //  $request->session()->put('success',"Your Book is Successes");
    //  return redirect("/jurny/acccunt/{id}");








      //  return view('public_view.my-account', compact('jurny', 'booking'));
    }
    public function profile(Request $request,$id)
    {
        // $user=Auth::User()->id;
        // dd($user);
        // $jurny=Jurny::find($user);
        // dd($jurny);

        // $userjurny=$jurny->jurny;
        // dd($jurny);

        // $book=Booking::where('user_id',$id);
        // $bookings=Booking::find($id);
        // $book=$bookings->booking;
        // dd($book);
        // dd($bookings);
        $bookings = Jurny::where('user_id',$id)->get();
        // $jurny = Booking::find('jurny_id');
        // $jurny=Booking::all();
        // $hh=$jurny->book;
        // dd($hh);

        return view('public_view.my-account',compact('bookings'));



        // $jurny= Jurny::find(4);
        // dd($jurny);
       
        // $prop = DB::table('bookings')->where('booking_email',$email)->get()->all();
        // dd($prop); 
        
        //$jurny_check=
        //   $state= DB::table('');
        //  $booking = DB::table('bookings')->get()->all();   
        //  foreach ($booking as $booking) {
        //   $anas= $booking->jurny_check."<br>";
        //   $state = DB::table('jurnys')->where('id',$anas)->get()->all();
        //    dd($state);
         // echo $anas;
        }
        //   $prop = DB::table('bookings')->get()->all();
    
        // //$prop = DB::table('bookings')->where('booking_email',$email)->select('jurny_check');;
        //  dd($prop); 

          //$anas=Jurny::where('id',$jurny_check)->get()->all();
        
        
        
        // $about = DB::where('id', 'Auth::id()')->first();
        // $booking = Booking::get();
        //  if(auth()->user()->id !== $booking->user_id){
        //     dd($booking);
        //  }
        //  else{
        //      dd('anas');

            //   return view('public_view.my-account', compact('prop', 'state'));
         }
        //  $comment = Accept::get()->all();
