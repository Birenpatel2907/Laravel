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
                                    <h2 style="color:black; font-size:25px; font-weight: bold;">Edit Type</h2>
                                 </div>
                              </div>
                              @if($edit_data)
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content p-5">
                                       <form action="{{url('/update_type/'.$edit_data->id)}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Type</label>
                                                <input type="text" name="type" class="form-control" value="{{$edit_data->type}}"/>
                                             </div>
                                             <div class="form-group">
                                                <label style="color:black; font-size:16px; font-weight: bold;">Category</label>
                                                <select class="form-control" name="cate_id">
                                                <option selected disabled value="">Choose...</option>
                                                    @if($category)
                                                        @foreach($category as $c)
                                                        @if($c->id==$edit_data->cate_id)
                                                            <option value="{{$c->id}}" selected>{{$c->category}}</option>
                                                         @else
                                                         <option value="{{$c->id}}">{{$c->category}}</option>
                                                         @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                             </div>
                                                         
                                          <div class="col-12">
                                             <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                                          </div>
                                       </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endif
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
    