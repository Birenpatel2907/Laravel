<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\countrie;
use App\Mail\welcomemail;

use Hash;
use Alert;
use Session;
use Mail;
use paginate;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=countrie::all();
        return view('frontend.signup',['data'=>$data]);
    }


	public function alldata()
    {
	   $data=customer::paginate(3);  	
       return view('backend.manage_user',['data'=>$data]);
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
	$name=$data->name=$request->name;
	$email=$data->email=$request->email;
	$pass=$data->pass=$request->pass;
		$data->pass=Hash::make($request->pass);
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		
		//img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);  // use move for move image in public/images

		$data->file=$filename; // name store in db
		
		$data->save();
		
		$emaildata=array("name"=>$name,"email"=>$email,"pass"=>$pass);
		Mail::to($email)->send(new welcomemail($emaildata));
		return redirect('/login');
		
    }

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
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/index');
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
				Alert::success('Congrats', 'You\'ve Successfully Logout');
				return redirect('/index');			
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
        $data=customer::find($id); //
		$old_img=$data->file;
		if($old_img!="")
		{			
			unlink('upload/customer/'.$old_img);
		}
		$data->delete();
		return redirect('/manage_user');
    }
}
