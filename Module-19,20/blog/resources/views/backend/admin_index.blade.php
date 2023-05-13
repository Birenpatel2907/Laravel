@extends('backend.layout.main')

@section('main_container') 

@include('sweetalert::alert')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome {{session('aname')}} Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
         
		</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   
    
   
</body>
</html>
@endsection