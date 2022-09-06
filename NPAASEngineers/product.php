<?php

require($_SERVER['DOCUMENT_ROOT']."/NPAASEngineers/dbconnect.php");

$name = $_GET["name"];
$prod_query = "SELECT * FROM products WHERE product_name='".$name."'";
$result_prod = mysqli_query($db, $prod_query);
$prod = mysqli_fetch_assoc($result_prod);

$info_query = "SELECT * FROM info";
$result_info = mysqli_query($db, $info_query);
$info = mysqli_fetch_assoc($result_info);

 ?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $info['name'] ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Squadfree - v2.0.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->


  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span><?= $info['name'] ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Main</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <img class="mb-5" src="assets/img/<?= $prod['product_image'] ?>" style="height:40vh">
      <h1><?= $prod['product_name'] ?></h1>
      <!-- <h2></h2> -->
      <a href="#products" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="products" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Products Available</h2>
        </div>

        <div class="row d-flex justify-content-center">
        <?php
          $prod_array = explode("|",$prod['product_list']);
          for ($i = 0; $i < count($prod_array); $i++) {
            ?>

            <div class="col-md-6 col-lg-3 d-flex align-items-center mb-3">
              <div class="icon-box d-flex justify-content-start align-items-center" data-aos="fade-up" style="width:100%;padding-bottom:10px">
                <div class="icon pr-3"><i class='bx bxs-box'></i></div>
                <h4 class="title"><a href=""><?= $prod_array[$i] ?></a></h4>
                <p class="description"></p>
              </div>
            </div>

          <?php
          }
         ?>




          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-center mb-3">
            <div class="icon-box d-flex justify-content-start align-items-center" data-aos="fade-up" style="width:100%;padding-bottom:10px">
              <div class="icon pr-3"><i class='bx bxs-box'></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-center mb-3">
            <div class="icon-box d-flex justify-content-start align-items-center" data-aos="fade-up" style="width:100%;padding-bottom:10px">
              <div class="icon pr-3"><i class='bx bxs-box'></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description"></p>
            </div>
          </div> -->

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-12 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>About <?= $prod['product_name'] ?></h3>
              <p>
                <?= $prod['product_description'] ?>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
          <p> For more Queries about <b><?= $prod['product_name'] ?></b></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <a class="text-dark" href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <a class="text-dark" href="tel:<?= $info['phone'] ?>"><?= $info['phone'] ?></a>
            </div>
          </div>

        </div>

          <div class="col-lg-12 d-none resurrect">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3><?= $info['name'] ?></h3>
              <p class="pb-3"><em><?= $info['full_name'] ?></em></p>
              <p>
                <?= $info['address'] ?><br>
                <strong>Phone:</strong> <?= $info['phone'] ?><br>
                <strong>Email:</strong> <?= $info['email'] ?><br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
            <h4>Our Services</h4>
            <ul>
              <?php
              $services_query = "SELECT * FROM services";
              $result_services = mysqli_query($db, $services_query);
              while($row = mysqli_fetch_assoc($result_services)){
                // echo $row['service_name'];
                ?>
              <li><i class="bx bx-chevron-right"></i><?= $row['service_name']?></li>
              <?php
            }
                ?>
            </ul>
          </div>

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
