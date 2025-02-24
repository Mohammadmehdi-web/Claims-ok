<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Claims-Ok | Contact Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- back-to-top -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="assets/img/logo/loader/loader.png" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <?php
         include('header.php');
     ?>

    <main>

        <!-- breadcam-area-start -->
        <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position"
            data-background="assets/img/breadcrumb/01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb-content">
                            <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s"
                                data-wow-delay=".3s">Contact Us</h2>
                            <div class="tp-breadcrumb-list wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                                <span><a href="index.html">Home</a></span>
                                <span class="tp-breadcrumb-dvdr">-</span>
                                <span class="tp-breadcrumb-title-pre">Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcam-area-end -->

        <!-- tp-contact-item-area-start -->
        <div class="tp-contact-item-area pt-140 mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-50 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-contact-item-2 text-center">
                            <div class="tp-contact-icon mb-20">
                                <span><i class="flaticon-location"></i></span>
                            </div>
                            <div class="tp-contact-content">
                                <h4 class="tp-contact-title-3">Visit Our Place</h4>
                                <span><a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"
                                        target="_blank">88 New South Head Rd, Triple New York</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <div class="tp-contact-item-2 text-center">
                            <div class="tp-contact-icon mb-20">
                                <span><i class="flaticon-mail"></i></span>
                            </div>
                            <div class="tp-contact-content">
                                <h4 class="tp-contact-title-3">Contact Us</h4>
                                <span><a href="mailto:insurai@website.com">insurai@website.com </a></span>
                                <span><a href="tel:(602)76247296">+(602) 762 472 96</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-contact-item-2 text-center">
                            <div class="tp-contact-icon mb-20">
                                <span><i class="flaticon-clock-time"></i></span>
                            </div>
                            <div class="tp-contact-content">
                                <h4 class="tp-contact-title-3">Office Time</h4>
                                <span><a href="#">Five days 8:00 am - 5:00 pm Firday is closed</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-contact-item-area-end -->

        <!-- contact-form-area-start -->
        <div class="tp-contact-form-area pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-contact-form-2">
                            <h3 class="tp-contact-form-title-2 mb-40">Send your meassage</h3>
                            <form method="POST" action="save_contact.php" id="enquiryForm" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="text" placeholder="Enter your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="email" placeholder="Enter your email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="number" placeholder="Enter your Phone Number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-textarea">
                                            <select name="type" id="type">
                                                <option value="">--Select Query Type--</option>
                                                <option value="general">General Inquiry</option>
                                                <option value="insurance_plan">Insurance Plan</option>
                                                <option value="claim_support">Claim Support</option>
                                                <option value="others">Others</option>
                                            </select>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-10">
                                        <div class="tp-contact-single-textarea">
                                            
                                            <textarea type="text" placeholder="Write your message"
                                                name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="tp-contact-btn-2 lineheight-1">
                                        <button class="tp-btn tp-btn-green lineheight-1" type="submit"
                                            name="submit">Send Your Message</button>
                                        <p class="ajax-response"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-form-area-end -->

        <!-- map area start  -->
        <div class="tp-map-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-contact-map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1510540.0480819119!2d42.0385954955818!3d42.31536428549862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sbd!4v1714619203308!5m2!1sen!2sbd"
                                height="535" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- map area end  -->

    </main>

    <!-- footer-area-start -->
    <?php
         include('footer.php');
      ?>
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/jarallax.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('#enquiryForm').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: 'save_contact.php', 
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response == 'success') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully.',
                    }).then(function() {
                        
                        $('#enquiryForm')[0]
                    .reset(); 
                    });
                } else {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again later.',
                    });
                }
            },
            error: function() {
                
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong. Please try again later.',
                });
            }
        });
    });
});
</script>
</body>

</html>