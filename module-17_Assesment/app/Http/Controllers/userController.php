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
		 return view('backend.manageuser',['data'=>$data]);
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
		$data->pass=$request->pass;
		$data->pass=Hash::make($request->pass);
		$data->mobile=$request->mobile;
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
	
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Register');
		return redirect('/dashboard');
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
     public function edit(string $id)
    {
		
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
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Update');
		return redirect('/manageuser');
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
		 Alert::success('Congrats', 'You\'ve Successfully Delete');
		 return redirect('/manageuser');
    }
}
