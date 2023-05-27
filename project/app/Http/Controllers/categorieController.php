<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class categorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function add_categories()
    {
       
        return view('backend.add_categories');
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
        $store_category=new categorie;

        $store_category->category=$request->category;

        $store_category->save();

        Alert::Success('Category has been added...');
        return redirect('/add_categories');
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
        //
    }
}
