<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use App\Models\type;
use App\Models\product;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class typeController extends Controller
{
    public function add_types()
    {
        $data=categorie::all();
        return view('backend.add_types',["data"=>$data]);
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function manage_types()
    {
        $manage_types=categorie::join('types','types.cate_id','=','categories.id')->get();
      // $manage_types=type::join('categories','categories.id','=','types.cate_id')->get();
        return view('backend.manage_types',["manage_types"=>$manage_types]);
    }

    public function men()
    {
        $type_data=type::join('categories','types.cate_id','=','categories.id')->where('categories.id','=','1')
        ->get(['types.type','types.id','categories.category']);
        return view('frontend.men',["type_data"=>$type_data]);
    }
    public function women()
    {
        $type_data=type::join('categories','types.cate_id','=','categories.id')->where('categories.id','=','2')
        ->get(['types.type','types.id','categories.category']);
        return view('frontend.women',["type_data"=>$type_data]);
    }
    public function store(Request $request)
    {
    
        $store_types=new type;

        $store_types->type=$request->type;
        $store_types->cate_id=$request->cate_id;

        $store_types->save();

        Alert::Success('Type has been added...');
        return redirect('/add_types');
    }


    /**
     * Display the specified resource.
     */
    public function view_type_wise_women(string $id)
    {

      /*  $women_typewise_product=product::join('types','products.type_id','=','types.id')
        ->join('colors','products.clr_id','=','colors.id')
        ->join('sizes','products.size_id','=','sizes.id')
        ->join('brands','products.brand_id','=','brands.id')
        ->where('types.id','=',$id)
        ->get(['products.*','types.type','colors.color','sizes.size','brands.brand']);  */
        $women_typewise_product=product::where('type_id','=',$id)->get();
        return view('frontend.view_type_wise_women',['women_typewise_product'=>$women_typewise_product]);
    }

    public function view_type_wise_men(string $id)
    {
        $men_typewise_product=product::where('type_id','=',$id)->get();
   
        return view('frontend.view_type_wise_men',['men_typewise_product'=>$men_typewise_product]);
    }
    public function edit_type(string $id)
    {
        $category=categorie::all();
        $edit_data=type::where('id','=',$id)->first();
        return view('backend.edit_type',['category'=>$category,"edit_data"=>$edit_data]);
    }
    public function update_type(Request $request, string $id)
    {
        $update_type=type::find($id);
        $update_type->type=$request->type;
        $update_type->cate_id=$request->cate_id;

        $update_type->save();
        if( $update_type->save())
        {
            Alert::Success('Type has been updated...');
            return redirect('/manage_types');
        }
        else{
            Alert::error('Error in updating type...');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_type(string $id)
    {
        $delete_type=type::find($id);
        if($delete_type){
            $delete_type->delete();
            Alert::Success('Type has been deleted...');
            return redirect('/manage_types');
        }
        else{
            Alert::error('Error in deleting type...');
            return redirect()->back();
        }
    }
}
