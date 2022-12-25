<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back" style="background-image: url('../images/DF Website_background-2.jpg');"></section>
<!-- ========= banner end ======= -->
<!-- === Code & Policies start ======= -->
<section class="Credit-rating-wrap pt-1 pb-5" id="code-section">
    <div class="board-title text-center pt-5 pb-4">
        <h1><?php echo $investors[8][1];?></h1>
    </div>
    <div class="container">
        <div class="row pb-3">

            <div class="annual-wrapper">
                <ul class="annual-reports-ul codes">
					<?php echo $investors[8][3];?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- === Code & Policies end ======= -->
<!-- ======= footer start ========== -->
<?php include 'digamberfooter.php';?>
