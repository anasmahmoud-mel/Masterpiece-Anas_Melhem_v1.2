<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::all();

        // return view('show')->with('citzien',$citzien);
        return view('dashboard_view.index_partner', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create_partner');
        
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

            'partner_email' => 'required',
            'partner_password' => 'required',

        ]);
        Partner::create($request->all());
        return redirect('jurny/insert');    
    }
    public function storee(Request $request)
    {
        $request->validate([

            'partner_email' => 'required',
            'partner_password' => 'required',

        ]);
        Partner::create($request->all());
        toast('It has been succesfully','success','top-right');
        return redirect('dashboard/partners');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('dashboard_view.edit_partner', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([

            'partner_email'    => 'required',
            'partner_password' => 'required'
        ]);
        $partner->update($request->all());
        toast('Successfully updated','success','top-right');
        return redirect('/dashboard/partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        toast('Successfully Deleted','success','top-right');
        return redirect('/dashboard/partners');
    }
}
