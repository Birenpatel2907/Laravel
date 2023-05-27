@extends('backend.layout.main')

@section('main_container') 
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     
                     <div class="row column_title">
                           <div class="col-md-12">
                              <br>
                           </div>
                     </div>                   
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2 style="color:black; font-size:25px; font-weight: bold;">Add Product</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content p-5">
                                       <form action="{{url('/add_products')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Product Name</label>
                                                <input type="text" name="p_name" class="form-control"/>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Type</label>
                                                <select class="form-control" name="type_id">
                                                <option selected disabled value="">Choose...</option>
                                                    @if($type_data)
                                                        @foreach($type_data as $type)
                                                            <option value="{{$type->id}}">{{$type->category}} {{$type->type}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Brand</label>
                                                <select class="form-control" name="brand_id">
                                                <option selected disabled value="">Choose...</option>
                                                    @if($brand_data)
                                                        @foreach($brand_data as $brand)
                                                            <option value="{{$brand->id}}">{{$brand->brand}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                             </div>

                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Size</label>
                                                <select class="form-control" name="size_id">
                                                <option selected disabled value="">Choose...</option>
                                                    @if($size_data)
                                                        @foreach($size_data as $size)
                                                            <option value="{{$size->id}}">{{$size->size}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                             </div>

                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Color</label>
                                                <select class="form-control" name="clr_id">
                                                <option selected disabled value="">Choose...</option>
                                                    @if($color_data)
                                                        @foreach($color_data as $color)
                                                            <option value="{{$color->id}}">{{$color->color}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                             </div>

                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Price</label>
                                                <input type="number" name="price" class="form-control"/>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Quantity</label>
                                                <input type="number" name="qty" class="form-control"/>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Discount</label>
                                                <input type="number" name="discount" class="form-control"/>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Discount Amount</label>
                                                <input type="number" name="disc_amt" class="form-control"/>
                                             </div>       
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Product Image</label>
                                                <input type="file" name="img" class="form-control"/>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Product Description</label>
                                                <textarea  name="des" class="form-control" rows="5"></textarea>
                                             </div>
                                            
                                          <div class="col-12">
                                             <input type="submit" class="btn btn-primary" name="submit" value="Add">
                                          </div>
                                       </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                       
                 


                  </div>
               <!-- footer Layout Here-->
               </div>
               <!-- end dashboard inner -->
               </div>
         </div>
      </div>	   
    @endsection