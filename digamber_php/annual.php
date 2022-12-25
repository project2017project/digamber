<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back" style="background-image: url('../images/DF Website_background-2.jpg');"></section>
<!-- ========= banner end ======= -->
<!-- ===== annual Report  start ====== -->
<div class="annual-report-wrapper">
    <div class="annual-report-wrap pt-5 pb-5 ">
        <div class="journey-title text-center pt-2 pb-3">
            <h1><?php echo $investors[6][1];?></h1>
        </div>
        <div class="container pb-5">
            <div class="row tabs-career">
                <div class="col-12">
                    <div class="tabs-wrap pt-3 pb-3" id="joinus-click-enquiry">
                        <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#annual-report" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true"><?php echo $investors[6][6];?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#annual-return" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false"><?php echo $investors[7][6];?></button>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="tabs-career-content">
                <!-- <div class="col-12"> -->
                <div class="jobs-carrer mt-5">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active " id="annual-report">
                            <div class="row pb-3">

                                <div class="annual-wrapper">
                                    <ul class="annual-reports-ul">
										<?php echo $investors[6][3];?>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="annual-return">
                            <div class="row pb-3">

                                <div class="annual-wrapper">
                                    <ul class="annual-reports-ul">
										<?php echo $investors[7][3];?>
                                    </ul>

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
<?php include 'digamberfooter.php';?>