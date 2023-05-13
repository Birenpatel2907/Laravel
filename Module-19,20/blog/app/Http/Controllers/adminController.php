<?php

namespace App\Http\Controllers;
use App\Models\admin;

use Hash;
use Session;
use \RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function store(Request $request)
    {
     $data = new admin;
     $data->name=$request->name;
     $data->unm=$request->unm;
     $data->pass=Hash::make($request->pass);
     $data->mob=$request->mob;
     $data->save();
     if($data){
        Alert::success('Congrats','You have registered successfully');
        return redirect('/admin_login');
     }
           
    }
     //------------------------------------------Admin Index--------------------------------------
    public function admin_index()
    {
     
    if(!(session()->has('aid'))){
        Alert('Ops!','Login to view this page');  // can not open admin_index page if not logged in...
        return redirect('/admin_login');
    }

        return view('backend.admin_index');
    }

    /**
     * Show the form for creating a new resource.
     */
     //------------------------------------------Admin Login--------------------------------------
    public function admin_login()
    {
        return view('backend.admin_login');
    
    }
     //------------------------------------------Admin Login Check--------------------------------------
     public function logincheck(Request $request)
    {
        $unm=$request->unm;
        $pass=$request->pass;
        $data=admin::where('unm','=',$unm)->first();
        if($data){
            if(Hash::check($pass,$data->pass)){
                session()->put('aunm',$data->unm);
                session()->put('aname',$data->name);
                session()->put('aid',$data->id);
               // $_SESSION['aid']=$data->id;
                Alert::success('Congrats','You have login successfully');
                return redirect('/admin_index');
            }
          else{
            Alert::error('Opps','Wrong Password');
            return redirect()->back();
          }     
        }
        else{
            Alert::error('Opps','Wrong Username');
            return redirect()->back();
          }
        
    }
     //------------------------------------------Admin Logout--------------------------------------
    public function logout()
    {
        session()->pull('aid');
        session()->pull('aname');
        session()->pull('aunm');
        Alert::success('Congrats','You have logout successfully');
       return redirect('/admin_login');
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
