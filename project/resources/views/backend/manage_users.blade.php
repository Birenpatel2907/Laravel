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
                     <center><h1>Manage Users</h1></center>
                        <div class="col-md-12 pt-5">
                           <div class="page_title">
                           <div  class="container-p-2">
                          
               @if($users)
                        <div class="row">
                           <table id="example" class="table  table-bordered table-hover" style="width:100%">
                              <thead>
                                    <tr>
                                        
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Username</th>
                                       <th>Gender</th>
                                       <th>Languages</th>
                                       <th>Mobile</th>
                                       <th>Country</th>
                                       <th>Status</th>                                       
                                    </tr>
                              </thead>
                              <tbody>
                                 @foreach($users as $u)
                               
                                    <tr>
                                       <td>{{$u->id}}</td>
                                       <td>{{$u->name}}</td>
                                       <td>{{$u->unm}}</td>
                                       <td>{{$u->gen}}</td>
                                       <td>{{$u->lang}}</td>
                                       <td>{{$u->mob}}</td>
                                       <td>{{$u->country}}</td>                             
                                       <td><a href="{{url('/status/'.$u->id)}}" class="btn btn-primary">{{$u->status}}</a></td>
                                    </tr>
                             
                                 @endforeach
                              </tbody>
                              <tfoot>
                                    <tr>
                                    <th>ID</th>
                                       <th>Name</th>
                                       <th>Username</th>
                                       <th>Gender</th>
                                       <th>Languages</th>
                                       <th>Mobile</th>
                                       <th>Country</th>
                                       <th>Status</th> 
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