<?php
session_start();
include("connect.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Continental Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/continental.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body>

  <!--logout session-->
  <?php 
     if(isset($_SESSION['email'])){
      $email=$_SESSION['email'];
      $query=mysqli_query($conn, "SELECT dba.* FROM `dba` WHERE dba.email='$email'");
      while($row=mysqli_fetch_array($query)){
          echo $row['firstName'].' '.$row['lastName'];
      }
     }
     ?>
     :)

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/continental.png" alt="">
        <h1>
        <span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
         <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar --> 

      <a class="btn-book-a-table" href="http://localhost/rtbs/index.php">Book a Table</a>
      <a class="btn-book-a-table" href="logout.php">logout</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Indulge your senses with our delectable cuisine and captivating ambience.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="http://localhost/rtbs/index.php" class="btn-book-a-table">Book a Table</a>
            <a href="https://drive.google.com/file/d/1NUaPX1cTCObMGn7C1GAHLOwZLXRm9zTR/view?usp=drivesdk" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/ST-2.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">


        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+91 965874123</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                
                 Embark on a journey through time with Continnental Retreat, a story rooted in passion and perseverance.
                  Our humble beginnings, over 25 years ago, laid the foundation for what is now a beacon of hospitality in our locality.
                  
              <ul>
                <li><i class="bi bi-check2-all"></i> Fresh, flavorful, and well-prepared dishes that meet expectations can draw our customers back repeatedly</li>
                <li><i class="bi bi-check2-all"></i>Our team receives ongoing training in the latest health and safety protocols.</li>
                <li><i class="bi bi-check2-all"></i>Efficient, friendly, and attentive service significantly enhances your dining experience </li>
              </ul>
              <p>
                Indulge in exquisite dishes crafted from fresh, locally sourced ingredients, all while enjoying impeccable hygiene standards.
                 Our beautifully designed party sections and luxurious accommodations provide the perfect backdrop for celebrations and relaxation. Welcome to a world where every stay is an extraordinary experience.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/kmhafhG_bJ8?si=zwTDUODP5WsrM7SR" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Continental?</h3>
              <p>
                 For an unmatched experience of luxury, culinary excellence, and hospitality.
                 With over 25 years of legacy, our hotel promises exceptional service, meticulously crafted cuisine,
                  and unwavering hygiene standards.
                 
              </p>
              <div class="text-center">
                <a href="#contact" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Food Quality</h4>
                  <p>Savor exceptional cuisine crafted from fresh, locally sourced ingredients,
                     ensuring a culinary experience of unparalleled quality and flavor. </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Hygiene and Cleanliness</h4>
                  <p>
                    Impeccable hygiene and cleanliness standards are our priority, 
                    ensuring a safe and pristine environment for your peace of mind and comfort.

                  </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Service Quality</h4>
                  <p>Experience top-notch service tailored to your needs,
                     where our dedicated team goes above and beyond to ensure your comfort and satisfaction.
                  </p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
              <p>Daily Customers</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="156" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Dishes</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Continental
           Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Breakfast</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\starter\ST-1.jpg" class="glightbox">
                  <img src= "assets\img\menu\starter\ST-1.jpg"class="menu-img img-fluid" alt=""></a>
                <h4>Gobi Manchuri</h4>
                <p class="ingredients">
                  classic,spicy,65
                </p>
                
                  <p class="price">
                   
                  ₹180
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\starter\ST-2.png" class="glightbox">
                  <img src="assets\img\menu\starter\ST-2.png "class="menu-img img-fluid" alt=""></a>
                
                <h4>Rolls</h4>
                <p class="ingredients">
                  Spring rolls,Egg rolls,Paneer rolls,veg rolls
                </p>
                <p class="price">
                 
                  ₹200
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\starter\ST-3.png"class="glightbox">
                  <img src="assets\img\menu\starter\ST-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Panner</h4>
                <p class="ingredients">
                  Masala,Spicy,Crispy
                </p>
                <p class="price">
                 
                  ₹200
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\starter\ST-4.png" class="glightbox">
                  <img src="assets\img\menu\starter\ST-4.png" class="menu-img img-fluid" alt="">
                </a>
                <h4>Momos</h4>
                <p class="ingredients">
                  Fried,Boiled,chicken
                </p>
                <p class="price">
                 
                  ₹200
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\starter\ST-5.png" class="glightbox">
                  <img src="assets\img\menu\starter\ST-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Babycorn Manchuri</h4>
                <p class="ingredients">
                  classic,spicy,sweet
                </p>
                <p class="price">
                 
                  ₹180
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\starter\ST-6.jpg" class="glightbox">
                  <img src="assets\img\menu\starter\ST-6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Noodless</h4>
                <p class="ingredients">
                  Hakka,Schezwan,Chow Mein,Spicy
                </p>
                <p class="price">
                 
                  ₹160
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\breakfast\ghe.jpg" class="glightbox">
      
                <img src="assets\img\menu\breakfast\ghe.jpg"  class="menu-img img-fluid" alt=""></a>
                <h4>Ghee paddu</h4>
                <p class="ingredients">
                  special,ghee
                </p>
                <p class="price">
                  ₹30
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\breakfast\BF-2.png"  class="glightbox">
                <img src="assets\img\menu\breakfast\BF-2.png"  class="menu-img img-fluid" alt=""></a>
                <h4>Dosa</h4>
                <p class="ingredients">
                  normal,set,masala
                </p>
                <p class="price">
                  ₹ 60 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\breakfast\BF-3.png" class="glightbox">
                  <img src="assets\img\menu\breakfast\BF-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Paddu</h4>
                <p class="ingredients">
                  Ghee,special
                </p>
                <p class="price">
                  ₹50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\breakfast\BF-4.png" class="glightbox">
                 
                  <img src="assets\img\menu\breakfast\BF-4.png"  class="menu-img img-fluid" alt=""></a>
                <h4>Idli Wada                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </h4>
                <p class="ingredients">
                  extra wada,idli,chutney
                </p>
                <p class="price">
                  ₹50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/breakfast/BF-5.png"  class="glightbox">
                  <img src="assets/img/menu/breakfast/BF-5.png"  class="menu-img img-fluid" alt=""></a>
                <h4>Idli</h4>
                <p class="ingredients">
                  sambar,extra chutney
                </p>
                <p class="price">
                  ₹40
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\breakfast\BF-6.png"  class="glightbox">
                  <img src="assets\img\menu\breakfast\BF-6.png"  class="menu-img img-fluid" alt=""></a>
                <h4>Upma</h4>
                <p class="ingredients">
                  sera,chutney,sambaar
                </p>
                <p class="price">
                  ₹ 40
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lunch/TH-1.png" class="glightbox">
                  <img src="assets/img/menu/lunch/TH-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>south indian special thali</h4>
                <p class="ingredients">
                 Rice,gravy,paneer,jalebi
                </p>
                <p class="price">
                  ₹160
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lunch/TH-2.png" class="glightbox">
                  <img src="assets/img/menu/lunch/TH-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>veg spicy thali</h4>
                <p class="ingredients">
                Rice,chapathi,gravy,sweet
                </p>
                <p class="price">
                  ₹140
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lunch/TH-3.png" class="glightbox">
                  <img src="assets/img/menu/lunch/TH-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>indian cuisine thali</h4>
                <p class="ingredients">
                  Rice,nuts gray,curry
                </p>
                <p class="price">
                  ₹130
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lunch/TH-4.png" class="glightbox">
                  <img src="assets/img/menu/lunch/TH-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>roti flatbreads thali</h4>
                <p class="ingredients">
                 roti,curry,achar
                </p>
                <p class="price">
                  ₹160
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lunch/TH-5.png" class="glightbox">
                  <img src="assets/img/menu/lunch/TH-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>dal special thali</h4>
                <p class="ingredients">
                dal tadka,curry,lemon rice
                </p>
                <p class="price">
                  ₹180
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lunch/TH-6.png" class="glightbox">
                  <img src="assets/img/menu/lunch/TH-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>north indian special thali</h4>
                <p class="ingredients">
                 paratha,rice,gravy,sweet 
                </p>
                <p class="price">
                  ₹200
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dinner/dinner-1.jpg" class="glightbox">
                  <img src="assets/img/menu/dinner/dinner-1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>paneer butter masala</h4>
                <p class="ingredients">
                  spicy,butter
                </p>
                <p class="price">
                  ₹180
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dinner/dinner-2.png" class="glightbox">
                  <img src="assets/img/menu/dinner/dinner-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>veg kofta</h4>
                <p class="ingredients">
                 spicy & sweet 
                </p>
                <p class="price">
                  ₹190
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dinner/dinner-3.png" class="glightbox">
                  <img src="assets/img/menu/dinner/dinner-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>non-veg thaali</h4>
                <p class="ingredients">
                  spicy & sweet comb
                </p>
                <p class="price">
                  ₹350
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dinner/dinner-4.jpg" class="glightbox">
                  <img src="assets/img/menu/dinner/dinner-4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>veg spicy kofta</h4>
                <p class="ingredients">
                  extra spicy 
                </p>
                <p class="price">
                  ₹200
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dinner/dinner-5.png" class="glightbox">
                  <img src="assets/img/menu/dinner/dinner-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>kaaju kurma</h4>
                <p class="ingredients">
                yellow flavered  
                </p>
                <p class="price">
                  ₹190
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dinner/dinner-6.png" class="glightbox">
                  <img src="assets/img/menu/dinner/dinner-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>paalak paneer</h4>
                <p class="ingredients">
                  chilli spicy 
                </p>
                <p class="price">
                  ₹210
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       overall best.The food is very tasty and delicious and the gravies if all curryies are just wow .
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>RamKumar</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        I visited many Restaurant till now but this Restaurant ambiance vibe and service is just marvelous.I rate 5-stares for this and overall experience is good and you do visit with your family and friends.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ganesh Kodmur</h3>
                      <h4>Manager</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        I love there cusine and ambience.Food and starters are really delicious with hygeine.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Prakash Chinchpur</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        This place is reaaly awesome.My friend gave us party here and there Restaurant party and birthday session is amazing the decoration and the lightings and the photo gallery overall amazing.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Gunderao savalagi</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">₹1999</div>
              <p class="description">
                Let your imagination lead the way for your custom party. Whether it's a unique theme, specific culinary preferences, or special entertainment, 
                our team is committed to bringing your vision to life with impeccable attention to detail.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">₹2999</div>
              <p class="description">
                Transform your gathering into an elegant affair in our exclusive spaces, offering intimate ambiance, personalized menus,
                and dedicated service, ensuring every moment is crafted to your satisfaction.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">₹999</div>
              <p class="description">
                Celebrate life's milestones with us, where each birthday becomes a memorable bash. Enjoy themed decorations,
                 custom cakes, and entertainment options that cater to all ages, making every guest feel special.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span>Master Chef</span>
                <p>
                  "Our philosophy is to create dishes that speak to the soul, combining traditional techniques with modern flair,
                   ensuring each bite is a journey of flavor, passion, and excellence."</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span>Patissier</span>
                <p>"Crafting desserts is an art of balance and beauty. I strive to blend classic techniques with innovative twists,
                   aiming to delight and surprise with every exquisite, sweet creation."</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span>Cook</span>
                <p>
                  "Every dish is a story of flavors and freshness. I take pride in selecting the best ingredients and combining them with care,
                   aiming to offer a memorable taste experience to every guest."</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
   <!-- <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Table</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="save.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center" name="submit"><button type="submit">Book a Table</button></div>
            </form>-->
          </div><!-- End Reservation Form -->
        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.524868559393!2d76.82178050000002!3d17.338459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc8b96655c37497%3A0x3d181e47a37dd663!2sRitesh%20Hotel%20(%20Aloo%20Bhaat%20Centre%20)!5e0!3m2!1sen!2sin!4v1714304123868!5m2!1sen!2sin" width="1120" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Ganga nagar kalaburgi-585103<br>
                Karnataka India<br> </p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>Continentalrestro@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+91 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 12PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="form.php" action="https://api.web3forms.com/submit" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
          <input type="hidden" name="access_key" value="4271eff5-c8e9-4a61-8016-9f771ff50918">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" value="" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" value="" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" value="" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" value="" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
          
        </form><!--End Contact Form -->
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Ganga nagar kalaburgi-585103<br>
              Karnataka India<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +91 5589 55488 55<br>
              <strong>Email:</strong> Continentalrestro@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 9AM</strong> - 12PM<br>
              Sunday:12AM-12PM
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://www.instagram.com/adagi_mani?igsh=cjFuZXpueWhhc2R5" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#hero" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="mailto:continentalrestro@gmail.com" class="google"><i class="bi bi-google"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Continental
        
        </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
     
        Designed by <a href="https://bootstrapmade.com/">G3team</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>