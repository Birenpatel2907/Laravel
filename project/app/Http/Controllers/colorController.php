<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\color;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class colorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_colors()
    {
        return view('backend.add_colors');
    }
    public function store(Request $request)
    {
        $store_colors=new color;

        $store_colors->color=$request->color;

        $store_colors->save();

        Alert::Success('Color has been added...');
        return redirect('/add_colors');
    }

    /**
     * Display the specified resource.
     */
    public function manage_colors()
    {
        $manage_colors=color::all();
        return view('backend.manage_colors',["manage_colors"=>$manage_colors]);
    }
    public function edit_color(string $id)
    {
        $edit_color=color::where('id','=',$id)->first();
        return view('backend.edit_color',["edit_color"=>$edit_color]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_color(Request $request, string $id)
    {
        $update_color=color::find($id);
        $update_color->color=$request->color;
        
        $update_color->save();
        if($update_color->save())
        {
            Alert::Success('Color has been updated...');
            return redirect('/manage_colors');
        }
        else{
            Alert::error('Error in updating Color...');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_color(string $id)
    {
        $delete_color=color::find($id);
        if($delete_color){
            $delete_color->delete();
            Alert::Success('Color has been deleted...');
            return redirect('/manage_colors');
        }
        else{
            Alert::error('Error in deleting Color...');
            return redirect()->back();
        }
    }
}
