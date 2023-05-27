
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-dashboard: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Rent A Bike</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="dashboard" class="nav-item nav-link active">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="service" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bikes</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="bike" class="dropdown-item">Bike Listing</a>
                                <a href="detail" class="dropdown-item">Bike Detail</a>
                                <a href="booking" class="dropdown-item">Bike Booking</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team" class="dropdown-item">The Team</a>
                                <a href="testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>

                        <?php 
              if(isset($_SESSION['uid'])){
                ?>
                <a href="add_adv" class="nav-item nav-link">Add Advertisement</a>
                <a href="profile" class="nav-item nav-link"><?php echo "Hi..".$_SESSION['name']?></a>
                <a href="logout" class="nav-item nav-link">Logout</a>
                <a href="feedback" class="nav-item nav-link">Feedback</a>
             <?php
              }
              else {
              ?>
               <li class="nav-item">
               <a href="login" class="nav-item nav-link">Login</a>
              </li>
              <?php
              }
                   ?>     
                        
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

