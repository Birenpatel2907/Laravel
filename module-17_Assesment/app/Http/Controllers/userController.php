<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//===model path load====//
use App\Models\user;

use Hash;
use Session;
use Alert;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('backend.adduser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageuser()
    {
         $data=user::all();  	//view user
		 return response()->json([
	   'status'=>200,
	   'User'=>$data
	   ]);
    }
	
	public function singleuser($id)
    {
         $data=user::find($id);  	//view single user
		 return response()->json([
	   'status'=>200,
	   'User'=>$data
	   ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new user;     //insert user
		$data->name=$request->name;
		$data->passnum=$request->passnum;
		$data->email=$request->email;
		//$data->pass=$request->pass;
		$data->pass=Hash::make($request->pass);
		$data->gen=$request->gen;
		$data->lag=$request->lag;
		$data->mobile=$request->mobile;
		
		
		$data->save();
		
		return response()->json([
			'status'=>200,
			
			'message'=>"Register Success"
			]);
    }

    
     public function edituser(string $id)
    {
		//$data=user::find($id);
		$data=user::where('id','=',$id)->first();
        return view('backend.edituser',['data'=>$data]);
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
        $data=user::find($id);    //update user
		$data->name=$request->name;
		$data->passnum=$request->passnum;
		$data->email=$request->email;
		$data->mobile=$request->mobile;
		$data->gen=$request->gen;
		$data->lag=$request->lag;
		
		$data->update();
		return response()->json([
			'status'=>200,
			'message'=>"Update Success"
			]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
         $data=user::find($id); // delete user
		 $data->delete();
		 return response()->json([
		'status'=>200,
		'msg'=>"Delete Success"
		]);
    }
	
	public function login(Request $request)
    {
		$email=$request->email;
		$pass=$request->pass;
		
		$data=user::where('email','=',$email)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{    
					return response()->json([
					'status'=>200,
					'msg'=>"User Login Success",
					]);
			}
			else
			{
				return response()->json([
					'status'=>301,
					'msg'=>"Login Failed, Wrong Password"
					]);
			}
		}
		else
		{
				return response()->json([
					'status'=>301,
					'msg'=>"Login Failed, Wrong Username"
					]);
		}
    }
}
