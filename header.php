<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
wp_head();
   ?>
    <base href="<? echo get_template_directory_uri();?>/">
</head>
<body>
    <!-- top header -->
 <div class="top-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <ul class="top-header-social-links d-flex align-items-center">
                            <li>Follow us on:</li>
                            <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ri-instagram-line"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
<!-- end top header  -->

   <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="enry-responsive-nav">
                <div class="container">
                    <div class="enry-responsive-menu">
                        <div class="logo">
                            <a href="http://localhost/e-market/"><img src="assets/img/logo.png" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="enry-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="http://localhost/e-market/"><img src="assets/img/logo.png" alt="logo" style="max-width:231px;"></a>

                    <div class="others-option container-fluid d-flex justify-content-end">

<style>
    .cart-icon:hover {
	color: var(--mainColor);
}
.enry-nav .navbar .others-option .cart-icon {
	-webkit-transition: var(--transition);
	transition: var(--transition);
	display: inline-block;
	margin-right: 20px;
	cursor: pointer;
	line-height: 1;
	font-size: 22px;
}
</style>
<a href="http://localhost/e-market/cart/">
                       <div class="cart-icon" style="">
                               <b>  <i class="ri-shopping-cart-2-line"></i></b>
                         </div>    
           </a>
                         <div class="search-icon">
                                   <b> <i class="ri-search-line"></i></b>
                                </div>        
                </div>
</div>
</nav>
</div>
</div>

 

                                 <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->
<!-- End Navbar Area -->
 