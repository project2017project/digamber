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
      <h3 class="pt-4">At A Glance</h3>
      <p>Key Financial Highlights as on 31<sup>st</sup> Dec 2022</p>
      <div class="row pt-4 pb-4">
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box"  data-aos="flip-up">
            <div class="icon-box-wrap">
               <img src="images/DF Website_glance-1.png">
               <!-- <a href="#">
                  <i class="fa-solid fa-user"></i>
                  
                  </a> -->
            </div>
            <h5 class="counter" data-number="401652" ></h5>
            <span>No. Of Active Customer</span>
         </div>
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box" data-aos="flip-down">
            <div class="icon-box-wrap">
               <img src="images/DF Website_glance-2.png">
               <!-- <a href="#">
                  <i class="fa-sharp fa-solid fa-indian-rupee-sign"></i>
                  
                  </a> -->
            </div>
            <h5 class="counter" data-number="745.69"></h5>
            <span>Loan Disbursed (INR Crores)</span>
         </div>
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box" data-aos="flip-right">
            <div class="icon-box-wrap">
               <img src="images/DF Website_glance-3.png">
               <!-- <a href="#">
                  <i class="fa-brands fa-servicestack"></i>
                  
                  </a> -->
            </div>
            <h5 class="counter" data-number="8" ></h5>
            <span>No. of States</span>
         </div>
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box" data-aos="flip-left">
            <div class="icon-box-wrap">
               <img src="images/DF Website_glance-4.png">
               <!-- <a href="#">
                  <i class="fa-solid fa-user"></i>
                  
                  </a> -->
            </div>
            <h5 class="counter" data-number="1001.57" ></h5>
            <span>Gross AUM (INR Crores)</span>
         </div>
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box" data-aos="flip-up">
            <div class="icon-box-wrap">
               <img src="images/DF Website_glance-5.png">
               <!-- <a href="#">
                  <i class="fa-solid fa-building"></i>
                  
                  </a> -->
            </div>
            <h5 class="counter" data-number="183" ></h5>
            <span>No. of Branches</span>
         </div>
         <div class="col-lg-2 col-md-4 col-xs-6 col-sm-6 col-6" id="counter-box" data-aos="flip-down">
            <div class="icon-box-wrap">
               <img src="images/DF Website_glance-6.png">
               <!-- <a href="#">
                  <i class="fa-solid fa-user"></i>
                  
                  </a> -->
            </div>
            <h5 class="counter" data-number="2067" ></h5>
            <span>No. of Employees</span>
         </div>
      </div>
   </div>
</section>
<!-- ======== six-col-section-end ======= -->
<!-- ======= loans new section start ========= -->
<section class="loans-new-wrapper">
   <div class="container pt-4 pb-5">
      <div class="title-wrap pt-5 pb-4">
         <h4>Our Loans Are Designed For One Thing Your Business Need</h4>
         <p class="title-foot-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et.
         </p>
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
               <h4>Happy Customers</h4>
            </div>
            <div class="slick">
               <div class="row">
                  <div class="col-lg-5 col-md-5">
                     <div class="slider-nav pb-3">
                        <div class="testimonial-circle-img">
                           <img src="images/test-i3-new.jpg">						
                        </div>
                        <div class="testimonial-circle-img">
                           <img src="images/test-i3-new.jpg">						
                        </div>
                        <div class="testimonial-circle-img">
                           <img src="images/test-i3-new.jpg">						
                        </div>
                        <div class="testimonial-circle-img">
                           <img src="images/test-i3-new.jpg">						
                        </div>
                        <div class="testimonial-circle-img">
                           <img src="images/test-i3-new.jpg">						
                        </div>
                        <div class="testimonial-circle-img">
                           <img src="images/test-i3-new.jpg">						
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7">
                     <div class="slider-for">
                        <div class="testimonial-content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.>
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                           </p>
                           <div class="customer-name-wrap pt-5">
                              <h4>Seema Devi</h4>
                              <p>Jhunjhunu, Rajasthan</p>
                           </div>
                        </div>
                        <div class="testimonial-content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                           </p>
                           <div class="customer-name-wrap pt-5">
                              <h4>Seema Devi</h4>
                              <p>Jhunjhunu, Rajasthan</p>
                           </div>
                        </div>
                        <div class="testimonial-content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore	
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore	
                           </p>
                           <div class="customer-name-wrap pt-5">
                              <h4>Seema Devi</h4>
                              <p>Jhunjhunu, Rajasthan</p>
                           </div>
                        </div>
                        <div class="testimonial-content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut 
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore	
                           </p>
                           <div class="customer-name-wrap pt-5">
                              <h4>Seema Devi</h4>
                              <p>Jhunjhunu, Rajasthan</p>
                           </div>
                        </div>
                        <div class="testimonial-content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.>
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore	
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore	
                           </p>
                           <div class="customer-name-wrap pt-5">
                              <h4>Seema Devi</h4>
                              <p>Jhunjhunu, Rajasthan</p>
                           </div>
                        </div>
                        <div class="testimonial-content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident
                           </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore	
                           </p>
                           <div class="customer-name-wrap pt-5">
                              <h4>Seema Devi</h4>
                              <p>Jhunjhunu, Rajasthan</p>
                           </div>
                        </div>
                     </div>
                  </div>
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
               <h4 class="pt-3">stakeholders</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
               </p>
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
               <div class="partner-img">
                  <img src="images/sbi-1.png">
               </div>
               <div class="partner-img">
                  <img src="images/idfc-2.png">
               </div>
               <div class="partner-img">
                  <img src="images/ib-3.png">
               </div>
               <div class="partner-img">
                  <img src="images/ub-4.png">
               </div>
               <div class="partner-img">
                  <img src="images/sidbi-5.png">
               </div>
               <div class="partner-img">
                  <img src="images/bb-6.png">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ========= partners section end =========== -->
  <?php include 'digamberfooter.php'; ?>