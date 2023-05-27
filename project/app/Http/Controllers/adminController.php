<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class adminController extends Controller
{
    public function register_admin()
    {
        return view('backend.register_admin');
    }
    public function register(Request $request)
    {
        $admin_reg=new admin;
        $admin_reg->aname=$request->aname;
        $admin_reg->anm=$request->anm;
        $admin_reg->apass=Hash::make($request->apass);

        $admin_reg->save();
        Alert::Success('Congrats','You\'ve Successfully Registered');
        return redirect('/admin_index');
 
    }

    public function admin_index()
    {
        return view('backend.admin_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function chk_login(Request $request)
    {
        $anm=$request->anm;
        $apass=$request->apass;
        $chk_login=admin::where('anm','=',$anm)->first();

        if($chk_login){
             if(Hash::check($apass,$chk_login->apass)){
                    session()->put('aname',$chk_login->aname);
                    session()->put('aid',$chk_login->id);
                 Alert::success('Logged in successfully...');
                 return redirect('/dashboard');
             }
             else{
                 Alert::error('Ops! Login Failed','Wrong Password...');
                 return redirect('/admin_index');
             }
        }
        else{
             Alert::error('Ops! Login Failed','Wrong Username...');
             return redirect('/admin_index');
        }
        
    }
    public function logout()
    {
      session()->pull('aname');
      session()->pull('aid');

            Alert::success('Logout Successfully...');
            return redirect('/admin_index');
    }
    /**
     * Store a newly created resource in storage.
     */
   
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
