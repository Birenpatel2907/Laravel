<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_brands()
    {
        return view('backend.add_brands');
    }
    public function store(Request $request)
    {
        $store_brands=new brand;

        $store_brands->brand=$request->brand;

        $store_brands->save();

        Alert::Success('Brand name has been added...');
        return redirect('/add_brands');
    }

    /**
     * Display the specified resource.
     */
    public function manage_brands()
    {
        $manage_brands=brand::all();
        return view('backend.manage_brands',["manage_brands"=>$manage_brands]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_brand(string $id)
    {
        $edit_brand=brand::where('id','=',$id)->first();
        return view('backend.edit_brand',["edit_brand"=>$edit_brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_brand(Request $request, string $id)
    {
        $update_brand=brand::find($id);
        $update_brand->brand=$request->brand;
        
        $update_brand->save();
        if( $update_brand->save())
        {
            Alert::Success('Brand Name has been updated...');
            return redirect('/manage_brands');
        }
        else{
            Alert::error('Error in updating Brand Name...');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_brand(string $id)
    {
        $delete_brand=brand::find($id);
        if($delete_brand){
            $delete_brand->delete();
            Alert::Success('Brand has been deleted...');
            return redirect('/manage_brands');
        }
        else{
            Alert::error('Error in deleting Brand...');
            return redirect()->back();
        }
    }
}
