
@extends('backend.layout.main')

@section('main_container') 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Blog Page</h2>   
                        <h5>Welcome {{session('aname')}} , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-10">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Create New Post
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                 
                                    <form action="{{url('/update_blog/'.$edit_blog->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$edit_blog->title}}"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Content</label>
                                           <textarea style="resize:none; " name="content" class="form-control" rows="10" placeholder="Content">{{$edit_blog->content}}</textarea>
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