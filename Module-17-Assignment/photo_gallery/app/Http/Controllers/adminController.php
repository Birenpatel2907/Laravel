<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

use Hash;
use Session;
use Alert;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('backend.login');
    }

   public function adminlogincheck(Request $request)
    {
		$email=$request->email;
		$pass=$request->pass;
		
		$data=admin::where('email','=',$email)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{     //=====session start===//
				session()->put('email',$data->email);
				session()->put('id',$data->id);
				session()->put('name',$data->name);
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/dashboard');
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
				Alert::error('Login Failed', 'Wrong Username');
				return redirect()->back();
		}
    }
	
	public function adminlogout()
    {			//=====session close====//
				session()->pull('email');
				session()->pull('id');
				session()->pull('name');
				Alert::success('Congrats', 'You\'ve Successfully Logout');
				return redirect('/admin');			
    }
   
   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
