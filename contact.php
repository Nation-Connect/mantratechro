<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="MANTRATECH & SERVICES PVT. LTD.">
    <meta name="keywords"
        content="chemical, company, construction, engineering, factory, gas, industrial, industry, laboratory, manufacture, mechanical, mining, oil, pharmaceutical, refinery">
    <meta name="author" content="MANTRATECH & SERVICES PVT. LTD.">
    <title>CONTACT US | MANTRATECH RO SYSTEM</title>
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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15258072.40570261!2d82.75252935!3d20.98801345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed564bf8a1d647%3A0xcc5c8e96d7e1d52b!2sJ356%2BM2Q%20Ram%20Raj%20Palace%2C%20Rupaspur%20Road%2C%20Murlichack%2C%20IAS%20Colony%2C%20Patna%2C%20Bihar%20801506!5e0!3m2!1sen!2sin!4v1656701309616!5m2!1sen!2sin"
                            width="98%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <div id="form-message-success" style="display:none;font-size:20px;margin-top:10px;"
                                class="mb-4 text-center text-success">
                                Your message was sent, Thank you!
                            </div>
                            <div id="form-message-danger" style="display:none;font-size:20px;margin-top:10px;"
                                class="mb-4 text-center text-danger">
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
                                <p style="margin-bottom: 39px;">An idea that improves the quality of water to make it
                                    appropriate for a specific end-use. </p>
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
                                <p style="margin-bottom: 39px;"> We develop workplace that is super safe and and obey
                                    health policy Rules. </p>
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
                                <p> 24/7 support means we are ready to help you any time, Get solution as soon as they
                                    come up. </p>
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
        $(".submit-btn").prop('disabled', true);
        $('#form-message-success').hide();
        $('#form-message-danger').hide();
        var formValues = $(this).serialize();
        $.post("mail", formValues, function(data) {
            $(".submit-btn").html("Submit");
            $(".submit-btn").prop('disabled', false);
            if (data) {
                $('#form-message-success').show().delay(5000).fadeOut(500);
                $("#contactForm")[0].reset();
            } else {
                $('#form-message-danger').show().delay(5000).fadeOut(500);
            }
        });
    });
    </script>

</body>

</html>