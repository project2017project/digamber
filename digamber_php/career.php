<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back csr-banner" style="background-image: url('../images/career_Banner/<?php echo $careersettings['bannerImage']; ?>');">
    <div class="container my-1">
        <div class="row">
            <div class="col-lg-6  col-md-6 pt-4 pb-2 text-banner-wrap" data-aos="fade-down">
                <div class="p-5 mt-5">
                    <h4 class="display-4 career-ban-text"><?php echo $careersettings['bannerHeading']; ?></h4>
                    <p class="lead career-p-text pb-5"> <?php echo $careersettings['bannerSubHeading']; ?> </p>
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
    <p class="text-center pt-4"><?php echo $careersettings['aboutMessage']; ?></p>
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
                                    <div class="jobs-know-btn jobs-click-<?php echo $job['id'];?>">
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
            <h1><?php echo $careersettings['aboutHeading']; ?></h1>
            <p><?php echo $careersettings['loanHeading']; ?></p>
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
        <h1><?php echo $careersettings['loanSubHeading']; ?></h1>
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
                                    <?php while ($innovation = mysqli_fetch_array($innovationres)) { ?>
                                    <div class="innovation-img">
                                        <img src="../images/innovation/<?php echo $innovation['innovationImage'];?>">
                                        <figcaption><?php echo $innovation['innovationName'];?></figcaption>
                                    </div>
                                    <?php } ?>
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
                                    <?php while ($life = mysqli_fetch_array($liferes)) { ?>
                                    <div class="innovation-img">
                                        <img src="../images/life/<?php echo $life['lifeImage'];?>">
                                        <figcaption><?php echo $life['lifeName'];?></figcaption>
                                    </div>
                                    <?php } ?>
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
<?php while ($jobjs = mysqli_fetch_array($jobresjs)) { ?>
<script>
$(document).ready(function() {
    $(".jobs-click-<?php echo $jobjs['id'];?>").click(function() {
        $("#jobs-<?php echo $jobjs['id'];?>").show();
    });
});
</script>
<?php } ?>
<?php include 'digamberfooter.php';?>