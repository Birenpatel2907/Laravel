<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

use Hash;
use Alert;
use Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
       return view('backend.index');
    }


	public function adminlogincheck(Request $request)
    {
		$anm=$request->anm;
		$apass=$request->apass;
		
		$data=admin::where('anm','=',$anm)->first();
		if($data)
		{
			if(Hash::check($apass,$data->apass))
			{
				session()->put('anm',$data->anm);
				session()->put('id',$data->id);
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
    {
				session()->pull('anm');
				session()->pull('id');
				Alert::success('Congrats', 'You\'ve Successfully Logout');
				return redirect('/admin');			
    }
    /**
     * Show the form for creating a new resource.
     */
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
