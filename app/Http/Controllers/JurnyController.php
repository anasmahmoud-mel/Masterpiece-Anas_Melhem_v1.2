<?php

namespace App\Http\Controllers;

use App\Jurny;
use Illuminate\Http\Request;
use DB;

class JurnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurny = Jurny::all();


        return view('dashboard_view.index_jurny', compact('jurny'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurnys.create_jurny');
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

            'from'         => 'required',
            'to'           => 'required',
            'date'         => 'required',
            'break'        => 'required',
            'arrival_time' => 'required',
            'driver_name'  => 'required',


        ]);
        Jurny::create($request->all());
        return redirect('jurny/insert');
    }
    public function storee(Request $request)
    {
        $request->validate([

            'from'         => 'required',
            'to'           => 'required',
            'date'         => 'required',
            'break'        => 'required',
            'arrival_time' => 'required',
            'driver_name'  => 'required',
            'price'        => 'required',


        ]);

        //Jurny::create($request->all());
        Jurny::create([
            'from'=>request('from'),
            'to'=>request('to'),
            'date'=>request('date'),
            'break'=>request('break'),
            'arrival_time'=>request('arrival_time'),
            'driver_name'=>request('driver_name'),
            'price'=>request('price'),
     
            'user_id'=>auth()->id(),
        
        ]);
        toast('It has been succesfully','success','top-right');
        return redirect('dashboard/jurnys');

        // Or you can take this solutaion
        //$validatedData=  $request->validate([

        // 'from'         => 'required',
        // 'to'           => 'required',
        // 'date'         => 'required',
        // 'break'        => 'required',
        // 'arrival_time' => 'required',
        // 'driver_name'  => 'required',
        // 'price'        => 'required',

        // ]);
        //$jurny = Jurny::create($validatedData)->->with('success', 'Book is successfully saved');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Jurny  $jurny
     * @return \Illuminate\Http\Response
     */
    public function show(Jurny $jurny)
    {
        return view('dashboard_view.show_jurny', compact('jurny'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurny  $jurny
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurny $jurny)
    {
        return view('dashboard_view.edit_jurny', compact('jurny'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurny  $jurny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurny $jurny)
    {
        $request->validate([

            'from'         => 'required',
            'to'           => 'required',
            'break'        => 'required',
            'date'         => 'required',
            'arrival_time' => 'required',
            'driver_name'  => 'required',
            'price'        => 'required'
        ]);
        $jurny->update($request->all());
        toast('Successfully updated','success','top-right');
        return redirect('/dashboard/jurnys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurny  $jurny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurny $jurny)
    {
        $jurny->delete();
        toast('Successfully Deleted','success','top-right');
        return redirect('/dashboard/jurnys');
    }
    // public function show2(){
    //  //return  DB::table('contacts')->get();
    //   //return  DB::table('jurnys')->get();
    // }

    public function move(Jurny $jurny)
    {
        return view('dashboard_view.accept_jurny', compact('jurny'));
     
    }
    public function delete(Jurny $jurny)
    {
        $jurny->delete();
        toast('Successfully Deleted','success','top-right');
        return redirect('/dashboard/jurnys');
    }
  
}
