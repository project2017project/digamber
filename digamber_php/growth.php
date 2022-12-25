<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back" style="background-image: url('../images/DF Website_background-2.jpg');">

</section>
<!-- ========= banner end ======= -->
<!-- === Corporate start ======= -->
<section class="partners-wrapper pt-1 pb-5" id="corporate-setion">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[9][1];?></h1>
    </div>
    <div class="container corporate-anno pb-5">
        <div class="row">
            <div class="col-12">
                <div class="tabs-wrap">
                    <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#partners-investor" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true"><?php echo $investors[9][6];?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#partners-industries" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false"><?php echo $investors[10][6];?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#partners-colla" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false"><?php echo $investors[11][6];?></button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="partners-group mt-5">
                    <div class="tab-content accordion" id="myTabContent">
                        <div class="tab-pane fade show active accordion-item" id="partners-investor">
                            <div class="accordion-collapse collapse show" id="collapseOne">
                                <div class="row">
									<?php echo $investors[9][3];?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show accordion-item" id="partners-industries">
                            <div class="accordion-collapse collapse show" id="collapseOne">
                                <div class="row">
									<?php echo $investors[10][3];?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show accordion-item" id="partners-colla">
                            <div class="accordion-collapse collapse show" id="collapseOne">
							<div class="row">
									<?php echo $investors[11][3];?>
                                </div>
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
