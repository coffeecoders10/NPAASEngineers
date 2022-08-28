Thanks for downloading this template!

Template Name: Squadfree
Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/


ExtraText

<div class="col-xl-4 d-flex align-items-stretch">
  <div class="icon-boxes d-flex flex-column justify-content-center">
    <div class="row">
      <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
        <i class="bx bx-cube-alt"></i>
        <?php 
        $imp1 = explode('|',$info['imp_point1']);
         ?>
        <h4><?= $imp1[0] ?></h4>
        <p><?= $imp1[1] ?></p>
      </div>

      <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="200">
        <i class="bx bx-cube-alt"></i>
        <?php 
        $imp2 = explode('|',$info['imp_point2']);
         ?>
        <h4><?= $imp2[0] ?></h4>
        <p><?= $imp2[1] ?></p>
      </div>
    </div>
  </div>
  <!-- End .content-->
</div>




Imp Point - ADMIN

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




NEWWWTPL

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




NEWEWWTEAM

<div class="form-row">
  
<div class="col-md-12 form-group">
  <input type="text" name="names[]" class="form-control" id="names" placeholder="Your Name" required />
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
