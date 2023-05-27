<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\countrie;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function user_profile()
    {

        if(session('uid')){
            $uid=session('uid');
           // $user_info=user::join('countries', 'users.cid', '=','countries.id')->first(['users.*', 'countries.country','countries.id as mycid']);
            $user_info=user::join('countries','users.cid','=','countries.id')->where('users.id','=',$uid)->get();
            return view('frontend.user_profile',['user_info'=>$user_info]);
        }
        else{
            Alert::Error('Please login to view your profile.');
            return redirect('/user_login');
        }
       
    }
    public function update_userprofile(Request $request,string $id)
    {
       $data=user::find($id);
       $data->name=$request->name;
       $data->unm=$request->unm;
       $data->gen=$request->gen;
       $data->lang=implode(",",$request->lang);
       $data->mob=$request->mob;
       $data->cid=$request->cid;
       $data->add=$request->add;
       
   
if($request->hasFile('file')){
    $old_img=$data->file;

    $file=$request->file('file');
    
    $path="frontend/assets/upload/user/";
    $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
    $file->move($path,$filename);

    $data->file=$filename;

    unlink('frontend/assets/upload/user/'.$old_img);
}
      

       $data->save();
       Alert::Success('Congrats','Profile Successfully Updated');
       return redirect('/index');

    }

    public function fetch_cid()
    {
        $country=countrie::all();
        return view('frontend.signup_user',['country'=>$country]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function user_login()
    {

        return view('frontend.user_login');
    }
 public function chk_user(Request $request)
    {
        
       $unm=$request->unm;
       $pass=$request->pass;
       $get_user=user::where('unm','=',$unm)->first();
       if($get_user){
            if(Hash::check($pass,$get_user->pass)){

                session()->put('uname',$get_user->name);
                session()->put('uid',$get_user->id);
                session()->put('unm',$get_user->unm);
                Alert::success('Congrats! Logged in successfully...');
                return redirect('/index');
            }
            else{
                Alert::error('Ops! Login Failed','Wrong Password...');
                return redirect()->back();
            }
       }
       else{
            Alert::error('Ops! Login Failed','Wrong Username...');
            return redirect()->back();
       }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
       $reg_user=new user;
       $reg_user->name=$request->name;
       $reg_user->unm=$request->unm;
       $reg_user->pass=Hash::make($request->pass);
       $reg_user->gen=$request->gen;
       $reg_user->lang=implode(",",$request->lang);
       $reg_user->mob=$request->mob;
       $reg_user->cid=$request->cid;
       $reg_user->add=$request->add;
       
   

       $file=$request->file('file');
       $path="frontend/assets/upload/user/";
       $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
       $file->move($path,$filename);

       $reg_user->file=$filename;

       $reg_user->save();
       Alert::Success('Congrats','You\'ve Successfully Registered');
       return redirect('/index');

    }

    /**
     * Display the specified resource.
     */
    public function user_logout()
    {
        session()->pull('uname');
        session()->pull('uid');
        session()->pull('unm');
            Alert::success('Congrats! Logout successfully...');
            return redirect('/user_login');
        
    }
    public function manage_users()
    {
      //  $users=user::all();
        $users=countrie::join('users','countries.id','=','users.cid')->get();
        return view('backend.manage_users',["users"=>$users]);
    }
    public function status(Request $request, string $id)
    {
        $status=user::find($id);
        if($status->status=="Unblocked"){
            $status->status="Blocked";
            $status->save();
            Alert::success('Status has been updated');
           return redirect('/manage_users');

        }
        elseif($status->status=="Blocked"){
            $status->status="Unblocked";
            $status->save();
            Alert::success('Status has been updated');
            return redirect('/manage_users');
        }
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country=countrie::all();
		$edit_user=user::where('id','=',$id)->first();
        return view('frontend.edit_profile',["country"=>$country,"edit_user"=>$edit_user]);
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
