<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="section-2 pt-4 pb-4">
    <div class="container my-1">
        <div class="row">
            <div class="col-lg-5  col-md-5 text-banner-wrap product-text" data-aos="fade-down">
                <div class="p-5 mt-5">
                    <h4 class="display-4"><?php echo $settings2['bannerHeading']; ?></h4>
                    <p class="lead pb-3"><?php echo $settings2['bannerSubHeading']; ?> </p>
                    <a href="#" class="animte-arrow">
                        <img src="../images/banner-icon-slide-1.png" class="animte-1-wrap">
						<img src="../images/banner-icon-slide-1.png" class="animte-2-wrap">
						<img src="../images/banner-icon-slide-1.png" class="animte-3-wrap">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 banner-side-wrap" data-aos="fade-up">
                <div class="p-2 space-wrap">
                    <img class="" src="../images/Home_Banner/<?php echo $settings2['bannerImage']; ?>" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========= banner end ======= -->


<!-- ======= product text content start === -->
<div class="container product-p-text-content pt-5 pb-5">
    <div class="row">
        <div class="col-12 pt-1"><?php echo $settings2['aboutMessage']; ?></div>
    </div>
</div>
<!-- ======= product text content end === -->
<!-- ===== product loan start ====== -->
<section class="loans-new-wrapper pt-3">
    <div class="container pt-5 pb-5">
        <div class="row loans-top-row">
            <div class="col-lg-6 col-md-6 loans-new-back-img" style="background-image:url('../images/Home_Loan/<?php echo $settings2['loanImage1']; ?>');">
            </div>
            <div class="col-lg-6 col-md-6 micro-content-wrap">
                <div class="micro-new-content">
					<h4><?php echo $settings2['loanHeading1']; ?></h4>
				<?php echo $settings2['loanMessage1']; ?>
                    <div class="micro-new-btn">
                        <a href="javascript:void(0)" class="productloan1-readmore-btn-click">Explore
                            <img src="../images/d-logo-cut-2.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row loans-next-row pb-4">
            <div class="col-lg-6 col-md-6 retail-content-wrap">
                <div class="micro-new-content second">
				<h4><?php echo $settings2['loanHeading2']; ?></h4>
               <?php echo $settings2['loanMessage2']; ?>
                    <div class="micro-new-btn">
                        <a href="javascript:void(0)" class="productloan2-readmore-btn-click">Explore<img src="../images/d-logo-cut-2.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 loans-new-back-img" style="background-image:url('../images/Home_Loan/<?php echo $settings['loanImage2']; ?>');">
            </div>
        </div>
    </div>
</section>
<!-- ===== product loan end ====== -->


<!-- ==== product table start ======  -->
<div class="journey-back-wrap" style="background-image: url('../images/DF Website_background-2.jpg');">
    <div class="product-table-wrap pt-4 pb-5">
        <div class="container table-responsive py-5">
            <div class="fixed-height-wrap">
                <table class="table table-bordered roundedTable table-hover">
                    <thead class="thead-lignt">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">JLG Loan</th>
                            <th scope="col">IML Loan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($loans = mysqli_fetch_array($loansres)) { ?>
                        <tr>
                            <th scope="row"><?php echo $loans['loansName']; ?></th>
                            <td><?php echo $loans['JLGLoan']; ?></td>
                            <td><?php echo $loans['IMLLoan']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="about-new-btn float-wrap">
                <a href="javascript:void(0)" id="show-table">Click Here To Read More<img src="../images/white-de.png"></a>
            </div>
        </div>
    </div>
</div>
<!-- ==== product table end ======  -->
<!-- ==== working pattern start ===== -->
<div class="container working-pattern-wrapper pt-5 pb-5">
    <div class="board-title text-center pt-4 pb-4">
        <h1><?php echo $settings2['stakeHeading']; ?></h1>
    </div>
    <div class="row mt-5">
		<?php while ($pictorial = mysqli_fetch_array($pictorialres)) { ?>
		<div class="col-lg-3 col-md-6 same-picto-wrapper mb-4">
            <div class="pattern-list-wrap">
                <div class="picto-icon-wrap">
				<img src="../../images/pictorial/<?php echo $pictorial['pictorialImage'];?>">
                </div>
                <div class="patt-title">
                    <h5><?php echo $pictorial['pictorialName'];?></h5>
                    <?php echo $pictorial['pictorialMessage'];?>
                </div>
                <div class="working-btn">
                    <a href="<?php echo $pictorial['pictorialPlace']; ?>">Read More....</a>
                </div>
            </div>
        </div>
		<?php } ?>	
    </div>
</div>

<!-- ==== working pattern end ===== -->


<?php include 'digamberfooter.php'; ?>