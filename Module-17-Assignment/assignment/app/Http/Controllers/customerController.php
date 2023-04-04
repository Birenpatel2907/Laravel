<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;


use Hash;
use Session;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.signup');
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
        $data=new customer;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->pass=$request->pass;
		$data->pass=Hash::make($request->pass);
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		
		//img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);  // use move for move image in public/images

		$data->file=$filename; // name store in db
		
		$data->save();
		return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function login()
    {
        return view('frontend.login');
    }
	
	public function logincheck(Request $request)
    {
		$email=$request->email;
		$pass=$request->pass;
		
		$data=customer::where('email','=',$email)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{
				session()->put('email',$data->email);
				session()->put('name',$data->name);
				
				return redirect('/home');
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
	
	public function logout()
    {
				session()->pull('email');
				session()->pull('name');
				
				return redirect('/home');			
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
