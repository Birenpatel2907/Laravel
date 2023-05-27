@extends('backend.layout.main')

@section('main_container') 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<style>

table{
    width:100%;
}

#example_filter{
    float:right;
}
#example_paginate{
    float:right;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;
   
}</style>
             
             <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title pt-5">
                     <center><h1>Manage Products</h1></center>
                        <div class="col-md-12 pt-5">
                           <div class="page_title">
                           <div  class="container-p-2">
                          
               @if($manage_products)
                        <div class="row">
                           <table id="example" class="table  table-bordered table-hover" style="width:100%">
                              <thead>
                                    <tr>
                                        
                                       <th>ID</th>
                                       <th>Product Name</th>
                                       <th>Type</th>
                                       <th>Brand</th>
                                       <th>Size</th>
                                       <th>Color</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Discount</th>
                                       <th>File</th>
                                       <th>Description</th>
                                       <th>Edit</th>
                                       <th>Delete</th>
                                    </tr>
                              </thead>
                              <tbody>
                                 @foreach($manage_products as $product)
                               
                                    <tr>
                                       <td>{{$product->id}}</td>
                                       <td>{{$product->p_name}}</td>
                                       @if($type_data)
                                            @foreach($type_data as $type)
                                                @if($type->id==$product->type_id)
                                                    <td>{{$product->type}}</td>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if($type_data)
                                            @foreach($brand_data as $brand)
                                                @if($brand->id==$product->brand_id)
                                                    <td>{{$product->brand}}</td>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if($color_data)
                                            @foreach($color_data as $color)
                                                @if($color->id==$product->clr_id)
                                                    <td>{{$product->color}}</td>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if($size_data)
                                            @foreach($size_data as $size)
                                                @if($size->id==$product->size_id)
                                                    <td>{{$product->size}}</td>
                                                @endif
                                            @endforeach
                                        @endif
                                       <td>{{$product->price}}</td>
                                       <td>{{$product->qty}}</td>
                                       <td>{{$product->discount}}</td>
                                       <td>{{$product->img}}</td>
                                       <td>{{$product->des}}</td>                                                                  
                                       <td><a href="{{url('/edit_product/'.$product->id)}}"><img style="width:20px; height:20px;" src="{{url('backend/assets/images/clipart1212466.png')}}"></a></td>
                                       <td><a href="{{url('/delete_product/'.$product->id)}}"><img style="width:20px; height:20px;" src="{{url('backend/assets/images/delete-512.png')}}"></a></td>
                                    </tr>
                             
                                 @endforeach
                              </tbody>
                              <tfoot>
                                    <tr>
                                    <th>ID</th>
                                    <th>ID</th>
                                       <th>Product Name</th>
                                       <th>Type</th>
                                       <th>Brand</th>
                                       <th>Size</th>
                                       <th>Color</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Discount</th>
                                       <th>File</th>
                                       <th>Description</th> 
                                    </tr>
                              </tfoot>
                           </table>
                        </div>
                     @endif
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
	   
      <script>
$(document).ready(function() {
    $('#example').DataTable( 
         {     
      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 10
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
         </script>
 @endsection