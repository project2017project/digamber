<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back" style="background-image: url('../images/DF Website_background-2.jpg');"></section>
<!-- ========= banner end ======= -->
<!-- ===== annual Report  start ====== -->
<div class="annual-report-wrapper">
    <div class="annual-report-wrap pt-5 pb-5 ">
        <div class="journey-title text-center pt-2 pb-3">
            <h1><?php echo $investors[0][1];?></h1>
        </div>
        <div class="container pb-5">
            <div class="row tabs-career">
                <div class="col-12">
                    <div class="tabs-wrap pt-3 pb-3" id="joinus-click-enquiry">
                        <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#results-financial" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true"><?php echo $investors[0][6];?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#notice-financial" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false"><?php echo $investors[1][6];?></button>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="financial-result-bar mt-4">
                        <div class="tab-content accordion" id="myTabContent">
                            <div class="financial-result-wrapper tab-pane fade show active accordion-item"
                                id="results-financial">
                                <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
                                    <?php echo $investors[0][3];?>
                                </div>
                            </div>
                            <div class="financial-result-wrapper tab-pane fade show accordion-item"
                                id="notice-financial">
                                <div class="border-wrap accordion-collapse collapse show" id="collapseOne">
								    <?php echo $investors[1][3];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ===== annual Report  end ====== -->
<!-- === credit rating start ======= -->
<section class="Credit-rating-wrap pt-1 pb-5" id="credit-section">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[2][1];?></h1>
    </div>
    <div class="container pb-5">
        <div class="row pb-3">
            <div class="annual-wrapper annual-reports-ul">
                <ul class="annual-reports-ul">
                    <?php echo $investors[2][3];?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- === credit rating end ======= -->
<!-- === director start ======= -->
<div class="director-ex-wrap" id="director-section">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[3][1];?></h1>
    </div>
    <div class="container pb-5">
        <div class="row pb-3">
            <div class="annual-wrapper">
                <ul class="annual-reports-ul codes">
                    <?php echo $investors[3][3];?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- === Director end ======= -->
<!-- === credit rating start ======= -->
<section class="Credit-rating-wrap pt-1 pb-5" id="credit-section">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[4][1];?></h1>
    </div>
    <div class="container pb-5">
        <div class="row pb-3">
            <div class="annual-wrapper">
                <ul class="annual-reports-ul">
                <?php echo $investors[4][3];?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- === credit rating end ======= -->
<!-- ====General Meating start ======== -->
<div class="container pt-5 pb-4" id="general-section">
    <div class="board-title text-center pt-3 pb-3">
        <h1><?php echo $investors[5][1];?></h1>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="financial-result-bar mb-4">
                <div class="financial-result-wrapper accordion-item">
                    <div class="border-wrap ">
                        <ul class="annual-reports-ul">
                        <?php echo $investors[5][3];?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ==== General Meating end ======== -->
<?php include 'digamberfooter.php';?>
