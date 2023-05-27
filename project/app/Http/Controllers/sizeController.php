<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\size;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_sizes()
    {
        return view('backend.add_sizes');
    }
    public function store(Request $request)
    {
        $store_sizes=new size;

        $store_sizes->size=$request->size;

        $store_sizes->save();

        Alert::Success('Size has been added...');
        return redirect('/add_sizes');
    }

    /**
     * Display the specified resource.
     */
    public function manage_sizes()
    {
        $manage_sizes=size::all();
        return view('backend.manage_sizes',["manage_sizes"=>$manage_sizes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_size(string $id)
    {
        $edit_size=size::where('id','=',$id)->first();
        return view('backend.edit_size',["edit_size"=>$edit_size]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_size(Request $request, string $id)
    {
        $update_size=size::find($id);
        $update_size->size=$request->size;
        
        $update_size->save();
        if($update_size->save())
        {
            Alert::Success('Size has been updated...');
            return redirect('/manage_sizes');
        }
        else{
            Alert::error('Error in updating Size...');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_size(string $id)
    {
        $delete_size=size::find($id);
        if($delete_size){
            $delete_size->delete();
            Alert::Success('Size has been deleted...');
            return redirect('/manage_sizes');
        }
        else{
            Alert::error('Error in deleting Size...');
            return redirect()->back();
        }
    }
}
