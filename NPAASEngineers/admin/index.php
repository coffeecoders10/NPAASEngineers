<!DOCTYPE html>
<?php
require($_SERVER['DOCUMENT_ROOT']."/NPAASEngineers/dbconnect.php");
if($_SESSION["Login"] != 1){
  header("Location: login.php");
}


$info_query = "SELECT * FROM info";
$result_info = mysqli_query($db, $info_query);
$info = mysqli_fetch_assoc($result_info);
$products_query = "SELECT * FROM products";
$result_products = mysqli_query($db, $products_query);
$products = mysqli_fetch_all($result_products);
$team_query = "SELECT * FROM team";
$result_team = mysqli_query($db, $team_query);
$team = mysqli_fetch_all($result_team);

$dealers_query = "SELECT * FROM dealerships";
$result_dealers = mysqli_query($db, $dealers_query);
$dealers = mysqli_fetch_all($result_dealers);

$services_query = "SELECT * FROM services";
$result_services = mysqli_query($db, $services_query);
$services = mysqli_fetch_all($result_services);
// echo $products;


  if(isset($_POST["info_button"])){
    $name = $_POST["name"];
    $full_name = $_POST["full_name"];
    $about = $_POST["about"];
    $imp1 = $_POST["imp1"];
    $imp2 = $_POST["imp2"];
    $services_desc = $_POST["services_desc"];
    $inquires = $_POST["inquires"];
    $client_no = $_POST["client_no"];
    $product_no = $_POST["product_no"];
    $members_no = $_POST["members_no"];
    $product_desc = $_POST["product_desc"];
    $team_desc = $_POST["team_desc"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $update_sql = "UPDATE `info` SET `name`='$name',`full_name`='$full_name',`about`='$about',`imp_point1`='$imp1',`imp_point2`='$imp2',`services_desc`='$services_desc',`inquires`='$inquires',`client_no`='$client_no',`product_no`='$product_no',`members_no`='$members_no',`product_desc`='$product_desc',`team_desc`='$team_desc',`address`='$address',`phone`='$phone',`email`='$email' WHERE `info_id`=0";
    // echo $update_sql;
    $result_update = mysqli_query($db, $update_sql);
    // echo $result_update;
    header("Location: index.php");
  }
  else if(isset($_POST["product_submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $service = $_POST["service"];
    $description = $_POST["description"];
    $product_list = $_POST["product_list"];
    $image = $_FILES["image"];
    $image_name = $_POST["image_name"];
    $filter = $_POST["filter"];
    $n = count($id);
    for ($x = 0; $x < $n; $x++) {
      if($image['name'][$x] != ""){
        $img_path = "products/".$image['name'][$x];
        // $cpy_path = "../assets/img/".$img_path;
        // echo $cpy_path;
        move_uploaded_file($image['tmp_name'][$x], "../assets/img/".$img_path);
      }
      else{
        $img_path = $image_name[$x];
      }
      $update_sql = "UPDATE `products` SET `product_name`='$name[$x]',`product_service`='$service[$x]',`product_description`='$description[$x]',`product_list`='$product_list[$x]',`product_image`='$img_path',`product_filter`='$filter[$x]' WHERE `product_id`='$id[$x]'";
      $result_update = mysqli_query($db, $update_sql);
    }

    $names = $_POST["names"];
    $services = $_POST["services"];
    $descriptions = $_POST["descriptions"];
    $product_lists = $_POST["product_lists"];
    $images = $_FILES["images"];
    $filters = $_POST["filters"];
    $l = count($names);
    for ($x = 0; $x < $l; $x++) {
      if($images['name'][$x] != ""){
        $img_path = "products/".$images['name'][$x];
        move_uploaded_file($images['tmp_name'][$x], "../assets/img/".$img_path);
      }
      else{
        $img_path = "products/default.jpg";
      }
      $insert_sql = "INSERT INTO `products`(`product_name`, `product_service`, `product_description`, `product_list`, `product_image`, `product_filter`) VALUES ('$names[$x]','$services[$x]','$descriptions[$x]','$product_lists[$x]','$img_path','$filters[$x]')";
      $result_insert = mysqli_query($db, $insert_sql);
    }
    header("Location: index.php");
  }
  else if(isset($_POST["product_delete"])){
    $id = $_POST["product_delete"];
    $delete_sql = "DELETE FROM `products` WHERE `product_id`='$id'";
    $result_delete = mysqli_query($db, $delete_sql);
    header("Location: index.php");
  }
  else if(isset($_POST["team_submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $designation = $_POST["designation"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $linkedin = $_POST["linkedin"];
    $image = $_FILES["image"];
    $image_name = $_POST["image_name"];
    // echo $l;
    $n = count($id);
    for ($x = 0; $x < $n; $x++) {
      if($image['name'][$x] != ""){
        $img_path = "team/".$image['name'][$x];
        move_uploaded_file($image['tmp_name'][$x], "../assets/img/".$img_path);
      }
      else{
        $img_path = $image_name[$x];
      }
      $update_sql = "UPDATE `team` SET `team_name`='$name[$x]',`team_designation`='$designation[$x]',`team_phone`='$phone[$x]',`team_email`='$email[$x]',`team_linkedin`='$linkedin[$x]',`team_image`='$img_path' WHERE `team_id`='$id[$x]'";
      $result_update = mysqli_query($db, $update_sql);

    }
    //
    $names = $_POST["names"];
    $designations = $_POST["designations"];
    $phones = $_POST["phones"];
    $emails = $_POST["emails"];
    $linkedins = $_POST["linkedins"];
    $images = $_FILES["images"];
    $l = count($names);
    for ($x = 0; $x < $l; $x++) {
      if($images['name'][$x] != ""){
        $img_path = "team/".$images['name'][$x];
        move_uploaded_file($images['tmp_name'][$x], "../assets/img/".$img_path);
      }
      else{
        $img_path = "team/default.jpg";
      }
      $insert_sql = "INSERT INTO `team`(`team_name`, `team_designation`, `team_phone`, `team_email`, `team_linkedin`,`team_image`) VALUES ('$names[$x]','$designations[$x]','$phones[$x]','$emails[$x]','$linkedins[$x]','$img_path')";
      $result_insert = mysqli_query($db, $insert_sql);
    }
    header("Location: index.php");
  }
  else if(isset($_POST["team_delete"])){
    $id = $_POST["team_delete"];
    $delete_sql = "DELETE FROM `team` WHERE `team_id`='$id'";
    $result_delete = mysqli_query($db, $delete_sql);
    header("Location: index.php");
  }
  else if(isset($_POST["dealer_submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $image_logo = $_FILES["image_logo"];
    $image_logo_name = $_POST["image_logo_name"];
    $image_certificate = $_FILES["image_certificate"];
    $image_certificate_name = $_POST["image_certificate_name"];
    $n = count($id);
    for ($x = 0; $x < $n; $x++) {
      if($image_logo['name'][$x] != ""){
        $img_path_logo = "delerships/".$image_logo['name'][$x];
        move_uploaded_file($image_logo['tmp_name'][$x], "../assets/img/".$img_path_logo);
      }
      else{
        $img_path_logo = $image_logo_name[$x];
      }
      if($image_certificate['name'][$x] != ""){
        $img_path_certificate = "delerships/".$image_certificate['name'][$x];
        move_uploaded_file($image_certificate['tmp_name'][$x], "../assets/img/".$img_path_certificate);
      }
      else{
        $img_path_certificate = $image_certificate_name[$x];
      }
      $update_sql = "UPDATE `dealerships` SET `dealer_name`='$name[$x]',`dealer_image`='$img_path_logo',`dealer_desc`='$description[$x]',`dealer_cert`='$img_path_certificate' WHERE `dealer_id`='$id[$x]'";
      $result_update = mysqli_query($db, $update_sql);
    }

    $names = $_POST["names"];
    $descriptions = $_POST["descriptions"];
    $image_logos = $_FILES["image_logos"];
    $image_certificates = $_FILES["image_certificates"];
    $l = count($names);
    for ($x = 0; $x < $l; $x++) {
      if($image_logos['name'][$x] != ""){
        $img_path_logo = "delerships/".$image_logos['name'][$x];
        move_uploaded_file($image_logos['tmp_name'][$x], "../assets/img/".$img_path_logo);
      }
      else{
        $img_path_logo = "delerships/default.jpg";
      }
      if($image_certificates['name'][$x] != ""){
        $img_path_certificate = "delerships/".$image_certificates['name'][$x];
        move_uploaded_file($image_certificates['tmp_name'][$x], "../assets/img/".$img_path_certificate);
      }
      else{
        $img_path_certificate = "delerships/default.jpg";
      }
      $insert_sql = "INSERT INTO `dealerships`(`dealer_name`, `dealer_image`, `dealer_desc`, `dealer_cert`) VALUES ('$names[$x]','$img_path_logo','$descriptions[$x]','$img_path_certificate')";
      $result_insert = mysqli_query($db, $insert_sql);
    }
    header("Location: index.php");
  }
  else if(isset($_POST["dealer_delete"])){
    $id = $_POST["dealer_delete"];
    $delete_sql = "DELETE FROM `dealerships` WHERE `dealer_id`='$id'";
    $result_delete = mysqli_query($db, $delete_sql);
    header("Location: index.php");
  }
  else if(isset($_POST["password_button"])){
    $name = $_POST["user_name"];
    $old_password = $_POST["old_password"];
    $new_password = md5($_POST["new_password"]);
    if(md5($old_password) == $info["password"]){
      $update_sql = "UPDATE `info` SET `user_name`='$name',`password`= '$new_password' WHERE `info_id`= 0";
      $result_delete = mysqli_query($db, $update_sql);
      $_SESSION["Login"] = 0;
      header("Location: index.php");
    }
  }
  else if(isset($_POST["services_submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $n = count($id);
    for ($x = 0; $x < $n; $x++) {
      $update_sql = "UPDATE `services` SET `service_name`='$name[$x]',`service_desc`='$desc[$x]' WHERE `service_id`=$id[$x]";
      $result_update = mysqli_query($db, $update_sql);
    }

    $names = $_POST["names"];
    $descs = $_POST["descs"];
    $l = count($names);
    for ($x = 0; $x < $l; $x++) {
      $insert_sql = "INSERT INTO `services`(`service_name`, `service_desc`) VALUES ('$names[$x]','$descs[$x]')";
      echo $insert_sql;
      $result_insert = mysqli_query($db, $insert_sql);
    }
    header("Location: index.php");
  }
  else if(isset($_POST["services_delete"])){
    $id = $_POST["services_delete"];
    $delete_sql = "DELETE FROM `services` WHERE `service_id`=$id";
    $result_delete = mysqli_query($db, $delete_sql);
    header("Location: index.php");
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
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
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

<body>

  <script>
/*
This script is identical to the above JavaScript function.
*/
var ct = 1;
var ct_1 = 1;
var ct_2 = 1;
var ct_3 = 1;
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
  var delLink = '<div class="col-md-12 text-right mt-3 mb-5"><a href="javascript:delIt('+ ct +')" class="del-button mb-5" >Delete</button></div>';
	// var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct +')">Del</a></div>';
	div1.innerHTML = document.getElementById('newlinktpl').innerHTML + delLink;
	document.getElementById('newlink').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink');
	parentEle.removeChild(ele);
}

function new_link_1()
{
	ct_1++;
	var div1 = document.createElement('div');
	div1.id = ct_1;
	// link to delete extended form elements
  var delLink = '<div class="col-md-12 text-right mt-3 mb-5"><a href="javascript:delIt_1('+ ct_1 +')" class="del-button mb-5" >Delete</button></div>';
	// var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_1('+ ct_1 +')">Del</a></div>';
	div1.innerHTML = document.getElementById('newlinktpl_1').innerHTML + delLink;
	document.getElementById('newlink_1').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt_1(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink_1');
	parentEle.removeChild(ele);
}

function new_link_2()
{
	ct_2++;
	var div1 = document.createElement('div');
	div1.id = ct_2;
	// link to delete extended form elements
  var delLink = '<div class="col-md-12 text-right mt-3 mb-5"><a href="javascript:delIt_2('+ ct_2 +')" class="del-button mb-5" >Delete</button></div>';
	// var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_2('+ ct_1 +')">Del</a></div>';
	div1.innerHTML = document.getElementById('newlinktpl_2').innerHTML + delLink;
	document.getElementById('newlink_2').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt_2(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink_2');
	parentEle.removeChild(ele);
}

function new_link_3()
{
	ct_3++;
	var div1 = document.createElement('div');
	div1.id = ct_3;
	// link to delete extended form elements
  var delLink = '<div class="col-md-12 text-right mt-3 mb-5"><a href="javascript:delIt_3('+ ct_3 +')" class="del-button mb-5" >Delete</button></div>';
	// var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_2('+ ct_1 +')">Del</a></div>';
	div1.innerHTML = document.getElementById('newlinktpl_3').innerHTML + delLink;
	document.getElementById('newlink_3').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt_3(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink_3');
	parentEle.removeChild(ele);
}
</script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span><?= $info['name'] ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php" target="_blank">Home Preview</a></li>
          <li><a href="#description">Description</a></li>
          <li><a href="#add-product">Product</a></li>
          <!-- <li></li> -->
          <li><a href="#add-team">Team</a></li>
          <li><a href="#add-dealer">Dealer</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <img class="mb-5" src="../assets/img/logo.png" style="height:40vh">
      <h1>ADMIN</h1>
      <a href="#products" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="description" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Change User Name & Password</h2>
          <p></p>
        </div>

        <!-- <div class="row d-flex justify-content-center"> -->
          <form name="info_details" action="index.php" method="post">
            <div class="row">
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">User Name</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <input type="text" name="user_name" class="form-control" value="<?= $info['user_name'] ?>" required>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Old Password</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <input type="password" name="old_password" class="form-control" required>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">New Password</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <input type="password" name="new_password" class="form-control" required>
              </div>
              <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
                <button type="submit" name="password_button" value="info" class="admin-button">Submit</button>
              </div>
          </div>
          </form>
        <!-- </div> -->

      </div>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="description" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Description Data</h2>
          <p>Fill in information and click Submit</p>
        </div>

        <!-- <div class="row d-flex justify-content-center"> -->
          <form name="info_details" action="index.php" method="post">
            <div class="row">
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Name</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <input type="text" name="name" class="form-control" value="<?= $info['name'] ?>" required>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Full Name</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <input type="text" name="full_name" class="form-control" value="<?= $info['full_name'] ?>" required>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">About</h5>
              </div>
              <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
                <textarea name="about" class="form-control" rows="4" cols="80" required><?= $info['about'] ?></textarea>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Service Description</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <textarea name="services_desc" class="form-control" rows="4" cols="80" required><?= $info['services_desc'] ?></textarea>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Inquires</h5>
              </div>
              <div class="col-md-12 justify-content-center d-flex align-items-center mb-5">
                <textarea name="inquires" class="form-control" rows="4" cols="80" required><?= $info['inquires'] ?></textarea>
              </div>
              <hr>
              <div class="col-md-3 mb-1">
                <h5 class="text-uppercase">Client Count</h5>
              </div>
              <div class="col-md-9 d-flex justify-content-center align-items-center mb-3">
                <input type="number" class="form-control" name="client_no" value="<?= $info['client_no'] ?>" required>
              </div>
              <div class="col-md-3 mb-1">
                <h5 class="text-uppercase">Product Count</h5>
              </div>
              <div class="col-md-9 d-flex justify-content-center align-items-center mb-3">
                <input type="number" class="form-control" name="product_no" value="<?= $info['product_no'] ?>" required>
              </div>
              <div class="col-md-3 mb-1">
                <h5 class="text-uppercase">Member Count</h5>
              </div>
              <hr>
              <div class="col-md-9 d-flex justify-content-center align-items-center mb-5">
                <input type="number" class="form-control" name="members_no" value="<?= $info['members_no'] ?>" required>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Product Description</h5>
              </div>
              <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
                <textarea name="product_desc" class="form-control" rows="4" cols="80" required><?= $info['product_desc'] ?></textarea>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Team Description</h5>
              </div>
              <div class="col-md-12 d-flex justify-content-center align-items-center mb-3">
                <textarea name="team_desc" class="form-control" rows="4" cols="80" required><?= $info['team_desc'] ?></textarea>
              </div>
              <div class="col-md-12 mb-1">
                <h5 class="text-uppercase">Address</h5>
              </div>
              <div class="col-md-12 justify-content-center d-flex align-items-center mb-5">
                <textarea name="address" class="form-control" rows="4" cols="80" required><?= $info['address'] ?></textarea>
              </div>
              <div class="col-md-3 mb-3">
                <h5 class="text-uppercase">Phone</h5>
              </div>
              <div class="col-md-9 d-flex justify-content-center align-items-center mb-3">
                <input type="text" class="form-control" name="phone" value="<?= $info['phone'] ?>" required>
              </div>
              <div class="col-md-3 mb-3">
                <h5 class="text-uppercase">Email</h5>
              </div>
              <div class="col-md-9 d-flex justify-content-center align-items-center mb-5">
                <input type="email" class="form-control" name="email" value="<?= $info['email'] ?>" required>
              </div>
              <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
                <button type="submit" name="info_button" value="info" class="admin-button">Submit</button>
              </div>
          </div>
          </form>
        <!-- </div> -->

      </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="add-product" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Product</h2>
          <p>Fill in information and click Submit. Add and Delete Products. Product List is seperated by '|'</p>
        </div>

          <div class="col-lg-12">
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div id="newlink">

                  <?php
                  foreach ($products as $key) {

                  ?>

                  <hr class="mb-3">
                  <div class="form-row">
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Name</p>
                    </div>
                    <div class="col-md-12 form-group" style="display:none">
                      <input type="text" name="id[]" value="<?= $key["0"] ?>" class="form-control" id="id" required/>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" name="name[]" value="<?= $key["1"] ?>" class="form-control" id="name" required/>
                    </div>
                    <div class="col-md-2 form-group">
                      <a class="btn collapse-btn text-white"  onclick="$('#product-<?= $key["0"] ?>').slideToggle();">Show / Hide</a>
                    </div>
                    <div class="container-fluid" style="display:none" id="product-<?= $key["0"] ?>">
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Service</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" value="<?= $key["2"] ?>" name="service[]" id="email"  required/>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Description</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" value="<?= $key["3"] ?>" name="description[]" id="subject" required/>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Product List</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="product_list[]" rows="5" data-rule="required" required><?= $key["4"] ?></textarea>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Product Image</p>
                      </div>
                      <div class="col-md-12 ml-2">
                        <img src="../assets/img/<?= $key["5"] ?>" style="height:170px; width:auto; max-width:500px;">
                      </div>
                      <center>
                      <div class="col-md-10 form-group border border-dark p-2" style="display:none">
                        <input type="text" id="img" name="image_name[]" value="<?= $key["5"] ?>">
                      </div>
                      <div class="col-md-10 form-group border border-dark p-2">
                        <input type="file" id="img" name="image[]" value="<?= $key["5"] ?>" accept="image/*">
                      </div>
                      </center>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Category</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" value="<?= $key["6"] ?>" name="filter[]" id="filter" required/>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="del-button mb-5" name="product_delete" value="<?= $key[0] ?>">Delete</button>
                      </div>
                    </div>
                  </div>

              <?php
                }
               ?>
               </div>
               <div class="text-center">
                 <p id="addnew">
                   <div class="col-md-12 d-flex justify-content-center">
                     <a href="javascript:new_link()" class="add-button text-uppercase font-weight-bold" style="width:100%">Add New</a>
                   </div>
                 </p>
                </div>
               <div class="text-center">
                 <button type="submit" class="admin-button text-uppercase" name="product_submit" value="1">Submit</button>
               </div>
           </form>
            <div id="newlinktpl" style="display:none">
              <div class="form-row">
                <hr>
                <div class="col-md-12 ml-2 d-flex justify-content-center">
                  <h4 class="text-uppercase font-weight-bold">New Product</h4>
                </div>
                <hr>
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Name</p>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" name="names[]" class="form-control" required/>
                    </div>
                    <div class="container-fluid">
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Service</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="services[]"  required/>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Description</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="descriptions[]" required/>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Product List</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="product_lists[]" rows="5" data-rule="required" required></textarea>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Product Image</p>
                      </div>
                      <center>
                      <div class="col-md-10 form-group border border-dark p-2">
                        <input type="file" id="img" name="images[]" accept="image/*">
                      </div>
                      </center>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Category</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="filters[]" required/>
                      </div>
                    </div>
                  </div>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    <section id="add-team" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Team</h2>
          <p>Manage Your Team</p>
        </div>

          <div class="col-lg-12">
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div id="newlink_1">
                  <?php
                  foreach ($team as $key) {

                  ?>
                  <div class="form-row">
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Name</p>
                    </div>
                    <div class="col-md-10 form-group" style="display:none">
                      <input type="text" name="id[]" value="<?= $key["0"] ?>" class="form-control" required/>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" name="name[]" value="<?= $key["1"] ?>" class="form-control" required/>
                    </div>
                    <div class="col-md-2 form-group">
                      <a class="btn collapse-btn text-white"  onclick="$('#team-<?= $key["0"] ?>').slideToggle();">Show / Hide</a>
                    </div>
                    <div class="container-fluid" style="display:none" id="team-<?= $key["0"] ?>">
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Designation</p>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="designation[]" value="<?= $key["2"] ?>"  required/>
                    </div>
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Profile Image</p>
                    </div>
                    <div class="col-md-12 ml-2">
                      <img src="../assets/img/<?= $key["6"] ?>" style="height:170px; width:auto; max-width:500px;">
                    </div>
                    <center>
                    <div class="col-md-10 form-group border border-dark p-2" style="display:none">
                      <input type="text" name="image_name[]" value="<?= $key["6"] ?>">
                    </div>
                    <div class="col-md-10 form-group border border-dark p-2">
                      <input type="file" id="img" name="image[]" value="<?= $key["6"] ?>" accept="image/*">
                    </div>
                    </center>
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Phone</p>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="number" class="form-control" value="<?= $key["3"] ?>" name="phone[]" required/>
                    </div>
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Email</p>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="email" class="form-control" value="<?= $key["4"] ?>" name="email[]" required/>
                    </div>
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Linkedin</p>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" value="<?= $key["5"] ?>" name="linkedin[]" required/>
                    </div>
                    <div class="text-center col-md-12">
                      <button type="submit" class="del-button mb-5" name="team_delete" value="<?= $key[0] ?>">Delete</button>
                    </div>
                    </div>
                </div>


              <?php
                }
               ?>
               </div>
               <div class="text-center">
                 <p id="addnew">
                   <div class="col-md-12 d-flex justify-content-center">
                     <a href="javascript:new_link_1()" class="add-button text-uppercase font-weight-bold" style="width:100%">Add New Member</a>
                   </div>
                 </p>
                </div>
                <div class="text-center">
                  <button type="submit" class="admin-button text-uppercase" name="team_submit" value="1">Submit</button>
                </div>
           </form>
            <div id="newlinktpl_1" style="display:none">
              <div class="form-row">
                <hr>
                <div class="col-md-12 ml-2 d-flex justify-content-center">
                  <h4 class="text-uppercase font-weight-bold">New Member</h4>
                </div>
                <hr>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Name</p>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="names[]" class="form-control" required/>
                </div>
                <div class="container-fluid">
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Designation</p>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="designations[]" class="form-control"  required/>
                </div>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Profile Image</p>
                </div>
                <center>
                <div class="col-md-10 form-group border border-dark p-2">
                  <input type="file" name="images[]" accept="image/*">
                </div>
                </center>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Phone</p>
                </div>
                <div class="col-md-12 form-group">
                  <input type="number" class="form-control" name="phones[]" required/>
                </div>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Email</p>
                </div>
                <div class="col-md-12 form-group">
                  <input type="email" class="form-control" name="emails[]" required/>
                </div>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Linkedin</p>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="linkedins[]" required/>
                </div>
                <!-- <div class="text-center col-md-12">
                  <button type="submit" class="del-button mb-5" name="team_delete">Delete</button>
                </div> -->
                </div>
            </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section id="add-dealer" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Dealers</h2>
          <p>Manage Dealerships</p>
        </div>

          <div class="col-lg-12">
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div id="newlink_2">

                  <?php
                  foreach ($dealers as $key) {

                  ?>
                  <hr class="mb-3">
                  <div class="form-row">
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Dealer Name</p>
                    </div>
                    <div class="col-md-12 form-group" style="display:none">
                      <input type="text" name="id[]" value="<?= $key["0"] ?>" class="form-control" id="id" required/>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" name="name[]" value="<?= $key["1"] ?>" class="form-control" id="name" required/>
                    </div>
                    <div class="col-md-2 form-group">
                      <a class="btn collapse-btn text-white"  onclick="$('#dealer-<?= $key["0"] ?>').slideToggle();">Show / Hide</a>
                    </div>
                    <div class="container-fluid" style="display:none" id="dealer-<?= $key["0"] ?>">
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Description</p>
                      </div>
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="description[]" rows="5" data-rule="required" required><?= $key["3"] ?></textarea>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Dealer Logo</p>
                      </div>
                      <div class="col-md-12 ml-2">
                        <img src="../assets/img/<?= $key["2"] ?>" style="height:170px; width:auto; max-width:500px;">
                      </div>
                      <center>
                      <div class="col-md-10 form-group border border-dark p-2" style="display:none">
                        <input type="text" name="image_logo_name[]" value="<?= $key["2"] ?>">
                      </div>
                      <div class="col-md-10 form-group border border-dark p-2">
                        <input type="file" id="img" name="image_logo[]" value="<?= $key["2"] ?>" accept="image/*">
                      </div>
                      </center>
                      <div class="col-md-12 ml-2">
                        <p class="text-uppercase font-weight-bold">Dealer Certificate</p>
                      </div>
                      <div class="col-md-12 ml-2">
                        <p><?php $name_array = explode("/",$key["4"]); $name = end($name_array) ?> <?= $name; ?></p>
                      </div>
                      <center>
                      <div class="col-md-10 form-group border border-dark p-2" style="display:none">
                        <input type="text" id="img" name="image_certificate_name[]" value="<?= $key["4"] ?>">
                      </div>
                      <div class="col-md-10 form-group border border-dark p-2">
                        <input type="file" id="img" name="image_certificate[]" value="<?= $key["4"] ?>">
                      </div>
                      </center>
                      <div class="text-center">
                        <button type="submit" class="del-button mb-5" name="dealer_delete" value="<?= $key[0] ?>">Delete</button>
                      </div>
                    </div>
                  </div>

              <?php
                }
               ?>
               </div>
               <div class="text-center">
                 <p id="addnew_2">
                   <div class="col-md-12 d-flex justify-content-center">
                     <a href="javascript:new_link_2()" class="add-button text-uppercase font-weight-bold" style="width:100%">Add New Dealer</a>
                   </div>
                 </p>
                </div>
               <div class="text-center">
                 <button type="submit" class="admin-button text-uppercase" name="dealer_submit" value="1">Submit</button>
               </div>
           </form>
            <div id="newlinktpl_2" style="display:none">
              <div class="form-row">
                <hr>
                <div class="col-md-12 ml-2 d-flex justify-content-center">
                  <h4 class="text-uppercase font-weight-bold">New Dealer</h4>
                </div>
                <hr>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Dealer Name</p>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="names[]" class="form-control" id="name" required/>
                </div>
                <div class="container-fluid">
                  <div class="col-md-12 ml-2">
                    <p class="text-uppercase font-weight-bold">Description</p>
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="descriptions[]" rows="5" data-rule="required" required></textarea>
                  </div>
                  <div class="col-md-12 ml-2">
                    <p class="text-uppercase font-weight-bold">Dealer Logo</p>
                  </div>
                  <center>
                  <div class="col-md-10 form-group border border-dark p-2">
                    <input type="file" id="img" name="image_logos[]" accept="image/*">
                  </div>
                  </center>
                  <div class="col-md-12 ml-2">
                    <p class="text-uppercase font-weight-bold">Dealer Certificate</p>
                  </div>
                  <center>
                  <div class="col-md-10 form-group border border-dark p-2">
                    <input type="file" id="img" name="image_certificates[]">
                  </div>
                  </center>
                </div>
                  </div>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section id="add-services" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
          <p>Manage Dealerships</p>
        </div>

          <div class="col-lg-12">
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div id="newlink_3">

                  <?php
                  foreach ($services as $key) {

                  ?>
                  <hr class="mb-3">
                  <div class="form-row">
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Service Name</p>
                    </div>
                    <div class="col-md-12 form-group" style="display:none">
                      <input type="text" name="id[]" value="<?= $key["0"] ?>" class="form-control" id="id" required/>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" name="name[]" value="<?= $key["1"] ?>" class="form-control" id="name" required/>
                    </div>
                    <div class="col-md-12 ml-2">
                      <p class="text-uppercase font-weight-bold">Service Description</p>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" name="desc[]" value="<?= $key["2"] ?>" class="form-control" id="desc" required/>
                    </div>
                      <div class="text-center">
                        <button type="submit" class="del-button mb-5" name="services_delete" value="<?= $key[0] ?>">Delete</button>
                      </div>
                    </div>

              <?php
                }
               ?>
               </div>
               <div class="text-center">
                 <p id="addnew_3">
                   <div class="col-md-12 d-flex justify-content-center">
                     <a href="javascript:new_link_3()" class="add-button text-uppercase font-weight-bold" style="width:100%">Add New Service</a>
                   </div>
                 </p>
                </div>
               <div class="text-center">
                 <button type="submit" class="admin-button text-uppercase" name="services_submit" value="1">Submit</button>
               </div>
           </form>
            <div id="newlinktpl_3" style="display:none">
              <div class="form-row">
                <hr>
                <div class="col-md-12 ml-2 d-flex justify-content-center">
                  <h4 class="text-uppercase font-weight-bold">New Service</h4>
                </div>
                <hr>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Service Name</p>
                </div>
                <div class="col-md-10 form-group">
                  <input type="text" name="names[]" class="form-control" id="name" required/>
                </div>
                <div class="col-md-12 ml-2">
                  <p class="text-uppercase font-weight-bold">Service Description</p>
                </div>
                <div class="col-md-10 form-group">
                  <input type="text" name="descs[]" class="form-control" id="desc" required/>
                </div>
                </div>
                  </div>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <!-- <div class="row d-flex justify-content-center align-items-center">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3>NPAAS Engineers</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

        </div> -->
      </div>
    </div>

    <div class="container d-none">
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
