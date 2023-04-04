@extends('frontend.layout.main')

@section('main_container') 



<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         <h3>Introducing Scenic</h3>
                         <h1>This template is designed for you. Sed ornare, tortor nec placerat lacinia, leo quam rutrum leo, eget posuere ipsum sem eu justo. Integer nunc libero.</h1>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- PROJECT -->
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="{{url('frontend/images/project-image1.jpg')}}" class="image-popup">
                              <img src="{{url('frontend/images/project-image1.jpg')}}" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Beautiful Women</h1>
                                        <h3>Click to pop up!</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="{{url('frontend/images/project-image2.jpg')}}" class="image-popup">
                              <img src="{{url('frontend/images/project-image2.jpg')}}" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Nulla efficitur quam</h1>
                                        <h3>Sed ligula accumsan</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="{{url('frontend/images/project-image3.jpg')}}" class="image-popup">
                              <img src="{{url('frontend/images/project-image3.jpg')}}" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Large Sea Wave</h1>
                                        <h3>Nam feugiat dui in nisi</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="{{url('frontend/images/project-image4.jpg')}}" class="image-popup">
                              <img src="{{url('frontend/images/project-image4.jpg')}}" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Lorem ipsum dolor</h1>
                                        <h3>Mollis aliquam faucibus urna</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>               

          </div>
     </div>
</section>



@endsection
