@extends('frontend.layout.main')

@section('main_container') 



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
