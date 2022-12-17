<!-- ======= footer start ========== -->
<section class="footer mt-3">
    <div class="container pt-5 pb-5">
        <div class="row pt-5 pb-4">
            <div class="col-lg-5 col-md-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-about-content">
                            <h5>About Us</h5>
                            <ul>
                                <li><a href="organisation.php">Orgisation</a></li>
                                <li><a href="board.php">Board of Directors</a></li>
                                <li><a href="mangament.php">Management</a></li>
                                <li><a href="technology.php">Technology</a></li>
                                <li><a href="achievements.php">Achievements</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-about-content">
                            <h5>Investor</h5>
                            <ul>
                                <li><a href="#">AGM/EGM</a></li>
                                <li><a href="#">Code & Policies</a></li>
                                <li><a href="#">Notice & Accouncements</a></li>
                                <li><a href="#">Financial Information</a></li>
                                <li><a href="#">Credit Rating</a></li>
                                <li><a href="#">Amount Reports</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer-about-content">
                    <h5>News</h5>
                    <ul>
                        <li><a href="#">Currents Updates</a></li>
                        <li><a href="#">Success Stories</a></li>
                        <li><a href="#">Corporate Social Responsibility</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-about-content">
                            <h5>Important</h5>
                            <ul>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Gst Details</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Apply For Job</a></li>
                                <li><a href="#">PAY EMI</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-about-content">
                            <h5>Contact Us</h5>
                            <span>
                                Digamber Capfin Limited J54-55 Aanand Moti Himmat Nagar, Gopalpura Tonk Road Jaipur
                                302018<br>Ph-0141-2700233, 2700234
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= footer end ========== -->
<script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../vendor/slick/slick.min.js"></script>
<script src="../aos/aos.js"></script>
<script>
$(document).ready(function() {
    $(".readmore-btn-click").click(function() {
        $("#md-message").show();
    });
    $(".loan-readmore-btn-click").click(function() {
        $("#loan1").show();
    });
    $(".loan2-readmore-btn-click").click(function() {
        $("#loan2").show();
    });
    $(".productloan1-readmore-btn-click").click(function() {
        $("#productloan1").show();
    });
    $(".productloan2-readmore-btn-click").click(function() {
        $("#productloan2").show();
    });
    $(".cross-popup-hide").click(function() {
        $(".same-digamber-popup").hide();
    });
});
</script>
<script>
$('.partners').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {

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

    slidesToShow: 1,

    slidesToScroll: 1,

    dots: true,

    autoplay: true,

    autoplaySpeed: 2000,

    responsive: [

        {

            breakpoint: 991,

            settings: {

                slidesToShow: 1,

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
var a = 0;

$(window).scroll(function() {

    var oTop = $("#counter-box").offset().top - window.innerHeight;

    if (a == 0 && $(window).scrollTop() > oTop) {

        $(".counter").each(function() {

            var $this = $(this),

                countTo = $this.attr("data-number");

            $({

                countNum: $this.text()

            }).animate(

                {

                    countNum: countTo

                },



                {
                    duration: 4000,
                    easing: "swing",
                    step: function() {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    },
                    complete: function() {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    }
                }
            );
        });
        a = 1;
    }
});
</script>
<script>
$(document).keydown(function(event) {
    if (event.keyCode == 27) {
        $('.same-digamber-popup').hide();
    }
});
</script>
<script>
AOS.init();
</script>
</body>

</html>