<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The ArtSpot | Offerings </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="dance.css">

  <!-- Favicons -->
  <link href="assets/img/p/fi.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">The AtrSpot</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
         
          <li><a href="contactus.html">Contact</a></li>
         
          <li><a href="mycart.php">My Cart</a></li>
          <li><a href="logout.php">Logout</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     
    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>WELCOME</h2>
      
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <h2 style="text-align: center; color:green;">DANCE</h2>
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/p/bharatanatyam.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <form action="manage.php" method="POST">
                <h3  style="color:green;">Bharatanatyam</h3>
                <p>Price : 499/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Bharatanatyam">
                      <input type="hidden" name="Price" value="499">
                    </span>
                  </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/p/fix.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                 
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Bollywood</h3>
                
                <p>Price : 499/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                     <input type="hidden" name="Item_name" value="Bollywood">
                     <input type="hidden" name="Price" value="499">
                    </span>
                  </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/p/kathak.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Kathak</h3>
                
                <p>Price : 499/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Kathak">
                      <input type="hidden" name="Price" value="499">
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div> 
          

          

        </div>

      </div>
    </section><!-- End Courses Section -->


        <section id="courses" class="courses">
          <h2 style="text-align: center; color: green;">INSTRUMENTS</h2>
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/p/1gui.webp" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Guitar</h3>

                
                <p>Price : 599/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Guitar">
                      <input type="hidden" name="Price" value="599">
                    </span>
                  </div>
                 </form>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/p/1key.webp" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                 
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Keyboard</h3>
                
                <p>Price : 599/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Keyboard">
                      <input type="hidden" name="Price" value="599">
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/p/1tab.webp" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Tabla</h3>
                
                <p>Price : 599/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Tabla">
                      <input type="hidden" name="Price" value="599">
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div> 
        
        </div>

      </div>
    </section><!-- End Courses Section -->

        <section id="courses" class="courses">
          <h2 style="text-align: center;color:green;">VOCALS</h2>
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/p/carna.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Carnatic</h3>

               
                <p>Price : 999/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Carnatic">
                      <input type="hidden" name="Price" value="999">
                    </span>
                  </div>
                 </form>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/p/man.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Hindustani</h3>
                
                <p>Price : 999/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Hindustani">
                      <input type="hidden" name="Price" value="999">
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div> 
          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/p/west.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                 
                </div>
                <form action="manage.php" method="POST">

                <h3  style="color:green;">Western Vocals</h3>
                
                <p>Price : 999/-</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span><button type="submit" name="add_to_cart">Add To Cart</button></span>
                    <span>
                      <input type="hidden" name="Item_name" value="Western Vocals">
                      <input type="hidden" name="Price" value="999">
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->
    </form>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>