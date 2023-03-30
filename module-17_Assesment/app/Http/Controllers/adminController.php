<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//===model path load====//
use App\Models\admin;

use Hash;
use Session;
use Alert;

class adminController extends Controller
{
    public function admin()
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
