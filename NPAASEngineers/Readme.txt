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
