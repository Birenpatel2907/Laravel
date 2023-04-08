<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\photo;
use Alert;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.addphoto');
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
		return redirect('/managephoto');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=photo::all();
        return view('backend.managephoto',['data'=>$data]);
    }

	 public function alldata()
    {        
	   $data=photo::all();	  // select * from
       return view('frontend.imagegallery',['data'=>$data]);
    }
 
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
