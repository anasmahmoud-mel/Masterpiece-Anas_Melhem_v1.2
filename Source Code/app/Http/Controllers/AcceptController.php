<?php

namespace App\Http\Controllers;

use App\Accept;
use App\Jurny;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accepts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jurny $id)
    {
        $request->validate([

            'from'         => 'required',
            'to'           => 'required',
            'date'         => 'required',
            'break'        => 'required',
            'arrival_time' => 'required',
            'driver_name'  => 'required',


        ]);
        Accept::create($request->all());
        toast('Allowd to be in search for user ','success','top-right');
        $id->delete();
        return redirect('dashboard/jurnys');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function show(Accept $accept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function edit(Accept $accept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accept $accept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accept $accept)
    {
        //
    }
}
