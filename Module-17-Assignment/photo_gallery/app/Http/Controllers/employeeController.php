<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\photo;
use App\Models\customer;

use Hash;
use Session;
use Alert;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.login');
    }
	
	public function addphoto()
    {
        return view('employee.addphoto');
    }
	
	public function add(Request $request)
    {
        $data=new photo;
		$data->photo_name=$request->photo_name;
				
		// img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/photo',$filename);  // use move for move image in public/images
		$data->file=$filename; // name store in db

        $multi_filearr = [];
        if($request->hasfile('multi_file'))
         {
            foreach($request->file('multi_file') as $multi_file)
            {
                $file = time().rand(1000,9999).'_img.'.$multi_file->extension();
                $multi_file->move('upload/multi_photo/',$file);  
                $multi_filearr[] = $file;  
            }
	        $data->multi_file=implode(',',$multi_filearr);
         }

		$data->save();
		Alert::success('success', 'Successfully Photos Added');
		return redirect('/managephotos');
    }
	
	 public function show()
    {
        $data=photo::all();
        return view('employee.managephoto',['data'=>$data]);
    }
	
	public function employeelogincheck(Request $request)
    {
		$email=$request->email;
		$pass=$request->pass;
		
		$data=employee::where('email','=',$email)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{     //=====session start===//
				session()->put('email',$data->email);
				session()->put('id',$data->id);
				session()->put('ename',$data->ename);
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/dashboards');
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
	
	public function employeelogout()
    {			//=====session close====//
				session()->pull('email');
				session()->pull('id');
				session()->pull('ename');
				Alert::success('Congrats', 'You\'ve Successfully Logout');
				return redirect('/employeelogout');			
    }
	
    /**
     * Update the specified resource in storage.
     */
   
	
	public function manageuser(Request $request)
    {
		$value=$request->search;
		if(!($value=="" || $value==null))
		{
			$data=customer::where('name','LIKE','%'.$value.'%')->get();
			$data=customer::where('email','LIKE','%'.$value.'%')->get();
		}
		else
		{
			$data=customer::all();
		}
		
       return view('employee.manageuser',['data'=>$data,'value'=>$value]);
    }
    
    public function destroy(string $id)
    {
         $data=customer::find($id); 
		$old_img=$data->file;
		if($old_img!="")
		{			
			unlink('upload/customer/'.$old_img);
		}
		$data->delete();
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
		return redirect('/manageusers');
    }
}
