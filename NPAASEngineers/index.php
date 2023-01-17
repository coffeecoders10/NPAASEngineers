<?php

require($_SERVER['DOCUMENT_ROOT']."/NPAASEngineers/dbconnect.php");

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
  <!-- <script type="text/javascript">
    function readTextFile(file, callback) {
      var rawFile = new XMLHttpRequest();
      rawFile.overrideMimeType("application/json");
      rawFile.open("GET", file, true);
      rawFile.onreadystatechange = function() {
          if (rawFile.readyState === 4 && rawFile.status == "200") {
              callback(rawFile.responseText);
          }
      }
      rawFile.send(null);
    }
    readTextFile("data/info.json", function(text){
        var data = JSON.parse(text); //parse JSON
        console.log(data);
        console.log(data.name);
        document.getElementById("name").innerHTML = data.name;
        document.getElementById("header_name").innerHTML = data.name;
        document.getElementById("full_name").innerHTML = data.full_name;
    });
  </script> -->

  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span id="header_name"><?= $info['name'] ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li class="drop-down"><a href="#products">Products</a>
            <ul>
              <?php
              $products_query = "SELECT * FROM products";
              $result_products = mysqli_query($db, $products_query);
              while($row = mysqli_fetch_assoc($result_products)){
                ?>
              <li><a href="product.php?id=<?= $row['product_id'] ?>" target="_blank"><?= $row['product_name'] ?></a></li>
              <?php
              }
                ?>
              <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <!-- <li></li> -->
          <li><a href="#team">Team</a></li>

          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <img class="mb-5" src="assets/img/logo.png" style="height:25vh">
      <h1 id="name"><?= $info['name'] ?></h1>
      <h2 id="full_name"><?= $info['full_name'] ?></h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
""    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-12 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>About Us</h3>
              <p>
                <?= $info['about'] ?>
              </p>
              <h3>Dealerships</h3>
              <?php
              $dealer_query = "SELECT * FROM dealerships";
              $result_dealer = mysqli_query($db, $dealer_query);
              while($row = mysqli_fetch_assoc($result_dealer)){
                ?>
              <div class="row">
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                  <img class="mb-5" src="assets/img/<?= $row['dealer_image'] ?>" style="width:75%">
                </div>
                <div class="col-12 col-lg-8">
                  <h4 class="text-uppercase font-weight-bold"><?= $row['dealer_name'] ?></h4>
                  <p>
                    <?= $row['dealer_desc'] ?>
                  </p>
                  <div class="row d-flex justify-content-center">
                    <a class="cert-btn" target="_blank" href="<?= 'assets/img/'.$row['dealer_cert'] ?>">Certificate</a>
                  </div>
                </div>

              </div>
              <?php
              }
                ?>
              <!-- <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
          <p><?= $info['services_desc'] ?></p>
        </div>

        <div class="row d-flex justify-content-center align-items-center">

          <?php
          $services_query = "SELECT * FROM services";
          $result_services = mysqli_query($db, $services_query);
          while($row = mysqli_fetch_assoc($result_services)){
            // echo $row['service_name'];
            ?>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href=""><?= $row['service_name'] ?></a></h4>
                <p class="description"><?= $row['service_desc'] ?></p>
              </div>
            </div>

            <?php
          }
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters d-flex justify-content-center align-items-center">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up"><?= $info['client_no'] ?></span>
              <p><strong>Clients</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up"><?= $info['product_no'] ?></span>
              <p><strong>Products</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up"><?= $info['members_no'] ?></span>
              <p><strong>Members</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Inquires</h3>
          <p><?= $info['inquires'] ?></p>
          <a class="cta-btn" href="#contact">Contact Us</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="products" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Products</h2>
          <p><?= $info['product_desc'] ?></p>
        </div>

        <!-- <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-type-a">TypeA</li>
              <li data-filter=".filter-type-b">TypeB</li>
              <li data-filter=".filter-type-c">TypeC</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up">

          <?php
          $products_query = "SELECT * FROM products";
          $result_products = mysqli_query($db, $products_query);
          while($row = mysqli_fetch_assoc($result_products)){
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-type-<?=$row['product_filter']?>">
              <div class="portfolio-wrap">
                <img src="assets/img/<?=$row['product_image']?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="product.php?id=<?=$row['product_id']?>" title="More Details" class="text-uppercase view-prod"><i class="bx bx-link"></i> View Products</a>
                </div>
              </div>
              <div class="d-flex justify-content-center text-dark font-weight-bold text-uppercase">
                <?=$row['product_name']?>
              </div>
            </div>

            <?php
          }
              ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Team</h2>
          <p><?= $info['team_desc'] ?></p>
        </div>

        <div class="row d-flex justify-content-center align-items-center">

          <?php
          $team_query = "SELECT * FROM team";
          $result_team = mysqli_query($db, $team_query);
          while($row = mysqli_fetch_assoc($result_team)){
           ?>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/<?= $row['team_image'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?= $row['team_name'] ?></h4>
                <span><?= $row['team_designation'] ?></span>
                <div class="social">
                  <a href="<?= $row['team_phone'] ?>"><i class="icofont-phone"></i></a>
                  <a href="<?= $row['team_email'] ?>"><i class="icofont-email"></i></a>
                  <a href="<?= $row['team_linkedin'] ?>"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <?php
        }
            ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?= $info['address'] ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <a class="text-dark" href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <a class="text-dark" href="tel:<?= $info['phone'] ?>"><?= $info['phone'] ?></a>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <!-- <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div> -->

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
                <strong>Phone:</strong>
                <a class="text-dark" href="tel:<?= $info['phone'] ?>"><?= $info['phone'] ?></a>
                <br>
                <strong>Email:</strong>
                <a class="text-dark" href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a>
                <br>
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
