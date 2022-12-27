<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back csr-banner" style="background-image: url('../images/CSR_Banner/<?php echo $csrsettings['bannerImage']; ?>');">
    <div class="container my-1">
        <div class="row">
            <div class="col-lg-5  col-md-5 pt-4 pb-2 text-banner-wrap" data-aos="fade-down">
                <div class="p-5 mt-5">
                    <h4 class="display-4"><?php echo $csrsettings['bannerHeading']; ?></h4>
                    <p class="lead pb-5"><?php echo $csrsettings['bannerSubHeading']; ?></p>
                    <a href="#" class="animte-arrow">
                        <img src="../images/banner-icon-slide-1.png" class="animte-1-wrap">
						<img src="../images/banner-icon-slide-1.png" class="animte-2-wrap">
						<img src="../images/banner-icon-slide-1.png" class="animte-3-wrap">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========= banner end ======= -->
<!-- ======= csr text content start === -->
<div class="container product-p-text-content pt-5 pb-5">
    <div class="row">
        <div class="col-12 pt-1">
        <?php echo $csrsettings['aboutMessage']; ?>
        </div>
    </div>
</div>
<!-- ======= csr text content end === -->
<!-- ====== committee section start ======= -->
<section class=" board-main-wrapper">
    <div class="container pt-5 pb-5 text-center">
        <div class="board-title text-center pt-3 pb-3">
        <h1><?php echo $csrsettings['aboutHeading']; ?></h1>
        </div>
        <div class="row pt-4">

        <?php while ($committees = mysqli_fetch_array($committeesres)) { ?>
            <div class="col-lg-3 col-md-6 pb-4">
                <div class="board-candidate-wrap">
                    <div class="candidate-image">
                        <img src="../images/committees/<?php echo $committees['image'];?>">
                    </div>
                    <div class="candidate-name pt-4 pb-2">
                        <a href="javascript:void(0)" class="name-click">
                            <h5><?php echo $committees['name'];?></h5>
                        </a>
                        <p><?php echo $committees['designation'];?></p>
                    </div>
                </div>
            </div>
           <?php } ?>
            
            
        </div>
    </div>
</section>
<!-- ====== committee section end ======= -->
<!-- ===== csr project start ====== -->
<div class="container csr project-wrap pt-5 pb-5">
    <div class="board-title our-leader text-center pt-3 pb-3">
        <h1><?php echo $csrsettings['loanHeading']; ?></h1>
        <p><?php echo $csrsettings['loanSubHeading']; ?></p>
    </div>
    <div class="row">
        <?php while ($projectdetails = mysqli_fetch_array($projectdetailsres)) { ?>
        <div class="col-lg-4 col-md-6">
            <div class="cse-details-inner">
                <h4><?php echo $projectdetails['projectdetailsName'];?></h4>
                <div class="csr-../images pt-3 pb-4">
                    <img src="../images/projectdetails/<?php echo $projectdetails['projectdetailsImage'];?>">
                    <div class="csr-btn">
                        <a href="javascript:void(0)" class="btn btn-danger">Know More...</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="total-project-wrap pt-5 pb-2">
            <h3><?php echo $csrsettings['loanHeading1']; ?></h3>
        </div>
    </div>
</div>
<!-- ===== csr project end ====== -->
<!-- ===== key Report  start ====== -->
<div class="committees-back-wrap" style="background-image: url('../images/DF Website_background-2.jpg');">
    <div class="annual-report-wrap pt-5 pb-5 " id="annual-section">
        <div class="committees-title text-center pt-2 pb-3">
            <h1><?php echo $investors[22][1];?></h1>
        </div>
        <div class="container pb-5">
            <div class="row pb-3">
                <div class="annual-wrapper">
                    <ul class="annual-reports-ul">
					<?php echo $investors[22][3];?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===== key Report  end ====== -->
<div class="blank-csr-div"></div>
<!-- ======= footer start ========== -->
<?php include 'digamberfooter.php';?>