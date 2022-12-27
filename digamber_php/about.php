<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ===== Top Head  End ==== -->
<!-- ======== banner about start ===== -->
<div class="container about-main-wrapper pt-4 pb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 pt-3 pb-3">
            <div class="new-abo-content pr-3 pt-3">
                <h3><?php echo $aboutsettings['aboutHeading'];?></h3>
                <p class="ext-pragraph-sty"><?php echo $aboutsettings['aboutMessage']; ?></p>
                <div class="about-new-btn">
                    <a href="javascript:void(0)" class="about-readmore-btn-click">Click Here To Read More
                        <img src="../images/d-logo-cut-2.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 pt-3 pb-3">
            <div class="new-abo-image mb-4">
                <img src="../images/about/<?php echo $aboutsettings['aboutImage']; ?>">
            </div>
        </div>
    </div>
</div>
<!-- ========= banner about end ======= -->
<!-- ======  vision mission section start ==== -->
<section class="mission-wrapper pt-3 pb-3">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="mission-vision-images">
                    <img src="../images/about/<?php echo $aboutsettings['loanImage1']; ?>">
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="mission-vision-content">
                    <h2><?php echo $aboutsettings['loanHeading']; ?></h2>
                    <p><?php echo $aboutsettings['loanSubHeading']; ?></p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 pt-5">
                <div class="mission-vision-images">
                    <img src="../images/about/<?php echo $aboutsettings['loanImage2']; ?>">
                </div>
            </div>
            <div class="col-lg-10 col-md-10 pt-5">
                <div class="mission-vision-content">
                    <h2><?php echo $aboutsettings['loanHeading2']; ?></h2>
                    <?php echo $aboutsettings['loanMessage2']; ?>
                </div>
            </div>
            <div class="about-new-btn about-white-wrap">
                <a href="javascript:void(0)" class="mission-vision-click">Click Here To Read More
                    <img src="../images/white-de.png">
                </a>
            </div>
        </div>
        <div class="row culture-main-wrapper mt-5 pt-5 pb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4 cul-dot-left">
                        
                    <?php 
                    $i=0;
                    while ($culturevalue = mysqli_fetch_array($culturevalueres)) { ?>
                        <div class="culture-content-wrap">
                            <div class="head-content">
                                <a href="javascript:void(0)" class="culture-click">
                                    <h3><?php echo $culturevalue['name'];?></h3>
                                </a>
                            </div>
                            <div class="icon-box">
                                <img src="../images/culturevalue/<?php echo $culturevalue['image'];?>">
                            </div>
                        </div>
                        <?php
                            if ($i == 2){
                        ?>
                        </div>
                        <div class="col-md-4 cul-dot-left">
                        <div class="culture-circle-new-wrap">
                            <h4>Culture & Values</h4>
                            <div class="yellow-dot-left">
                                <div class="dot-top"></div>
                                <div class="dot-middle"></div>
                                <div class="dot-bottom"></div>
                            </div>
                            <div class="yellow-dot-right">
                                <div class="dot-top"></div>
                                <div class="dot-middle"></div>
                                <div class="dot-bottom"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cul-dot-left">
                        <?php
                            }
                            $i++;
                         } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======  vision mission section end ==== -->
<!-- ====== Our Presence start ======= -->
<div class="container map-main-wrapper pt-5 pb-5">
    <div class="board-title text-left pt-3 pb-3">
        <h1>Our Presence</h1>
    </div>
    <div class="row">
        <div class="col-12 map-inner-main">
            <div class="map-wrap">
                <img src="../images/map-trans1.png" width="630" height="630" usemap="#powerpuffgirls" alt="" />
                <map name="powerpuffgirls">
                    <?php while ($map1 = mysqli_fetch_array($mapres1)) { ?>
                    <area shape="poly"
                        coords="<?php echo $map1['coordinates'];?>"
                        id="<?php echo $map1['location'];?>" href="javascript:void(0)" />
                    <?php } ?>
                </map>
            </div>
            <?php while ($map = mysqli_fetch_array($mapres)) { ?>
            <div class="<?php echo $map['location'];?>" style="display: none;">
                <div class="track-image">
                    <i><img src="../images/location-map.png"></i>
                </div>
                <div class="state-name">
                    <p> 
                        <i class="fa-solid fa-location-dot"></i><?php echo $map['stateName'];?><br>
                        <i class="fa-solid fa-building"></i>No. Of Branches <?php echo $map['branches'];?> <br>
                        <i class="fa-solid fa-dollar-sign"></i>Total portfolio (cr) <?php echo $map['portfolio'];?><br>
                        <i class="fa-solid fa-person"></i> Active Member <?php echo $map['members'];?> 
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ==== Our Presence end ========= -->
<!-- ===== journey section start ====== -->
<div class="journey-back-wrap" style="background-image: url('../images/white-world-final.jpg');">
    <div class="container journey-inner pt-5 pb-5">
        <div class="journey-title text-center pt-5">
            <h1>Our Jounery</h1>
        </div>
        <div class="slick">
            <div class="journey-main-slide autoplay">
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2019</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>September, 2019</h5>
                            <p>AUM cross 5000 Mm in September, 2019</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-arrow-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2020</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>December, 2020</h5>
                            <p>AUM cross 5000 Mm in September, 2020</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-arrow-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2021</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>March, 2021</h5>
                            <p>AUM cross 5000 Mm in September, 2021</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-arrow-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2022</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>March, 2022</h5>
                            <p>AUM cross 5000 Mm in September, 2022</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-set-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2023</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>April, 2023</h5>
                            <p>AUM cross 5000 Mm in September, 2023</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-bas-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2024</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>April, 2024</h5>
                            <p>AUM cross 5000 Mm in September, 2024</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-bas-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2025</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>April, 2025</h5>
                            <p>AUM cross 5000 Mm in September, 2025</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-bas-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2026</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>April, 2026</h5>
                            <p>AUM cross 5000 Mm in September, 2026</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-bas-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2027</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>April, 2027</h5>
                            <p>AUM cross 5000 Mm in September, 2027</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-bas-2n.png">
                        </div>
                    </div>
                </div>
                <div class="year-timline-wrap">
                    <div class="time-btn-wrap">2028</div>
                    <div class="time-content">
                        <div class="head-content">
                            <h5>April, 2028</h5>
                            <p>AUM cross 5000 Mm in September, 2028</p>
                        </div>
                    </div>
                    <div class="time-icon">
                        <div class="icon-border">
                            <img src="../images/jr-bas-2n.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===== journey section end ====== -->
<!-- ====== board section start ======= -->
<section class=" board-main-wrapper">
    <div class="container pt-5 pb-5 text-center">
        <div class="board-title text-center pt-3 pb-3">
            <h1>Leadership</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt </p>
        </div>
        <div class="row tabs-career">
            <div class="col-12">
                <div class="tabs-wrap pt-3" id="joinus-click-enquiry">
                    <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#directors" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Board Of Directors</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#management"
                                type="button" role="tab" aria-controls="profile-tab-pane"
                                aria-selected="false">Management Team</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tabs-career-content">
            <div class="jobs-carrer mt-5">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active " id="directors">
                        <div class="row management-center-wrap">                            
                        <?php while ($directors = mysqli_fetch_array($directorsres)) { ?>
                            <div class="col-lg-2 col-md-4 pb-4">
                                <div class="board-candidate-wrap">
                                    <div class="candidate-image">
                                        <img src="../images/directors/<?php echo $directors['image'];?>">
                                    </div>
                                    <div class="candidate-name pt-3 pb-2">
                                        <a href="javascript:void(0)" class="name-click">
                                            <h5><?php echo $directors['name'];?></h5>
                                        </a>
                                        <p><?php echo $directors['designation'];?></p>
                                    </div>
                                </div>
                            </div>                            
                        <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="management">
                        <div class="row management-center-wrap">
                        <?php while ($teams = mysqli_fetch_array($teamsres)) { ?>
                            <div class="col-lg-2 col-md-4 pb-4">
                                <div class="board-candidate-wrap">
                                    <div class="candidate-image">
                                    <img src="../images/teams/<?php echo $teams['image'];?>">
                                    </div>
                                    <div class="candidate-name pt-4 pb-2">
                                        <a href="javascript:void(0)" class="name-click">
                                            <h5><?php echo $teams['name'];?></h5>
                                        </a>
                                        <p><?php echo $teams['designation'];?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== board section end ======= -->
<script>
$(document).ready(function() {
    $(".name-click").click(function() {
        $(".board-candidate-wrapper").show();
    });
    $(".cross-popup-hide").click(function() {
        $(".board-candidate-wrapper").hide();
    });
});
$(document).ready(function() {
    $(".culture-click").click(function() {
        $(".culture-popup-wrapper").show();
    });
    $(".cross-popup-hide").click(function() {
        $(".culture-popup-wrapper").hide();
    });
});
</script>
<script>
$('.partners').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});
</script>
<script>
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    centerPadding: 0,
    focusOnSelect: true
});
</script>
<script>
$('.autoplay').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 1300,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
</script>
<script>
$(document).ready(function() {
    $('ul li a').click(function() {
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
});
</script>
<script>
$(document).keydown(function(event) {
    if (event.keyCode == 27) {
        $('.same-digamber-popup').hide();
    }
});
</script>
<?php include 'digamberfooter.php';?>