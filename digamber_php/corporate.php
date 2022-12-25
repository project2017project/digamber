<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back" style="background-image: url('../images/DF Website_background-2.jpg');"></section>
<!-- ========= banner end ======= -->
<!-- ====General Meating start ======== -->
<div class="container pt-5 pb-4" id="general-section">
    <div class="board-title text-center pt-3 pb-3">
        <h1><?php echo $investors[12][1];?></h1>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tabs-wrap pt-4">
                <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#general-22-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true"><?php echo $investors[12][6];?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#general-21-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false"><?php echo $investors[13][6];?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#general-20-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false"><?php echo $investors[14][6];?></button>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="financial-result-bar mt-5">
                <div class="tab-content accordion" id="myTabContent">
                    <div class="financial-result-wrapper tab-pane fade show active accordion-item"
                        id="general-22-tab-pane">
                        <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                            <ul class="annual-reports-ul">
							<?php echo $investors[12][3];?>
                            </ul>
                        </div>
                    </div>
                    <div class="financial-result-wrapper tab-pane fade show accordion-item" id="general-21-tab-pane">
                        <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
						<ul class="annual-reports-ul">
							<?php echo $investors[13][3];?>
                            </ul>
                        </div>
                    </div>
                    <div class="financial-result-wrapper tab-pane fade show accordion-item" id="general-20-tab-pane">
                        <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
						<ul class="annual-reports-ul">
							<?php echo $investors[14][3];?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ==== General Meating end ======== -->
<!-- === Corporate start ======= -->
<section class="Credit-rating-wrap mt-5 pt-1 pb-5" id="corporate-setion">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[15][1];?></h1>
    </div>
    <div class="container corporate-anno pb-5">
        <div class="row">
            <div class="col-12">
                <div class="tabs-wrap pt-4">
                    <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#rbi-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true"><?php echo $investors[15][6];?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#bse-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                aria-selected="false"><?php echo $investors[16][6];?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#debenture-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false"><?php echo $investors[17][6];?></button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="financial-result-bar mt-5">
                    <div class="tab-content accordion" id="myTabContent">
                        <div class="financial-result-wrapper tab-pane fade show active accordion-item"
                            id="rbi-tab-pane">
                            <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
							<?php echo $investors[15][3];?>
                            </div>
                        </div>
                        <div class="financial-result-wrapper tab-pane fade show accordion-item" id="bse-tab-pane">
                            <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                                <?php echo $investors[16][3];?>
                            </div>
                        </div>
                        <div class="financial-result-wrapper tab-pane fade show accordion-item" id="debenture-tab-pane">
                            <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                                <?php echo $investors[17][3];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- === Corporate end ======= -->
<!-- === director start ======= -->
<div class="director-ex-wrap" id="director-section">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[18][1];?></h1>
    </div>
    <div class="container pb-5">
        <div class="row pb-3">
            <div class="annual-wrapper">
                <ul class="annual-reports-ul codes">
				<?php echo $investors[18][3];?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- === Director end ======= -->
<!-- === Corporate start ======= -->
<section class="Credit-rating-wrap pt-1 pb-5" id="corporate-setion">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[19][1];?></h1>
    </div>
    <div class="container corporate-anno pb-5">
        <div class="row">
            <div class="col-12">
                <div class="tabs-wrap pt-4">
                    <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#rbi-22-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true"><?php echo $investors[19][6];?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#rbi-21-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false"><?php echo $investors[20][6];?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#rbi-20-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false"><?php echo $investors[21][6];?></button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="financial-result-bar mt-5">
                    <div class="tab-content accordion" id="myTabContent">
                        <div class="financial-result-wrapper tab-pane fade show active accordion-item"
                            id="rbi-22-tab-pane">
                            <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                                <ul class="annual-reports-ul">
								<?php echo $investors[19][3];?>
                                </ul>
                            </div>
                        </div>
                        <div class="financial-result-wrapper tab-pane fade show accordion-item" id="rbi-21-tab-pane">
                            <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                                <ul class="annual-reports-ul">
								<?php echo $investors[20][3];?>
                                </ul>
                            </div>
                        </div>
                        <div class="financial-result-wrapper tab-pane fade show accordion-item" id="rbi-20-tab-pane">
                            <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                                <ul class="annual-reports-ul">
								<?php echo $investors[21][3];?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- === Corporate end ======= -->
<!-- ======= footer start ========== -->
<?php include 'digamberfooter.php';?>