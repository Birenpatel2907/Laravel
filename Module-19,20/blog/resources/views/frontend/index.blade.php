@extends('frontend.layout.main')

@section('main_container') 

                </div>
        </div>
    </div>
    <!-- Navbar End -->


  

    @if($view_blog)


    <!-- Offer Start -->
    @foreach($view_blog as $b)
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-12 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <div class="position-relative" style="z-index: 1;">
                        
                        <h1 class="mb-4 font-weight-semi-bold">{{$b->title}}</h1>
                        <a href="" class="py-md-2 px-md-3">{{$b->content}}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endforeach
@endif
    <!-- Offer End -->      
@endsection


 <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('frontend/assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('frontend/assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('frontend/assets/js/main.js')}}"></script>
</body>

</html>