@extends('employee.layout.main')

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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											  <th>Id</th>
											  <th>Photo Name</th>
											  <th>Photo</th>
											  <th>Multiple Photos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									@foreach($data as $d)
                                        <tr class="odd gradeX">
                                            <td>{{$d->id}}</td>
											<td>{{$d->photo_name}}</td>
											<td><img src="{{url('upload/photo/'.$d->file)}}" width="50px" alt=""></td>
											<td>
												<?php
												$multi_file=$d->multi_file;
												$multi_filearr=explode(',',$multi_file);
												?>
												@foreach($multi_filearr as $multi_file)
													<img src="{{url('upload/multi_photo/'.$multi_file)}}" width="50px" alt="">  
												@endforeach
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