@extends('employee.layout.main')

@section('main_container') 
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>ADD PHOTOS</h2>
                           </div>
                        </div>
                     </div>
                     
                    <div class="card-body">
                      <form method="post" action="{{url('/addphotos')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Photo Name</label>
                          <input type="text" class="form-control" name="photo_name" id="photo_name" placeholder="Photo Name" />
                        </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Add Photos</label>
                            <input type="file" class="form-control" id="file" name="file">
                                          
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Add Multiple Photos</label>
                            <input type="file" class="form-control" id="multi_file" name="multi_file[]" multiple/>
                                           
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </form>
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