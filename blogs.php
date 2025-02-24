<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Claims-Ok | Blogs</title>
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
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
         <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="assets/img/breadcrumb/01.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb-content">
                        <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">Our Blog</h2>
                        <div class="tp-breadcrumb-list wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".4s">
                           <span><a href="index.html">Home</a></span>
                           <span class="tp-breadcrumb-dvdr">-</span>
                           <span class="tp-breadcrumb-title-pre">Our Blog</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcam-area-end -->

         <!-- tp-blog-area-start -->
         <div class="tp-blog-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-40">
                        <div class="tp-blog-title-wrapper text-center">
                            <span class="tp-section-title-pre-family section-title tp-split-in-right">Read Our
                                Blog</span>
                            <h2 class="tp-section-title tp-section-title-dark tp-split-in-left">Our Blogs News &
                                Articles</h2>
                        </div>
                    </div>
                    <?php
                        include('db_con.php');

                            $sql = "SELECT blogs.blog_heading AS heading, 
                                        blogs_images.image, 
                                        blogs.blog_desc_first, 
                                        blogs.blog_url,
                                        blogs.created_at
                                FROM blogs
                                INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                GROUP BY blogs.id LIMIT 2"; 

                            $result = $con->query($sql);

                            while ($row = $result->fetch_assoc()) {
                            $heading = $row['heading'];
                            $image = $row['image'];
                            $blog_desc_first = $row['blog_desc_first'];
                            $blog_url = $row['blog_url'];
                            $created_at = $row['created_at'];
                            $formatted_date = date("j F Y", strtotime($created_at));

                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-35 wow fadeInUp" data-wow-duration=".9s"
                        data-wow-delay=".2s">
                        <div class="tp-blog-wrapper tp-blog-wrapper-family">
                            <div class="tp-blog-thumb mb-20">
                                <a class="tp-blog-thumb-img" href="blog/<?php echo $blog_url; ?>">
                                    <img class="w-100" src="blog/blog_uploads/<?php echo $image; ?>" alt="blog">
                                </a>
                            </div>
                            <div class="tp-blog-content-family">

                                <h3 class="tp-blog-title tp-blog-title-family mb-30">
                                    <a href="blog/<?php echo $blog_url; ?>"><?php echo $heading; ?></a>
                                </h3>
                                <div class="tp-blog-date-family">
                                    <span><i class="fa-light fa-calendar"></i><?php echo $formatted_date; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- tp-blog-area-end -->

         <!-- tp-cta-area-start -->
         <div class="tp-cta-area bg-position p-relative" data-background="assets/img/cta/home/03.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-cta-wrapper-2">
                        <div class="row align-items-center">
                           <div class="col-lg-8 mb-20">
                              <div class="tp-cta-content-wrapper d-flex">
                                 <span class="tp-cta-content-icon"><i class="flaticon-alert"></i></span>
                                 <div class="tp-cta-content">
                                    <h6 class="tp-cta-sub-title-white mb-15">It’s Time to Claim Now</h6>
                                    <h2 class="tp-cta-title">Start Tracking Your Claims</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 mb-20">
                              <div class="tp-cta-btn f-right">
                                 <a class="tp-btn" href="contact.html">Track Your Claim</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tp-cta-area-start -->
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
   </body>

</html>