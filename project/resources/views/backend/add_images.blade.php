
@extends('backend.layout.main')

@section('main_container') 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-10">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         ADD IMAGES
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Add Images</h3>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Photo Name:</label>
                                            <input type="text" name="name" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Select Category</label>
                                            <select class="form-control"  name="cat_id" >
                                                <option>----select----</option>
                                                @if($data)
                                                @foreach($data as $d)
                                                <option value="{{$d->id}}">{{$d->category}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Photo</label>
                                            <input type="file" name="file[]" multiple/>
                                        </div>
                                        <div class="form-group">
                                            <label>Photo Description</label>
                                            <input type="text" name="des" class="form-control" />
                                        </div>

                                        
                                        <input type="submit" name="submit" value="submit" class="btn btn-danger">

                                    </form>
                                </div>
                     
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
  
    
   
</body>
</html>
@endsection