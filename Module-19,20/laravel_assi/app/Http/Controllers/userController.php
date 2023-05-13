<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\welcomemail;
use App\Models\user;

use Mail;
use Hash;
use Session;
use Alert;


class userController extends Controller
{
   public function alldata()
    {
	   $data=user::paginate(3);  	
       return view('backend.manageuser',['data'=>$data]);
    }

  public function store(Request $request)
  {
		$data=new user;
   $name=$data->name=$request->name;
   $email= $data->email=$request->email;
   $pass= $data->pass=$request->pass;
		$data->pass=Hash::make($request->pass);
		$data->mobile=$request->mobile;
		$data->file="abc";
	// img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/image/',$filename);  // use move for move image in public/images
		$data->file=$filename; // name store in db 
    $data->save();
	Alert::success('Congrats', 'You\'ve Successfully Register!!!');
	
		$emaildata=array("name"=>$name,"email"=>$email,"pass"=>$pass);
		Mail::to('gitapatel01061966@gmail.com')->send(new welcomemail($emaildata));
    return redirect('userlogin');

  }

  public function userlogin()
    {
        return view('frontend.userlogin');
    }
    public function logincheck(Request $request)
    {
       $email=$request->email;
		$pass=$request->pass;
		
		$data=user::where('email','=',$email)->first();
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
	
	public function destroy(string $id)
    {
        $data=user::find($id); //
		$old_img=$data->file;
		if($old_img!="")
		{			
			unlink('upload/image/'.$old_img);
		}
		$data->delete();
		return redirect('/manageuser');
    }
}
