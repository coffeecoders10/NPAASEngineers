<!DOCTYPE html>
<?php

require($_SERVER['DOCUMENT_ROOT']."/NPAASEngineers/dbconnect.php");

$info_query = "SELECT * FROM info";
$result_info = mysqli_query($db, $info_query);
$info = mysqli_fetch_assoc($result_info);
if(isset($_POST["login"])){
  $name = $_POST["name"];
  $password = $_POST["password"];
  if($info["user_name"] == $name && md5($password) == $info["password"]){
    $_SESSION["Login"] = 1;
    header("Location: index.php");
  }
  else{
    $_SESSION["Login"] = 0;
    header("Location: login.php");
  }
}
 ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $info['name'] ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.0.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="height:100vh">

<main id="main" style="height:100vh"> 
  <section class="contact section-bg d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Admin Login</h2>
        <p></p>
      </div>

        <div class="col-lg-12">
          <form name="info_details" action="login.php" method="post">
            <div class="row">
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">User Name</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Password</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-5">
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3 text-center">
                <button type="submit" class="admin-button text-uppercase" name="login" value="1">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section><!-- End Contact Section -->

</main>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
