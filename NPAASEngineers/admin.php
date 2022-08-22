<!DOCTYPE html>
<?php

require($_SERVER['DOCUMENT_ROOT']."/NPAASEngineers/dbconnect.php");

$info_query = "SELECT * FROM info";
$result_info = mysqli_query($db, $info_query);
$info = mysqli_fetch_assoc($result_info);
$products_query = "SELECT * FROM products";
$result_products = mysqli_query($db, $products_query);
$products = mysqli_fetch_all($result_products);
$team_query = "SELECT * FROM team";
$result_team = mysqli_query($db, $team_query);
$team = mysqli_fetch_all($result_team);
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
    header("Location: admin.php");
  }
  else if(isset($_POST["product_submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $service = $_POST["service"];
    $description = $_POST["description"];
    $product_list = $_POST["product_list"];
    $image = $_POST["image"];
    $filter = $_POST["filter"];
    $n = count($id);
    for ($x = 0; $x < $n; $x++) {
      $update_sql = "UPDATE `products` SET `product_name`='$name[$x]',`product_service`='$service[$x]',`product_description`='$description[$x]',`product_list`='$product_list[$x]',`product_image`='$image[$x]',`product_filter`='$filter[$x]' WHERE `product_id`='$id[$x]'";
      $result_update = mysqli_query($db, $update_sql);
    }

    $names = $_POST["names"];
    $services = $_POST["services"];
    $descriptions = $_POST["descriptions"];
    $product_lists = $_POST["product_lists"];
    $images = $_POST["images"];
    $filters = $_POST["filters"];
    $l = count($names);
    for ($x = 0; $x < $l; $x++) {
      $insert_sql = "INSERT INTO `products`(`product_name`, `product_service`, `product_description`, `product_list`, `product_image`, `product_filter`) VALUES ('$names[$x]','$services[$x]','$descriptions[$x]','$product_lists[$x]','$images[$x]','$filters[$x]')";
      $result_insert = mysqli_query($db, $insert_sql);
    }
    header("Location: admin.php");
  }
  else if(isset($_POST["product_delete"])){
    $id = $_POST["product_delete"];
    $delete_sql = "DELETE FROM `products` WHERE `product_id`='$id'";
    $result_delete = mysqli_query($db, $delete_sql);
    header("Location: admin.php");
  }
  else if(isset($_POST["team_submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $designation = $_POST["designation"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $linkedin = $_POST["linkedin"];
    $n = count($id);
    for ($x = 0; $x < $n; $x++) {
      $update_sql = "UPDATE `team` SET `team_name`='$name[$x]',`team_designation`='$designation[$x]',`team_phone`='$phone[$x]',`team_email`='$email[$x]',`team_linkedin`='$linkedin[$x]' WHERE `team_id`='$id[$x]'";
      $result_update = mysqli_query($db, $update_sql);
    }

    $names = $_POST["names"];
    $designations = $_POST["designations"];
    $phones = $_POST["phones"];
    $emails = $_POST["emails"];
    $linkedins = $_POST["linkedins"];
    $l = count($names);
    for ($x = 0; $x < $l; $x++) {
      $insert_sql = "INSERT INTO `team`(`team_name`, `team_designation`, `team_phone`, `team_email`, `team_linkedin`) VALUES ('$names[$x]','$designations[$x]','$phones[$x]','$emails[$x]','$linkedins[$x]')";
      $result_insert = mysqli_query($db, $insert_sql);
    }
    header("Location: admin.php");
  }
  else if(isset($_POST["team_delete"])){
    $id = $_POST["team_delete"];
    $delete_sql = "DELETE FROM `team` WHERE `team_id`='$id'";
    $result_delete = mysqli_query($db, $delete_sql);
    header("Location: admin.php");
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
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
	var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct +')">Del</a></div>';
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
	var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_1('+ ct_1 +')">Del</a></div>';
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
</script>

<!-- <form method="post" action="">
<div id="newlink">
<div>
<table border=0>
	<tr>
		<td> Link URL: </td>
		<td> <input type="text" name="linkurl[]" value="http://www.satya-weblog.com"> </td>
	</tr>
	<tr>
		<td> Link Description: </td>
		<td>  <textarea name="linkdesc[]" cols="50" rows="5" ></textarea> </td>
	</tr>
</table>
</div>
</div>
	<p>
		<br>
		<input type="submit" name="submit1">
		<input type="reset" name="reset1">
	</p>
<p id="addnew">
	<a href="javascript:new_link()">Add New </a>
</p>
</form>
<div id="newlinktpl" style="display:none">
<div>
<table border=0>
	<tr>
		<td> Link URL: </td>
		<td> <input type="text" name="linkurl[]" value=""> </td>
	</tr>
	<tr>
		<td> Link Description: </td>
		<td> <textarea name="linkdesc[]" cols="50" rows="5" ></textarea> </td>
	</tr>
</table>
</div>
</div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span><?= $info['name'] ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html" target="_blank">Home Preview</a></li>
          <li><a href="#description">Description</a></li>
          <li><a href="#add-product">Add Product</a></li>
          <!-- <li></li> -->
          <li><a href="#add-team">Add Team</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <img class="mb-5" src="assets/img/logo.png" style="height:40vh">
      <h1>ADMIN</h1>
      <h2>Desc X</h2>
      <a href="#products" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="description" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Descripption Data</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row d-flex justify-content-center">
          <form name="info_details" action="admin.php" method="post">

            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Name</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="text" name="name" value="<?= $info['name'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Full Name</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="text" name="full_name" value="<?= $info['full_name'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">About</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="about" rows="8" cols="80" required><?= $info['about'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Important Point 1</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="imp1" rows="8" cols="80" required><?= $info['imp_point1'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Important Point 2</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="imp2" rows="8" cols="80" required><?= $info['imp_point2'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Service Description</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="services_desc" rows="8" cols="80" required><?= $info['services_desc'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Inquires</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="inquires" rows="8" cols="80" required><?= $info['inquires'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Client Count</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="number" name="client_no" value="<?= $info['client_no'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Product Count</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="number" name="product_no" value="<?= $info['product_no'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Member Count</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="number" name="members_no" value="<?= $info['members_no'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Product Description</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="product_desc" rows="8" cols="80" required><?= $info['product_desc'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Team Description</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="team_desc" rows="8" cols="80" required><?= $info['team_desc'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Address</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <textarea name="address" rows="8" cols="80" required><?= $info['address'] ?></textarea>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Phone</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="text" name="phone" value="<?= $info['phone'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <h4 class="text-uppercase">Email</h4>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <input type="email" name="email" value="<?= $info['email'] ?>" required>
            </div>
            <div class="col-md-12 justify-content-center d-flex align-items-center mb-3">
              <button type="submit" name="info_button" value="info" class="admin-button">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="add-product" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Product</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

          <div class="col-lg-12">
            <form action="admin.php" method="post" >
              <div id="newlink">

                  <p id="addnew">
                    <div class="col-md-6 form-group d-flex justify-content-center">
                      <a href="javascript:new_link()" class="text-uppercase font-weight-bold" style="width:100%">Add New</a>
                    </div>
                  </p>
                  <?php
                  foreach ($products as $key) {

                  ?>
                  <div class="form-row">
                  <div class="col-md-10 form-group" style="display:none">
                    <input type="text" name="id[]" value="<?= $key["0"] ?>" class="form-control" id="id" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-10 form-group">
                    <input type="text" name="name[]" value="<?= $key["1"] ?>" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" value="<?= $key["2"] ?>" name="service[]" id="email" placeholder="Your Service" required/>
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="<?= $key["3"] ?>" name="description[]" id="subject" placeholder="Description" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="product_list[]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Product List" required><?= $key["4"] ?></textarea>
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="file" id="img" name="image[]" value="<?= $key["5"] ?>" accept="image/*">
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="<?= $key["6"] ?>" name="filter[]" id="filter" placeholder="Filter" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
                </div>
                <div class="text-center"><button type="submit" name="product_delete" value="<?= $key[0] ?>">Delete</button></div>


              <?php
                }
               ?>
               </div>
               <div class="text-center"><button type="submit" name="product_submit" value="1">Submit</button></div>
           </form>
            <div id="newlinktpl" style="display:none">
              <div class="form-row">
              <div class="col-md-10 form-group">
                <input type="text" name="names[]" class="form-control" id="names" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validate"></div>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="services[]" id="emails" placeholder="Your Service" required />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
            <div class="form-group">
              <input type="text" class="form-control" name="descriptions[]" id="subjects" placeholder="Description" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="product_lists[]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Product List" required></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="file" id="imgs" name="images[]" accept="image/*">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="filters[]" id="filters" placeholder="Filter" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
              <div class="validate"></div>
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
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

          <div class="col-lg-12">
            <form action="admin.php" method="post" >
              <div id="newlink_1">

                  <p id="addnew_1">
                    <div class="col-md-6 form-group d-flex justify-content-center">
                      <a href="javascript:new_link_1()" class="text-uppercase font-weight-bold" style="width:100%">Add New</a>
                    </div>
                  </p>
                  <?php
                  foreach ($team as $key) {

                  ?>
                  <div class="form-row">
                  <div class="col-md-10 form-group" style="display:none">
                    <input type="text" name="id[]" value="<?= $key["0"] ?>" class="form-control" id="id" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-10 form-group">
                    <input type="text" name="name[]" value="<?= $key["1"] ?>" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" value="<?= $key["2"] ?>" name="designation[]" id="email" placeholder="Your Designation" required/>
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" value="<?= $key["3"] ?>" name="phone[]" id="subject" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" value="<?= $key["4"] ?>" name="email[]" id="filter" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="<?= $key["5"] ?>" name="linkedin[]" id="filter" placeholder="Linkedin" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
                </div>
                <div class="text-center"><button type="submit" name="team_delete" value="<?= $key[0] ?>">Delete</button></div>


              <?php
                }
               ?>
               </div>
               <div class="text-center"><button type="submit" name="team_submit" value="1">Submit</button></div>
           </form>
            <div id="newlinktpl_1" style="display:none">
              <div class="form-row">
              <div class="col-md-10 form-group">
                <input type="text" name="names[]" class="form-control" id="names" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validate"></div>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="designations[]" id="emails" placeholder="Your Designation" required />
                <div class="validate"></div>
              </div>
            </div>
              <div class="form-group">
                <div class="form-group">
                  <input type="number" class="form-control" name="phones[]" id="subjects" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emails[]" id="filters" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="linkedins[]" id="filter" placeholder="Linkedin" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                  <div class="validate"></div>
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
        <div class="row d-flex justify-content-center align-items-center">

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
