$men_typewise=product::join('types','products.type_id','=','types.id')
->join('colors','products.clr_id','=','colors.id')
 ->join('categories','products.cate_id','=','categories.id')
  ->join('sizes','products.size_id','=','sizes.id')
   ->join('brands','products.brand_id','=','brands.id')
->get(['products.*','types.type','colors.color','categories.category','sizes.size','brands.brand']);