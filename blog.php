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
     
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $blog['blog_desc_first']  ?></title>
      <meta name="description" content="<?php echo $blog['blog_desc_second']  ?>">
      <meta name="keywords" content="<?php echo $blog['blog_point_one']  ?>">
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

      <?php
         include('header.php');
      ?>

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
                                 echo "<img src='blog_uploads/{$image_row['image']}' alt='Blog Image' style='height:500px;'/> ";
                              } else {
                                 echo "<p>No Blog images available.</p>"; 
                              }
                              ?>
                           </div>
                           <div class="tp-postbox-meta mb-15">
                              <span><a href="#"><?php echo date("j F Y", strtotime($blog['created_at'])); ?></span>
                              
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
                           <h3 class="tp-blog-sidebar-title">Our Latest Blog</h3>
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
                                       <a href="#">Car Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                    </li>
                                   
                                    <li>
                                       <a href="#">Health Insurance <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
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
     <?php
         include('footer.php');
     ?>
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