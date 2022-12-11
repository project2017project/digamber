<!DOCTYPE html>
<?php include 'digamberheader.php'; ?>
 <!-- =====board Popup Start ======== -->
 <div class="board-candidate-wrapper same-digamber-popup">
   <div class="popup-inner-wrap">
      <div class="container pop-cont">
         <div class="row">
            <div class="pop-cross">
               <a href="javascript:void(0)">
               <i class="fa-solid fa-xmark cross-popup-hide" id=""></i>
               </a>
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="board-profile">
                  <img src="images/rajiv.jpg">
               </div>
               <div class="board-po-text">
                  <h4>RAJIV JAIN</h4>
                  <p>Chairman cum Managing Director B.Sc, M.C.A</p>
               </div>
            </div>
            <div class="col-lg-8 col-md-8">
               <div class="board-text">
                  <p>The Executive Chairman of the Company has 23 to 24 years of progressive management experience in the finance field. He has been associated with the Company since inception as a promoter & responsible for the overall working of the Company and is instrumental in making strategic decisions for the Company & his strategic direction leads to achieve SBI excellence award in 2010. He is an expert in assessing problem situations to identify causes, gather and process relevant information, generate possible solutions, and make recommendations and resolve the problem.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ======= board Popup End ====== -->
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="section-2 pt-4 pb-4">
   <div class="container my-1">
      <div class="row">
         <div class="col-lg-5  col-md-5 text-banner-wrap" data-aos="fade-down">
            <div class="p-5 mt-4">
               <h4 class="display-4"><?php echo $settings['bannerHeading']; ?></h4>
               <p class="lead pb-5"><?php echo $settings['bannerSubHeading']; ?></p>
               <a href="#" class="animte-arrow">
                  <img src="images/banner-icon-slide-1.png" class="animte-1-wrap"><img src="images/banner-icon-slide-1.png" class="animte-2-wrap"><img src="images/banner-icon-slide-1.png" class="animte-3-wrap">
               </a>
            </div>
         </div>
         <div class="col-lg-7 col-md-7 banner-side-wrap" data-aos="fade-up">
            <div class="p-2 space-wrap">
               <img class="" src="images/Home_Banner/<?php echo $settings['bannerImage']; ?>" />
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========= banner end ======= -->
<!-- ====== New About Design Start ============= -->
<div class="container new-about-wrapper mt-5">
   <div class="row">
      <div class="col-lg-6 col-md-6">
         <div class="new-abo-content pt-5">
            <h4><?php echo $settings['aboutHeading']; ?></h4>
            <?php echo $settings['aboutMessage']; ?>
            <div class="about-new-btn">
               <a href="javascript:void(0)" class="readmore-btn-click">Click Here To Read More
               <img src="images/d-logo-cut-2.png">
               </a>
            </div>
         </div>
      </div>
      <div class="col-lg-6 col-md-6">
         <div class="new-abo-image">
		 	<img src="images/Home_About/<?php echo $settings['aboutImage']; ?>">
         </div>
      </div>
   </div>
</div>
<!-- ====== New About Design end ============= -->
<!-- ======== six-col-section-start ======= -->
<section class="section-6" style="background-image: url('images/i4.png');">
   <div class="container sixth-cont-wrap pt-5 pb-2">
      <h3 class="pt-4"><?php echo $settings['glanceHeading']; ?></h3>
      <?php echo $settings['glanceSubHeading']; ?>
      <div class="row pt-4 pb-4">
         <?php while ($glance = mysqli_fetch_array($glanceres)) { ?>
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box"  data-aos="flip-up">
            <div class="icon-box-wrap">
               <img src="images/glance/<?php echo $glance['glanceImage']; ?>">
            </div>
            <h5 class="counter" data-number="<?php echo $glance['glanceNumber']; ?>" ></h5>
            <span><?php echo $glance['glanceName']; ?></span>
         </div>
         <?php } ?>
      </div>
   </div>
</section>
<!-- ======== six-col-section-end ======= -->
<!-- ======= loans new section start ========= -->
<section class="loans-new-wrapper">
   <div class="container pt-4 pb-5">
      <div class="title-wrap pt-5 pb-4">
         <h4><?php echo $settings['loanHeading']; ?></h4>
         <p class="title-foot-text"><?php echo $settings['loanSubHeading']; ?></p>
      </div>
      <div class="row loans-top-row">
         <div class="col-lg-6 col-md-6 loans-new-back-img" style="background-image:url('images/Home_Loan/<?php echo $settings['loanImage1']; ?>');">
         </div>
         <div class="col-lg-6 col-md-6 micro-content-wrap">
            <div class="micro-new-content">
               <h4><?php echo $settings['loanHeading1']; ?></h4>
               <?php echo $settings['loanMessage1']; ?>
               <div class="micro-new-btn">
                  <a href="javascript:void(0)" class="loan-readmore-btn-click">Explore
                  <img src="images/d-logo-cut-2.png">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row loans-next-row pb-4">
         <div class="col-lg-6 col-md-6 retail-content-wrap">
            <div class="micro-new-content second">
               <h4><?php echo $settings['loanHeading2']; ?></h4>
               <?php echo $settings['loanMessage2']; ?>
               <div class="micro-new-btn">
                  <a href="javascript:void(0)" class="loan2-readmore-btn-click">Explore
                  <img src="images/d-logo-cut-2.png">
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 loans-new-back-img" style="background-image:url('images/Home_Loan/<?php echo $settings['loanImage2']; ?>');">
         </div>
      </div>
   </div>
</section>
<!-- ======= loans new section end ========= -->
<!-- ======= testimonial section start ===== -->
<section class="mt-5 mb-5 testimonial-wrapper">
   <div class="container text-center">
      <div class="row pt-4 pb-4">
         <div class="col-12">
            <div class="title-wrap pt-2 pb-2">
               <h4><?php echo $settings['customersHeading']; ?></h4>
            </div>
            <div class="slick">
               <div class="row">
               <?php while ($customer = mysqli_fetch_array($customersres)) { ?>
                  <div class="col-lg-5 col-md-5">
                     <div class="slider-nav pb-3">
                        <div class="testimonial-circle-img">
                           <img src="images/customers/<?php echo $customer['customersImage'];?>">						
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7">
                     <div class="slider-for">
                        <div class="testimonial-content">
                           <?php echo $customer['customersMessage'];?>
                           <div class="customer-name-wrap pt-5">
                              <h4><?php echo $customer['customersName'];?></h4>
                              <p><?php echo $customer['customersPlace']; ?></p>
                           </div>
                        </div>
                       
                     </div>
                  </div>
                  <?php } ?> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======= testimonial section end ===== -->
<!-- ======== small background-image  start ====== -->
<div class="section-img-bg text-center" style="background-image: url('images/i5.png');">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="back-title pt-5 pb-5">
               <h4 class="pt-3"><?php echo $settings['stakeHeading']; ?></h4>
               <?php echo $settings['stakeMessage'];?>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ======== small background-image  end ====== -->
<!-- ======= partners section start ========= -->
<div class="container mt-3 partners-wrapper">
   <div class="slick">
      <div class="row">
         <div class="col-12">
            <div class="partners">
               <?php 
               while ($partner = mysqli_fetch_array($partnersres)) {
                  ?>        
               <div class="partner-img">
                  <img src="images/Partners/<?php echo $partner['partnersImage'];?>">
               </div>
               <?php } ?>   
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ========= partners section end =========== -->
  <?php include 'digamberfooter.php'; ?>