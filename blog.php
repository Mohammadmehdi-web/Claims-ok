<?php
include 'db_con.php';

if (isset($_GET['page_url'])) {
	
	$page_url = mysqli_real_escape_string($con, $_GET['page_url']);

	$blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
	$blog_result = mysqli_query($con, $blog_query);

	if ($blog_result && mysqli_num_rows($blog_result) > 0) {
		$blog = mysqli_fetch_assoc($blog_result);

		$image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
		$image_result = mysqli_query($con, $image_query);
        
?>


<?php
	} else {
		
		echo "<p>Product not found.</p>";
	}
} else {
	
	echo "<p>No product URL provided.</p>";
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $blog['blog_desc_first']  ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second']  ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one']  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="../assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/spacing.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
      p{
         text-align:justify;
      }
    </style>
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
            <div id="loading-icon"><img src="../assets/img/logo/loader/loader.png" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    
<header class="tp-header-height">
      <!-- header-area-start -->
      <div class="header-bootom-area tp-header-family tp-header-menu-spacing section-plr p-relative"
         id="tp-header-sticky">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xxl-2 col-xl-2 col-6">
                  <div class="tp-logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="col-xxl-5 col-xl-6 d-none d-xl-block">
                  <div class="tp-main-menu tp-menu-family">
                     <nav class="tp-main-menu-content">
                        <ul>
                           <li class="position-static"> <a href="index.php">Home</a></li>
                           <li><a href="about.php">About Us</a> </li>
                           <li class="has-dropdown">
                              <a href="#">Insurance</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="team-details.html">Home Insurance</a></li>
                                 <li><a href="shop.html">Car Insurance</a></li>
                                 <li><a href="about.html">Health Insurance</a></li>
                                 <li><a href="team.html">Life Insurance</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="#">Claims Assistance</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="shop-details.html">Loan protection policy Claims</a></li>
                                 <li><a href="cart.html">Travel Insurance Claims</a></li>
                                 <li><a href="checkout.html">Motor Insurance Claims</a></li>
                                 <li><a href="testimonial.html">Short Settled Insurance Claims</a></li>
                              </ul>
                           </li>
                           <li> <a href="blogs.php">Blog</a> </li>
                           <li>
                              <a href="contact.php">Contact</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xxl-5 col-xl-4 col-6">
                  <div class="tp-header-right-action d-none d-xl-block">
                     <ul class="d-flex align-items-center justify-content-end">
                        <li class="d-none d-xxl-block">
                           <div class="tp-header-tel-box tp-header-tel-box-family d-flex align-items-center">
                              <div class="tp-header-tel-icon tp-header-tel-family">
                                 <span>
                                    <i class="flaticon-telephone"></i>
                                 </span>
                              </div>
                              <div class="tp-header-tel-text tp-header-tel-text-family">
                                 <span>Talk to an expert </span>
                                 <a href="tel:">Free +91 99999 99999</a>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tp-header-btn">
                              <a class="tp-btn tp-btn-black-2" href="contact.html">Get a Quote</a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div
                     class="tp-main-menu-bar tp-menu-bar tp-header-hamburger-toogle tp-header-hamburger d-block d-xl-none">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header-area-end -->

      <!-- tp-offcanvus-area-start -->
      <div class="tpoffcanvas-area">
         <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
               <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
               <a href="index.php">
                  <img src="..assets/img/logo/logo.svg" alt="logo">
               </a>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tpoffcanvas-btn-1 mb-50">
               <a class="tpoffcanvas-btn" href="contact.html">GET STARTED</a>
            </div>
            <div class="tpoffcanvas__contact-info">
               <div class="tpoffcanvas__contact-title">
                  <h5>Contact us</h5>
               </div>
               <ul>
                  <li>
                     <i class="fa-light fa-location-dot"></i>
                     <a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z" target="_blank">Manchester 21,
                        Zurich, CH</a>
                  </li>
                  <li>
                     <i class="fas fa-envelope"></i>
                     <a href="mailto:alizoinfo@gmail.com"><span>insuraiinfo@gmail.com</span></a>
                  </li>
                  <li>
                     <i class="flaticon-telephone"></i>
                     <a href="tel:(+00)67834598568">+ 999 2123 5468 5894</a>
                  </li>
               </ul>
            </div>
            <div class="tpoffcanvas__social">
               <div class="social-icon">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- tp-offcanvus-area-end -->

      <!--search-form-start -->
      <div class="tp-search-body-overlay"></div>
      <div class="tp-search-form-toggle">
         <div class="tp-search-close">
            <i class="fa-solid fa-xmark"></i>
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6">
                  <div class="tp-search-form">
                     <form action="#">
                        <input type="text" placeholder="What Are You Looking Foor?" required>
                        <div class="tp-search-form-icon">
                           <button type="submit">
                              <i class="fa-solid fa-magnifying-glass"></i>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- search-form-end -->
   </header>

    <main>
        <!-- breadcam-area-start -->
        <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position"
            data-background="../assets/img/breadcrumb/01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb-content">
                            <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s"
                                data-wow-delay=".3s">Blog Details</h2>
                            <div class="tp-breadcrumb-list wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".4s">
                                <span><a href="index.html">Home</a></span>
                                <span class="tp-breadcrumb-dvdr">-</span>
                                <span class="tp-breadcrumb-title-pre">Blog Details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcam-area-end -->

        <!-- tp-postbox-area-start -->
        <div class="tp-postbox-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 mb-50">
                        <div class="tp-postbox-wrapper">
                            <article class="tp-postbox-item ">
                                <div class="tp-postbox-thumb mb-20">
                                    <?php
                                    $image_row = mysqli_fetch_assoc($image_result); 
                                    if ($image_row) {
                                       echo "<img src='blog_uploads/{$image_row['image']}' alt='Blog Image'/> ";
                                    } else {
                                       echo "<p>No product images available.</p>"; 
                                    }
                                    ?>
                                </div>
                                <div class="tp-postbox-meta mb-15">
                                    <span><a
                                            href="#"><?php echo date("j F Y", strtotime($blog['created_at'])); ?></a></span>

                                </div>
                                <div class="tp-postbox-content-2 mb-50">
                                    <h2 class="tp-postbox-title mb-20"><?php echo $blog['blog_heading'] ?></h2>
                                    <p class="mb-30 tp-postbox-para"><?php echo $blog['blog_desc_two'] ?></p>

                                </div>

                                <div class="tp-postbox-list">
                                    <div class="row">
                                        <?php
                            
                                          mysqli_data_seek($image_result, 0); 
                                          while ($logo_row = mysqli_fetch_assoc($image_result)) {
                                          if (!empty($logo_row['logos'])) {
                                          $imageSrc = 'blog_uploads/' . htmlspecialchars($logo_row['logos']);
                                       
                                          ?>
                                        <div class="col-xl-5 mb-35">
                                            <div class="tp-postbox-list-img">
                                                <img class="w-100" src="<?php echo $imageSrc; ?>" alt="blog">
                                            </div>
                                        </div>
                                        <?php
                                             } 
                                            }
                                        ?>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 mb-50">
                        <div class="tp-blog-sidebar-wrapper">
                           
                            <div class="tp-blog-sidebar-widget tp-blog-sidebar-widget-2 tp-blog-sidebar-widget-4 mb-30">
                                <h3 class="tp-blog-sidebar-title">Our Latest Blogs</h3>
                                <?php
                                    include('db_con.php');                                   
                                    $sql = "SELECT blogs.blog_heading AS heading, 
                                            blogs_images.image, 
                                            blogs.blog_url,
                                            blogs.created_at
                                            FROM blogs
                                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                            GROUP BY blogs.id  
                                            ORDER BY blogs.created_at DESC LIMIT 4"; 

                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $heading = $row['heading'];
                                            $image = $row['image'];
                                            $blog_url = $row['blog_url'];
                                            $created_at = $row['created_at'];
                                            $formatted_date = date("j F Y", strtotime($created_at));
                                    ?>
                                <div class="tp-blog-post">
                                    <div class="tp-blog-post-thumb">
                                        <img src="blog_uploads/<?php echo $image; ?>" alt="blog" width="100px">
                                    </div>
                                    <div class="tp-blog-content">
                                        <div class="tp-blog-meta-2">
                                            <span><?php echo date("j F Y", strtotime($blog['created_at'])); ?></span>
                                        </div>
                                        <div class="tp-blog-post-title">
                                            <h4><a href="<?php echo $blog_url; ?>"><?php echo $heading; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    } else {
                                        
                                        echo "<p>No blog found for today</p>";
                                    }
                                    ?>
                            </div>
                            <div class="tp-blog-sidebar-widget tp-blog-sidebar-widget-2 mb-30">
                                <h3 class="tp-blog-sidebar-title tp-blog-sidebar-title-3">Catagories</h3>
                                <div class="tp-blog-catagorie-wrapper">
                                    <div class="tp-blog-catagorie">
                                        <ul>
                                            <li>
                                                <a href="#">Home Insurance <span><i
                                                            class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="#">Life Insurance <span><i
                                                            class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </li>
                                            <li>
                                           
                                            <li>
                                                <a href="#">Travel Insurance <span><i
                                                            class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="#">Health Insurance <span><i
                                                            class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-postbox-area-end -->


    </main>

    <!-- footer-area-start -->
    <footer>
    <div class="tp-footer-area tp-dark-bg pt-120 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="tp-footer-widget">
                        <div class="tp-footer-logo mb-30">
                            <a href="index.html"><img src="assets/img/logo/logo-white.svg" alt="logo"></a>
                        </div>
                        <div class="tp-footer-widget-social-family tp-footer-widget-social-home">
                            <p class="text-justify">Providing trusted insurance solutions to secure your future with
                                confidence and peace of mind.</p>
                            <a class="tp-footer-widget-social-phone mb-25" href="tel:(+00)67834598568">+91-999999
                                99999</a>
                            <div class="tp-footer-widget-social-info tp-footer-widget-social-info-home">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="tp-footer-widget-family tp-footer-family-col-2">
                        <h4 class="tp-footer-widget-title-family tp-footer-widget-title-home mb-20">Information</h4>
                        <div class="tp-footer-widget-link-family tp-footer-widget-link-home">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About US</a>
                                </li>
                                <li>
                                    <a href="#">Blogs</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="tp-footer-widget-family tp-footer-family-col-3">
                        <h4 class="tp-footer-widget-title-family tp-footer-widget-title-home mb-20">Insurance</h4>
                        <div class="tp-footer-widget-link-family tp-footer-widget-link-home">
                            <ul>
                                <li>
                                    <a href="#">Home Insurance</a>
                                </li>
                                <li>
                                    <a href="#"> Car Insurance</a>
                                </li>
                                <li>
                                    <a href="#">Health Insurance</a>
                                </li>
                                <li>
                                    <a href="#">Life Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-9 mb-50">
                    <div class="tp-footer-widget-social-family tp-footer-family-col-4">
                        <h4 class="tp-footer-widget-title-family tp-footer-widget-title-home mb-25">Claims Assistance
                        </h4>
                        <div class="tp-footer-widget-link-family tp-footer-widget-link-home">
                            <ul>
                                <li>
                                    <a href="#">Loan protection policy Claims</a>
                                </li>
                                <li>
                                    <a href="#"> Travel Insurance Claims</a>
                                </li>
                                <li>
                                    <a href="#">Motor Insurance Claims</a>
                                </li>
                                <li>
                                    <a href="#">Short Settled Insurance Claims</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-footer-copyright tp-footer-copyright-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-footer-copyright-text tp-footer-copyright-text-home text-center">
                        <p>
                            <a href="#">© <span id="year"></span> Claims Ok</a> – Designed & Developed by <a
                                href="https://auctech.in" target="_blank" class="text-warning">Auctech MarCom</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="../assets/js/vendor/waypoints.js"></script>
    <script src="../assets/js/bootstrap-bundle.js"></script>
    <script src="../assets/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/magnific-popup.js"></script>
    <script src="../assets/js/nice-select.js"></script>
    <script src="../assets/js/jarallax.js"></script>
    <script src="../assets/js/purecounter.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/main.js"></script>
</body>


</html>