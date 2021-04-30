<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function register()
    {
        $users = User::all();
        return view('dashboard_view.register')->with('users', $users);
    }


      public function create(){
        return view('dashboard_view.add');
      }

      public function store(Request $request)
      {
          User::create($request->all());
          toast('user Adedd','success','top-right')->showCloseButton();
          // return redirect('/order');
  
          return redirect('/dashboard/admin/register');
      }
  



    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('dashboard_view.edit_user')->with('users', $users);
    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/dashboard/admin/register')->with('status', 'Data is Updated ');
    }
    public function registerdelete($id)
    {

        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/dashboard/admin/register')->with('status', 'Data is Deleted ');
    }
}
