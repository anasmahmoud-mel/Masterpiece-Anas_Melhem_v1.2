<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Jurny;
use App\Visitor;
use App\Partner;
use App\User;
use Illuminate\Http\Request;
use DB;


class RelationController extends Controller
{
  public function hasOne()
  {
    //  $booking=\App\Booking::with('jurny')->find(1);
    //  //return $booking -> jurny;
    //  return response()->json($booking);


    //this method to retrive data from jurny table which it selected by the $query in the
    // below code as you can see in line 19 Adding to Booking table coloumn JUST "from "and "to " am used
    // $booking=\App\Booking::with(['jurny'=>function($query){
    //     $query->select('from','to','booking_id');
    // }])->find(1);
    // return response()->json($booking);

    $jurny = Jurny::all();

    return view('public_view.booking', compact('jurny'));
  }


   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function search(Request $request)
  {
    //$jurny=Jurny::all();
    // $soul = $request->from;
    //resources/views/certificates/show.blade
    // ,compact('jurny'));
    // return view('public_view.booking')->with('soul', $soul);

    //  dd($search_text);
    //  return view('public_view.booking',compact('jurny'));

    // if($request->has('search')){
    //   $jurnys= Jurny::search($request->get('search'))->get();	
    // }else{
    //   $jurnys = Jurny::get();
    // }
    
    //$visitor = Visitor::get()->first();
    $search_text = $request->get('take_from');
    $search_text2 = $request->get('take_to');
    $search_text3 = $request->get('pick_up_date');
    $jurny = DB::table('jurnys')->where('from', 'like', '%' . $search_text . '%')
                                ->where('to', 'like', '%' . $search_text2 . '%')
                                ->where('date', 'like', '%' . $search_text3 . '%')
                                
                                ->paginate(5);
      
    // am trying to redirect to another page when result not found(false) but i cant .... 


      return view('public_view.booking', compact('jurny'));
      //dd($jurny);
 
   
 }
   
  

  //  public function search2(){

  //     $search=$_GET['query'];
  //     $jurnys = Jurny::where('from','LIKE','%'.$search.'%')->where('to','LIKE','%'.$search.'%')->get();
  //     return view('dashboard_view.search',compact('jurnys'));


  //  }

  public function profile($id)
  {
    $user = User::where('id', '=', $id)->first();
    //$user = User::find(1);
    //$booking=Booking::all();
    
    //dd($booking);
  
 
  
    //dd($user);
 
   

 //.dd($visitor->login_name);   // $room = Room::where('id','=',$visitor_name)->first();
    return view('public_view.my-account', compact('user'));
  }
  public function findpartner(){
    $anas=Partner::get()->all(); 

      dd($anas);

  }
}
