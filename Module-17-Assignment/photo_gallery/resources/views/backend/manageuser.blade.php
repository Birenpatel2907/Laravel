@extends('backend.layout.main')

@section('main_container') 
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>MANAGE USER DETAILS</h2>
                           </div>
                        </div>
                     </div>
                     
                    
                        <div class="panel-body">
						<form action="{{url('/manageuser')}}" method="post">
								@csrf
								<input type="search" name="search" value="{{$value}}" placeholder="Search By Name">
								<input type="submit" name="submit" class="btn btn-primary">
							</form>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Profile</th>
                                            <th>Name</th>
											<th>Email</th>
											<th>gender</th>
											<th>Language</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									@foreach($data as $d)
                                        <tr class="odd gradeX">
                                            <td>{{$d->id}}</td>
											<td><img src="{{url('upload/customer/'.$d->file)}}" width="50px" height="50px"></td>
											<td>{{$d->name}}</td>
											<td>{{$d->email}}</td>
											<td>{{$d->gen}}</td>
											<td>{{$d->lag}}</td>
                                            <td>
												<a href="{{url('manageuser/'.$d->id)}}" class="btn btn-danger">Delete</a>
											</td>
                                        
                                            
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                   
                    
                   
                   

                  </div>
            <!-- footer Layout Here-->
               </div>
             
            </div>
         </div>
      </div>
	   
      <!-- jQuery -->
      <script src="{{url('backend/assets/js/jquery.min.js')}}"></script>
      <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
      <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{url('backend/assets/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{url('backend/assets/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{url('backend/assets/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{url('backend/assets/js/Chart.min.js')}}"></script>
      <script src="{{url('backend/assets/js/Chart.bundle.min.js')}}"></script>
      <script src="{{url('backend/assets/js/utils.js')}}"></script>
      <script src="{{url('backend/assets/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{url('backend/assets/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{url('backend/assets/js/chart_custom_style1.js')}}"></script>
      <script src="{{url('backend/assets/js/custom.js')}}"></script>
   </body>
</html> @endsection