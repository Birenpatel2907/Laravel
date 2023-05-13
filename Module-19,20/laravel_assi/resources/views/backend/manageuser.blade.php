

@extends('backend.layout.main')

  @section('main_container')

  <body id="reportsPage">
    
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
				@if($data)
                <tbody>
					@foreach($data as $d)
                  <tr>				
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->mobile}}</td>
                    <td><img src="{{url('upload/image/'.$d->file)}}" width="50px" alt=""></td>
                    <td>
                      <a href="{{url('manageuser/'.$d->id)}}" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
				  @endforeach  
                </tbody>
				@endif
              </table>
			  {{$data->links()}}
            </div>
            <!-- table container -->
         <!--   <a
              href="add-product.html"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                 
                 
                </tbody>
              </table>
            </div>
 
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>-->
          </div>
        </div> 
      </div>
    </div>
 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>


@endsection