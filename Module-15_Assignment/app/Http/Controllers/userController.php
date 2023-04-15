<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $email=$request->email;
		$pass=$request->pass;
		$data=user::where("email","=",$email)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{
				return response()->json([
					"status"=>200,
					"msg"=>"Login Success",
				]);
			}	
			else
			{
				return response()->json([
					"status"=>401,
					"msg"=>"Incorrect Password",
				]);
			}	
		}	
		else
		{
			return response()->json([
					"status"=>401,
					"msg"=>"Invalid Username",
				]);
		}	
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new user;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->pass=Hash::make($request->pass);
		$data->mobile=$request->mobile;
		$data->gender=$request->gender;
		$data->lag=$request->lag;
		$data->country=$request->country;
		if($request->hasFile('file'))
			{
				$file=$request->file('file');		
				$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
				$file->move('upload/user/',$filename);  // use move for move image in public/images
				$data->file=$filename;
			}
		$data->save();
		return response()->json([
			"status"=>200,
			"msg"=>"Register Success",
		]);
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
