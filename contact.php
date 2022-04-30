<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="MANTRATECH & SERVICES PVT. LTD.">
    <meta name="keywords" content="chemical, company, construction, engineering, factory, gas, industrial, industry, laboratory, manufacture, mechanical, mining, oil, pharmaceutical, refinery">
    <meta name="author" content="MANTRATECH & SERVICES PVT. LTD.">
    <title>CONTACT US | MANTRATECH & SERVICES PVT. LTD.</title>
    <!-- mobile responsive meta -->
    <?php
    include 'head.php';
    ?>
</head>

<body class="_active-preloader-ovh">
    <div class="preloader">
        <div class="spinner"></div>
    </div> <!-- /.preloader -->
    <div class="page-wrapper">
        <?php
        include 'header-others.php'
        ?>
        <div class="inner-banner">
            <div class="container">
                <h3>Contact Us</h3>
                <ul class="breadcumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                    <li><span>Contact Us</span></li>
                </ul><!-- /.breadcumb -->
            </div><!-- /.container -->
        </div><!-- /.inner-banner -->

        <section class="contact-page sec-pad">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Get in <span>touch</span></h3>
                    <p>Start your journey towards Wastewater treatment.</p>
                </div><!-- /.sec-title text-center -->
                <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14390.005106718021!2d85.1101698!3d25.6214835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe440dde249f1e206!2sMantratech%20and%20Services%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1650780957036!5m2!1sen!2sin" width="98%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <form action="#" class="contact-form" id="contact-form">
                            <h3>Send Mail</h3>
                            <input type="hidden" name="send-contact-mail" />
                            <input type="text" placeholder="Your name.." name="name" />
                            <input type="text" placeholder="Your email address.." name="email" />
                            <input type="text" placeholder="Your subject.." name="subject" />
                            <textarea placeholder="Write..." name="message"></textarea>
                            <button type="submit" class="hvr-sweep-to-right submit-btn">Send</button>
                            <div id="form-message-success text-success" style="display:none;" class="mb-4">
                                Your message was sent, thank you!
                            </div>
                            <div id="form-message-danger text-dandger" style="display:none;" class="mb-4">
                                Something went wrong!, please try again.
                            </div>
                        </form>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-page -->

        <section class="feature-style-one">
            <div class="container">
                <div class="clearfix">
                    <div class="col-md-4">
                        <div class="single-feature-style-one">
                            <div class="icon-box">
                                <i class="industrio-icon-innovation"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>Creative Ideas</h3>
                                <p style="margin-bottom: 39px;">An idea that improves the quality of water to make it appropriate for a specific end-use. </p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-feature-style-one -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-feature-style-one light">
                            <div class="icon-box">
                                <i class="industrio-icon-secure-shield"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>Super Safety</h3>
                                <p style="margin-bottom: 39px;"> We develop workplace that is super safe and and obey health policy Rules. </p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-feature-style-one -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-feature-style-one light">
                            <div class="icon-box">
                                <i class="industrio-icon-support"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>24/7 Support</h3>
                                <p> 24/7 support means we are ready to help you any time, Get solution as soon as they come up. </p>
                                <p class="h6" style="font-size: 20px;"><a href="tel:+918210826686">821-082-6686</a></p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-feature-style-one -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-style-one -->

        <?php
        include 'get-in-touch.php'
        ?>

    </div><!-- /.page-wrapper -->

    <?php
    include "footer.php";
    include "foot.php";
    ?>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <!-- google map helper -->
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>

    <script>
        $("#contact-form").submit(function(event) {
            event.preventDefault();
            $(".submit-btn").html("<i class=`fa fa-circle-notch fa-spin`></i> Please wait...");
            $('#form-message-success').hide();
            $('#form-message-danger').hide();
            var formValues = $(this).serialize();
            $.post("mail", formValues, function(data) {
                $(".submit-btn").html("Submit");
                if (data) {
                    $('#form-message-success').show();
                    $("#contactForm")[0].reset();
                } else {
                    $('#form-message-danger').show();
                }
            });
        });
    </script>

</body>

</html>