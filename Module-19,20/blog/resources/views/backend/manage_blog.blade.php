@extends('backend.layout.main')

@section('main_container') 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    @if($blog_data)


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Users
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{url('/manage_blog')}}">
                                @csrf
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    @foreach($blog_data as $blog)
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>{{$blog->id}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->content}}</td>
                                            <td><a href="{{url('edit_blog/'.$blog->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td><a href="{{url('delete_blog/'.$blog->id)}}" class="btn btn-danger">Delete</a></td>
                                        </tr>
                     
                                    </tbody>
                                    @endforeach
                                    @endif
                                </table>
                            </div>
                            
                        </div>
                            </form>
                    </div>
                   
                    <!--End Advanced Tables -->
                </div>
            </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
 
   
</body>
</html>
@endsection