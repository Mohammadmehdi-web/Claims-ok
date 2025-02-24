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
            <div id="loading-icon"><img src="../assets/img/logo/loader/loader.png" alt=""></div>
         </div>
      </div>
      <!-- Preloader End -->

      <header class="tp-header-height">
         <!-- header-area-start -->
         <div class="header-area-start">
            <!-- header-top-area-start -->
            <div class="tp-header-top-area tp-slider-bg tp-border-bottom section-plr d-none d-lg-block">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-lg-8 col-xl-9">
                        <div class="tp-header-top-info tp-header-top-info-home tp-header-about-top-info">
                           <ul>
                              <li>
                                 <a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"><i class="fa-sharp fa-regular fa-location-dot"></i> Manchester 21, Zurich, CH</a>
                              </li>
                              <li>
                                 <a href="mailto:example@gmaol.com"><i class="fa-regular fa-envelope"></i> example@gmail.com</a>
                              </li>
                              <li class="tp-top-menu">
                                 <a href="#">Make a Claim</a>
                                 <a href="#">Services</a>
                                 <a href="#">Solution Center</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-xl-3">
                        <div class="tp-header-social-icon tp-header-social-icon-home tp-header-about-social-icon d-flex justify-content-end">
                           <span>Follow Us On</span>
                           <a href="#"><i class="fa-brands fa-facebook"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- header-top-area-end -->

            <!-- header-bootom-start -->
            <div class="header-bootom-area tp-header-menu-spacing section-plr p-relative tp-white-bg" id="tp-header-sticky">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xxl-2 col-xl-2 col-6">
                        <div class="tp-logo">
                           <a href="index.html">
                              <img src="../assets/img/logo/logo-3.svg" alt="logo">
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-6 d-none d-xl-block">
                        <div class="tp-main-menu">
                           <nav class="tp-main-menu-content">
                              <ul>
                                 <li class="has-dropdown position-static">
                                    <a href="index.html">Home</a>
                                    <div class="tp-submenu submenu has-homemenu">
                                       <div class="row gx-6 row-cols-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-5">
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-1.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index1-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index.html">Main Home</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-2.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-2.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index2-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-2.html">Family Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-3.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-3.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index3-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-3.html">Home Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-4.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-4.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index4-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-4.html">Business Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-5.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-5.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index5-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-5.html">Health Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-6.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-6.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index6-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-6.html">Car Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-7.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-7.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index7-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-7.html">Pet Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-8.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-8.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index8-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-8.html">Travel Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb mb-15">
                                                <img src="../assets/img/menu/img-9.jpg" alt="">
                                                <div class="homemenu-btn">
                                                   <a class="menu-btn tp-btn" href="index-9.html">Multi Page</a> <br>
                                                   <a class="menu-btn tp-btn tp-btn-green" href="index9-one-page.html">One Page</a>
                                                </div>
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="index-9.html">Marriage Insurance</a>
                                                </h4>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb tp-menu-blur-thumb mb-15">
                                                <img src="../assets/img/menu/img-2.jpg" alt="">
                                             </div>
                                             <div class="homemenu-content text-center">
                                                <h4 class="homemenu-title">
                                                   <a href="#">Comming Soon</a>
                                                </h4>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="insurance-1.html">Insurance</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="insurance-1.html">Insurance 01</a></li>
                                       <li><a href="insurance-2.html">Insurance 02</a></li>
                                       <li><a href="insurance-details.html">Insurance Details</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="about.html">About</a></li>
                                       <li><a href="team.html">Team</a></li>
                                       <li><a href="team-details.html">Team Details</a></li>
                                       <li><a href="shop.html">Shop</a></li>
                                       <li><a href="shop-details.html">Shop Details</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                       <li><a href="testimonial.html">Testimonial</a></li>
                                       <li><a href="pricing.html">Pricing</a></li>
                                       <li><a href="faq.html">Faq</a></li>
                                       <li><a href="error.html">Error</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="portfolio.html">Portfolio</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="portfolio.html">portfolio</a></li>
                                       <li><a href="portfolio-details.html">portfolio Details</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="blog.html">Blog</a></li>
                                       <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                       <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="contact.html">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-4 col-6">
                        <div class="tp-header-right-action d-none d-xl-block">
                           <ul class="d-flex align-items-center justify-content-end">
                            <li>
                               <div class="tp-header-search lineheight-1">
                                  <button class="search-click">
                                     <i class="flaticon-search"></i>
                                  </button>
                               </div>
                            </li>
                            <li class="tp-header-border">
                               <div class="tp-header-cart lineheight-1">
                                  <button class="click-cart cartmini-open-btn tp-header-about-cart p-relative">
                                     <i class="flaticon-shopping-cart"></i>
                                     <span class="cartmini-item-count p-absolute">3</span>
                                  </button>
                               </div>
                            </li>
                            <li>
                                <div class="tp-header-btn">
                                <a class="tp-btn" href="contact.html">Get a Quote</a>
                                </div>
                            </li>
                            <li class="d-none d-xxl-block">
                                <div class="tp-header-about-box ml-30 d-flex align-items-center">
                                    <div class="tp-header-tel-icon tp-header-about-tel-icon">
                                        <span>
                                            <i class="flaticon-telephone"></i>
                                        </span>
                                    </div>
                                    <div class="tp-header-tel-text">
                                        <span>Talk to an expert </span>
                                        <a href="tel:+99(786)8765">Free +99 (786) 8765</a>
                                    </div>
                                </div>
                            </li>
                           </ul>
                        </div>
                        <div class="tp-main-menu-bar tp-menu-bar tp-header-hamburger-toogle tp-header-hamburger d-block d-xl-none">
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- header-bootom-end -->

         </div>
         <!-- header-area-end -->

         <!-- tp-offcanvus-area-start -->
         <div class="tpoffcanvas-area">
            <div class="tpoffcanvas">
               <div class="tpoffcanvas__close-btn">
                  <button class="close-btn"><i class="fal fa-times"></i></button>
               </div>
               <div class="tpoffcanvas__logo">
                  <a href="index.html">
                     <img src="../assets/img/logo/logo.svg" alt="logo">
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
                        <a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z" target="_blank">Manchester 21, Zurich, CH</a>
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

         <!-- cart mini area start -->
         <div class="cartmini__area">
            <div class="cartmini__wrapper d-flex justify-content-between flex-column">
               <div class="cartmini__top-wrapper ">
                  <div class="cartmini__top p-relative">
                     <div class="cartmini__title">
                        <h4>Shopping cart</h4>
                     </div>
                     <div class="cartmini__close">
                        <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                     </div>
                  </div>
                  <div class="cartmini__widget">
                     <div class="cartmini__widget-item">
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="../assets/img/cart/product-1.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">Level Bolt Smart Lock</a></h5>
                           <div class="cartmini__price-wrapper">
                              <span class="cartmini__price">$46.00</span>
                              <span class="cartmini__quantity">x2</span>
                           </div>
                        </div>
                        <button class="cartmini__del"><i class="fal fa-times"></i></button>
                     </div>
                     <div class="cartmini__widget-item">
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="../assets/img/cart/product-2.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">Trademil for younger</a></h5>
                           <div class="cartmini__price-wrapper">
                              <span class="cartmini__price">$78.00</span>
                              <span class="cartmini__quantity">x1</span>
                           </div>
                        </div>
                        <button class="cartmini__del"><i class="fal fa-times"></i></button>
                     </div>
                     <div class="cartmini__widget-item">
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="../assets/img/cart/product-3.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">ViewSonic VP2756-2K</a></h5>
                           <div class="cartmini__price-wrapper">
                              <span class="cartmini__price">$98.00</span>
                              <span class="cartmini__quantity">x3</span>
                           </div>
                        </div>
                        <button class="cartmini__del"><i class="fal fa-times"></i></button>
                     </div>
                  </div>
                  <!-- for wp -->
                  <!-- if no item in cart -->
                  <div class="cartmini__empty text-center d-none">
                     <img src="../assets/img/cart/empty-cart.png" alt="">
                     <p>Your Cart is empty</p>
                     <a href="shop.html" class="cartmini-btn">Go to Shop</a>
                  </div>
               </div>
               <div class="cartmini__checkout">
                  <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                  </div>
                  <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="cartmini-btn mb-10 w-100"> <span></span> view cart</a>
                     <a href="checkout.html" class="cartmini-btn-border w-100"> <span></span> checkout</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="cartmini-overlay"></div>
         <!-- cart mini area end -->
      </header>

      <main>
         <!-- breadcam-area-start -->
         <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="../assets/img/breadcrumb/01.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb-content">
                        <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">Blog Details</h2>
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
                              <span><a href="#"><?php echo date("j F Y", strtotime($blog['created_at'])); ?></a></span>
                             
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
                        <div class="tp-blog-sidebar-widget mb-30">
                           <div class="tp-blog-search p-relative">
                              <form action="#">
                                 <input type="text" placeholder="Search here">
                                 <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                              </form>
                           </div>
                        </div>
                        <div class="tp-blog-sidebar-widget tp-blog-sidebar-widget-2 tp-blog-sidebar-widget-4 mb-30">
                           <h3 class="tp-blog-sidebar-title">Our Latest Post</h3>
                           <div class="tp-blog-post">
                              <div class="tp-blog-post-thumb">
                                 <img src="../assets/img/blog/sidebar/01.jpg" alt="blog">
                              </div>
                              <div class="tp-blog-content">
                                 <div class="tp-blog-meta-2">
                                    <span><i class="fa-sharp fa-light fa-comments"></i>02 Comments</span>
                                 </div>
                                 <div class="tp-blog-post-title">
                                    <h4><a href="blog-details.html">It’s easy to buildup business with us</a></h4>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-blog-post">
                              <div class="tp-blog-post-thumb">
                                 <img src="../assets/img/blog/sidebar/02.jpg" alt="blog">
                              </div>
                              <div class="tp-blog-content">
                                 <div class="tp-blog-meta-2">
                                    <span><i class="fa-sharp fa-light fa-comments"></i>02 Comments</span>
                                 </div>
                                 <div class="tp-blog-post-title">
                                    <h4><a href="blog-details.html">Make your life easy with insurai banking</a></h4>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-blog-post">
                              <div class="tp-blog-post-thumb">
                                 <img src="../assets/img/blog/sidebar/03.jpg" alt="blog">
                              </div>
                              <div class="tp-blog-content">
                                 <div class="tp-blog-meta-2">
                                    <span><i class="fa-sharp fa-light fa-comments"></i>02 Comments</span>
                                 </div>
                                 <div class="tp-blog-post-title">
                                    <h4><a href="blog-details.html">Strategy for norway peion fund global</a></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-blog-sidebar-widget tp-blog-sidebar-widget-2 mb-30">
                           <h3 class="tp-blog-sidebar-title tp-blog-sidebar-title-3">Catagories</h3>
                           <div class="tp-blog-catagorie-wrapper">
                              <div class="tp-blog-catagorie">
                                 <ul>
                                    <li>
                                       <a href="#">Home Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                    <li>
                                       <a href="#">Life Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                    <li>
                                       <a href="#">Business Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                    <li>
                                       <a href="#">Travel Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                    <li>
                                       <a href="#">Health Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                    <li>
                                       <a href="#">Marriage Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tp-blog-sidebar-widget-3 mb-30">
                           <h3 class="tp-blog-sidebar-title tp-blog-sidebar-title-2">Tag</h3>
                           <div class="tagcloud">
                              <a href="#">Loans</a>
                              <a href="#">Financial</a>
                              <a href="#">Standards</a>
                              <a href="#">Bangking</a>
                              <a href="#">Agent</a>
                              <a href="#">Economy</a>
                              <a href="#">Marketing</a>
                              <a href="#">Debit</a>
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
         <div class="tp-footer-area bg-position pt-130 pb-40" data-background="../assets/img/footer/footerbg.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-70">
                     <div class="tp-footer-widget tp-footer-col-1">
                        <div class="tp-footer-logo mb-35">
                           <a href="index.html"><img src="../assets/img/logo/logo-2.svg" alt="logo"></a>
                        </div>
                        <div class="tp-footer-widget-content mb-35">
                           <p>We work with a passion of  taking challenges most creating new ones </p>
                        </div>
                        <div class="tp-footer-widget-social">
                           <a href="#"><i class="fa-brands fa-facebook"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-70">
                     <div class="tp-footer-widget tp-footer-col-2">
                        <h4 class="tp-footer-widget-title mb-30">Usefull links</h4>
                        <div class="tp-footer-widget-content">
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                 <div class="tp-footer-widget-link">
                                    <ul>
                                       <li>
                                          <a href="#">About us</a>
                                       </li>
                                       <li>
                                          <a href="#">News</a>
                                       </li>
                                       <li>
                                          <a href="#">Our team</a>
                                       </li>
                                       <li>
                                          <a href="#">Contact us</a>
                                       </li>
                                       <li>
                                          <a href="#">Careers</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                 <div class="tp-footer-widget-link">
                                    <ul>
                                       <li>
                                          <a href="#">FAQ’s</a>
                                       </li>
                                       <li>
                                          <a href="#">Service</a>
                                       </li>
                                       <li>
                                          <a href="#">Project</a>
                                       </li>
                                       <li>
                                          <a href="#">Privacy</a>
                                       </li>
                                       <li>
                                          <a href="#">Support</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 mb-70  col-sm-6">
                     <div class="tp-footer-widget tp-footer-col-3">
                        <h4 class="tp-footer-widget-title mb-40">Contact info</h4>
                        <div class="tp-footer-widget-content">
                           <div class="tp-footer-active-expart mb-20">
                              <div class="tp-footer-active-img">
                                 <img src="../assets/img/footer/author.png" alt="footer">
                              </div>
                              <div class="tp-footer-active-content">
                                 <span class="tp-footer-active-name">Chat with an expert</span>
                                 <h6 class="tp-footer-active">Active now <span></span></h6>
                              </div>
                           </div>
                           <div class="tp-footer-widget-info">
                              <a href="tel:+999212354685894"><i class="flaticon-telephone"></i> + 999 2123 5468 5894</a>
                              <a href="mailto:insuraihelp@mail.com"><i class="fa-sharp fa-regular fa-envelope"></i> insuraihelp@mail.com</a>
                              <a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"><i class="fa-sharp fa-regular fa-location-dot"></i> 2307 Beverley Rd brook<br> New York 11226 U.S.</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-70">
                     <div class="tp-footer-widget tp-footer-col-4">
                        <h4 class="tp-footer-widget-title mb-30">Subscribe</h4>
                        <div class="tp-footer-widget-content">
                           <p class="mb-20">Get Special Offers. We Never Spam.</p>
                        </div>
                        <div class="tp-footer-widget-form">
                           <form action="#">
                              <div class="tp-footer-input">
                                 <label for="email"><i class="fa-light fa-envelope"></i></label>
                                 <input type="text" name="email" id="email" placeholder="Your Email">
                                 <button  class="tp-footer-input-icon" type="submit"><i class="fa-sharp fa-regular fa-arrow-right"></i></button>
                              </div>
                              <div class="tp-footer-input-2">
                                 <input type="checkbox" name="checkbox" id="checkbox">
                                 <label for="checkbox">I agree with your terms & condition</label>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-footer-copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-footer-copyright-text text-center">
                        <p>Full Copyright & Design By <a href="#"> @Theme pure</a> – <span id="year"></span></p>
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

<!-- Mirrored from html.hixstudio.net/insurai-prev/insurai/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 13:02:42 GMT -->
</html>