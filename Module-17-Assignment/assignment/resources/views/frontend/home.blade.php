@extends('frontend.layout.main')

@section('main_container') 

<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1>Your Website has a video background!</h1>
                         <p>Feel free to download and use HTML templates from Tooplate</p>
                         <ul class="section-btn">
                              <a href="#about" class="smoothScroll"><span data-hover="Discover More">Discover More</span></a>
                         </ul>
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <video controls autoplay loop muted>
          <source src="{{url('frontend/videos/video.mp4')}}" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>


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


<!-- TEAM -->
<section id="team" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                         <h1>Meet Our People</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div id="owl-team" class="owl-carousel">
                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="{{url('frontend/images/team-image1.jpg')}}" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Catherine Jann</p>
                         <h3>Head Designer</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="{{url('frontend/images/team-image2.jpg')}}" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                        <li><a href="#" class="fa fa-github"></a></li>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Luke Wara</p>
                         <h3>Speciality Focus</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="{{url('frontend/images/team-image3.jpg')}}" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                        <li><a href="#" class="fa fa-dribbble"></a></li>
                                        <li><a href="#" class="fa fa-behance"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Mono Mana</p>
                         <h3>Art director</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="{{url('frontend/images/team-image4.jpg')}}" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Phway Phyu</p>
                         <h3>Designer in Chief</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="{{url('frontend/images/team-image1.jpg')}}" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Cherry Lynn</p>
                         <h3>Marketing Manager</h3>
                    </div>
               </div>

          </div>
     </div>
</section>



@endsection
