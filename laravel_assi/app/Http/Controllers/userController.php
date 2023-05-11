<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;
use Hash;
use Session;
use Alert;


class userController extends Controller
{
    //

    public function index()
    {
        $data=users::all();
        return view('backend.manage_user',['data'=>$data]);
    }

  public function store(Request $request)
  {
    $validate= $request->validate([
        'name'=> 'required|alpha',
        'phoneno' => 'required',
        'email' => 'required|unique:users|max:255',
        'password' => 'required',
      

    ]);

    $data=new user;
    $data->name=$request->name;
    $data->phoneno=$request->phoneno;
    $data->email=$request->email;
    $data->password=$request->password;
    $data->password=Hash::make($request->password);
    

    $data->save();
    return redirect('index');

  }

  public function login()
    {
        return view('frontend.login');
    }
    public function logincheck(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $data=user::where('email','=',$email)->first();
        if($data){
            if(Hash::check($password,$data->password)){
                session()->put('email',$data->email);
                session()->put('name',$data->name);
                session()->put('id',$data->id);
                $_SESSION['id']=$data->id;
                Alert::success('you have successfully login');
                return redirect('/index');
            }
          else{
        Alert::error('wrong password');
            return redirect()->back();
          }     
        }
        else{
        Alert::error('Wrong Username');
            return redirect()->back();
          }
        
    }

}
