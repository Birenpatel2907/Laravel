<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use RealRashid\SweetAlert\Facades\Alert;
class blogController extends Controller
{
//-----------------------------------------Add Blog------------------------------------------------
     public function add_blog(Request $request)
     {
        
         $blog=new blog;
         $blog->title=$request->title;
         $blog->content=$request->content;
         if($blog){
            $blog->save();
            Alert::success('Congrats','Your blog item has been added...');
            return redirect('/add_blog');
         }
         else{
            Alert::error('Ops!','Error in adding blog contents...');
            return redirect('/add_blog');
         }
         
     }
     public function manage_blog()
     {
        $blog_data=blog::all();
        return view('backend.manage_blog',['blog_data'=>$blog_data]);
     }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_blog(string $id)
    {
        $edit_blog=blog::where('id','=',$id)->first();
        return view('backend.edit_blog',['edit_blog'=>$edit_blog]);
    }
    

    public function update_blog(Request $request, string $id)
    {
        $update_blog=blog::find($id);

        $update_blog->title=$request->title;
        $update_blog->content=$request->content;

        $update_blog->save();
        Alert::success('Congrats','Your blog is updated...');
        return redirect('/manage_blog');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_blog(string $id)
    {
        $update_blog=blog::find($id);
        $update_blog->delete();
        Alert::success('Congrats','Your blog is deleted...');
        return
         redirect('/manage_blog');
    }
    public function view_blog()
    {
       $view_blog=blog::all();
       return view('frontend.index',['view_blog'=>$view_blog]);
    }
    
}
