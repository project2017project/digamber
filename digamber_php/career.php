<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back csr-banner" style="background-image: url('../images/carrer-banner-1.jpg');">
    <div class="container my-1">
        <div class="row">
            <div class="col-lg-6  col-md-6 pt-4 pb-2 text-banner-wrap" data-aos="fade-down">
                <div class="p-5 mt-5">
                    <h4 class="display-4 career-ban-text">Become a <br> Change-maker. </h4>
                    <p class="lead career-p-text pb-5">The Right People Make the Journey Memorable. </p>
                    <a href="#" class="animte-arrow">
                        <img src="../images/banner-icon-slide-1-color.png" class="animte-1-wrap"><img
                            src="../images/banner-icon-slide-1-color.png" class="animte-2-wrap"><img
                            src="../images/banner-icon-slide-1-color.png" class="animte-3-wrap">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========= banner end ======= -->
<!-- ======= career text content start === -->
<div class="container product-p-text-content job-openings-wrap pt-5 pb-5">
    <p class="text-center pt-4">Our employees are our backbone and the most valuable assets that help us to empower
        India from its roots. We believe that our success lies in our ability to attract, develop, and retain the right
        people. Digamber Finance is built on the pillars of diversity, collaboration, and innovation that motivate
        employees to challenge themselves and grow while balancing both their work and life.</p>
    <div class="row tabs-career pt-4">
        <div class="col-12">
            <div class="tabs-wrap pt-4" id="joinus-click-enquiry">
                <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jobs"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Job
                            Openings</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#enquire"
                            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Enquire
                            Now</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tabs-career-content">
        <!-- <div class="col-12"> -->
        <div class="jobs-carrer mt-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane active " id="jobs">
                    <div class="row inner-content-row-wrapper">
					<?php while ($job = mysqli_fetch_array($jobres)) { ?>
                        <div class="col-lg-4 mb-3">
                            <div class="jobs-role-inner">
                                <div class="jobs-content">
                                    <div class="role-header">
                                        <h4><strong>Role:</strong> <?php echo $job['jobRole'];?></h4>
                                    </div>
                                    <div class="role-content">
                                        <ul>
                                            <li><strong>Location:</strong> <?php echo $job['jobLocation'];?></li>
                                            <li><strong>Department:</strong> <?php echo $job['jobDepartment'];?></li>
                                            <li><strong>Experience:</strong> <?php echo $job['jobExperience'];?></li>
                                        </ul>
                                    </div>
                                    <div class="jobs-know-btn">
                                        <a href="javascript:void(0)" class="btn">Know More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="tab-pane" id="enquire">
                    <div class="enquire-form-wrap">
                        <form action="enquiryAction.php" method="post" enctype="multipart/form-data">
                            <div class="row padding-b-wrap">
                                <div class="col-md-4 mb-4">
                                    <select class="form-select" name="gender">
                                        <option selected>select</option>
                                        <option value="Mr">Mr.</option>
                                        <option value="Mrs">Mrs.</option>
                                        <option value="Ms">Ms.</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="text" class="form-control" placeholder="Full name" name="fullname">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="number" class="form-control" placeholder="Contact No." name="contactNumber">
                                </div>
                            </div>
                            <div class="row padding-b-wrap">
                                <div class="col-md-4 mb-4">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="text" class="form-control" placeholder="Current Role" name="currentRole">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="text" class="form-control" placeholder="Total Experience" name="totalExp">
                                </div>
                            </div>
                            <div class="row padding-b-wrap">
                                <div class="col-md-4 mb-4">
                                    <div class="padding-b-wrap mb-4">
                                        <input type="text" class="form-control" placeholder="Previous Comapny" name="previousExp">
                                    </div>
                                    <input type="file" class="form-control" placeholder="Browse" name="uploadfile">
                                </div>
                                <div class="col-md-8 mb-4">
                                    <textarea class="form-control" placeholder="Message" name="message" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row padding-b-wrap">
                                <div class="col-12 form-submit-btn-wrap">
									<input type="submit" class="btn" value="Enquiry Now" name="enquiryNow">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 	</div> -->
    </div>
</div>
<!-- ======= career text content end === -->
<!-- ====== why digamber finance section start ==== -->
<div class="working-pattern-wrapper why-digamber-wrap pt-5 pb-5">
    <div class="container">
        <div class="board-title text-center pt-4 pb-4">
            <h1>Why Digamber Finance?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
        </div>
        <div class="row mt-5">
			<?php while ($finance = mysqli_fetch_array($financeres)) { ?>
            <div class="col-lg-4 col-md-6 pb-5 mb-4">
                <div class="why-diga-inner-box-wrap">
                    <div class="why-icon-box">
                        <img src="../images/finance/<?php echo $finance['financeImage']; ?>">
                    </div>
                    <div class="why-title">
                        <h4><?php echo $finance['financeName']; ?></h4>
                        <?php echo $finance['financeMessage']; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ====== why digamber finance section end ==== -->
<!-- ==== celebrating section start ===== -->
<div class="container celebrating-wrapper pt-5 pb-5" id="life-at">
    <div class="board-title text-center pt-3 pb-3">
        <h1>Celebrating Life at Digamber Finance</h1>
    </div>
    <div class="row tabs-career pt-4">
        <div class="col-12">
            <div class="tabs-wrap pt-4">
                <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#innovation"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Celebrate
                            Innovation</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#life"
                            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Celebrate
                            Life</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="celebrating-main-row">
        <!-- <div class="col-12"> -->
        <div class="jobs-carrer mt-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane active " id="innovation">
                    <div class="row cele-contant-part-row">
                        <div class="col-lg-6">
                            <div class="slick">
                                <div class="single-innovation-item inno-candidate-slide-wrap">
                                    <div class="innovation-img">
                                        <img src="../images/AUM 1000Cr_1.JPG">
                                        <figcaption>1000 Cr Celebrate</figcaption>
                                    </div>
                                    <div class="innovation-img">
                                        <img src="../images/AUM 1000Cr_2.JPG">
                                        <figcaption>1000 Cr Celebrate</figcaption>
                                    </div>
                                    <div class="innovation-img">
                                        <img src="../images/AUM 1000Cr_3.JPG">
                                        <figcaption>1000 Cr Celebrate</figcaption>
                                    </div>
                                    <div class="innovation-img">
                                        <img src="../images/AUM 1000Cr_4.JPG">
                                        <figcaption>1000 Cr cake Cutting</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inno-candidate-contant-wrap">
                                <div class="celebrating-content-wrap">
                                    <h1>Celebrate Innovation</h1>
                                    <p>Life at Digamber Finance is all about people who believe in making beautiful
                                        changes with meaningful involvement. This mantra sets the foundation for people
                                        to give back to the community and make a positive impact on millions of lives.
                                        We believe in empowering our employees with resources, workshops and upskilling
                                        training that nurture them and fuel their passion to serve the community better
                                        everyday! After all, it is they who bring the vision of our company into
                                        reality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="life">
                    <div class="row cele-contant-part-row">
                        <div class="col-lg-6">
                            <div class="slick">
                                <div class="single-innovation-item inno-candidate-slide-wrap">
                                    <div class="innovation-img">
                                        <img src="../images/Corporate Event at Digamber Finance.jpg">
                                        <figcaption>Corporate Event at Digamber Finance</figcaption>
                                    </div>
                                    <div class="innovation-img">
                                        <img src="../images/Lenders Meet 1.jpg">
                                        <figcaption>Lenders Meet</figcaption>
                                    </div>
                                    <div class="innovation-img">
                                        <img src="../images/Lenders Meet 2.jpg">
                                        <figcaption>Lenders Meet</figcaption>
                                    </div>
                                    <div class="innovation-img">
                                        <img src="../images/Lenders Meet 1.jpg">
                                        <figcaption>Lenders Meet</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inno-candidate-contant-wrap">
                                <div class="celebrating-content-wrap">
                                    <h1>Celebrate Life</h1>
                                    <p>All work and no play make everyone dull, and we at Digamber Finance work actively
                                        towards inculcating the spirit of healthy competition and teamwork. With teams
                                        from celebrating employees’ notable moments to celebrating festivals, we make
                                        our bonds stronger with every occasion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>
<!-- ==== celebrating section end ===== -->
<!-- ==== employer section start ===== -->
<div class="journey-back-wrap mt-3 mb-3" style="background-image: url('../images/empty-employer.jpg');" id="emp-corner">
    <div class="annual-report-wrap employee-wrapper pt-5 pb-5 ">
        <div class="journey-title text-center pt-4 pb-4">
            <h1>Employee Corner</h1>
        </div>
        <div class="container employee-cont-wrap pb-5 mb-3">
            <div class="emp-full-inner-wrap slick">
                <div class="row single-corner-slide">
					<?php while ($testinomial = mysqli_fetch_array($testinomialres)) { ?>
                    <div class="col-12 corner-reapet-wrap">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="employee-image-wrap">
                                    <img src="../images/testinomial/<?php echo $testinomial['testinomialImage']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="employee-feed-text">
                                    <div class="employee-text-content-inner">
										<?php echo $testinomial['testinomialMessage']; ?>
                                        <h4><?php echo $testinomial['testinomialName']; ?></h4>
                                    </div>
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
<!-- ==== employer section start ===== -->
<!-- ===== join us start ====== -->
<div class="container join-us-wrap pt-5 pb-5">
    <div class="row">
        <div class="col-12 text-center lets-content">
            <h5>Let's work <strong>together!</strong></h5>
            <div class="join-btn-wrap pt-4">
                <a href="#joinus-click-enquiry" class="btn">Join us</a>
            </div>
        </div>
    </div>
</div>
<!-- ===== join us end ====== -->
<!-- ======= footer start ========== -->
<?php include 'digamberfooter.php';?>