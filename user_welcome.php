<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Cake Hut</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/cakehutlogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

<div id="page">

    <header class="version_1">
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <div class="main_header">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                        <div id="logo">
                            <a href="user_welcome.php"><img src="img/cakehutlogo.png" alt="" width="150" height="80"></a>
                        </div>
                    </div>
                    <nav class="col-xl-6 col-lg-7">
                        <a class="open_close" href="javascript:void(0);">
                            <div class="hamburger hamburger--spin">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="main-menu">
                            <div id="header_menu">
                                <a href="user_welcome.php"><img src="img/cakehutlogo.png" alt="" width="100" height="35"></a>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                            <ul>
                                <li class="submenu">
                                    <a href="user_welcome.php" class="show-submenu">Home</a>

                                </li>
                                <li class="megamenu submenu">
                                    <a href="javascript:void(0);" class="show-submenu-mega">Cakes</a>
                                    <div class="menu-wrapper">
                                        <div class="row small-gutters">
                                            <div class="col-lg-3">
                                                <h3>Cake Variants</h3>
                                                <ul>
                                                    <li><a href="#">Vanilla Cake</a></li>
                                                    <li><a href="#">Red Velvet Cake</a></li>
                                                    <li><a href="#">Chocolate Cake</a></li>
                                                    <li><a href="#">Black Forest Cake</a></li>
                                                    <li><a href="#">Tiramisu Cake</a></li>
                                                    <li><a href="#">Blueberry Cake</a></li>
                                                    <li><a href="#">Cup Cakes</a></li>
                                                    <li><a href="#">Pound Cakes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                    <!-- /menu-wrapper -->
                                </li>

                                <li>
                                    <a href="all-cakes.php">All Cakes</a>
                                </li>

                                <li>
                                    <a href="checkout.php">Order Now</a>
                                </li>

                            </ul>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                        <a class="phone_top" href="#"><strong><span>Contact Us</span>01234567890</strong></a>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /main_header -->

        <div class="main_nav Sticky">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <nav class="categories">
                            <ul class="clearfix">
                                <li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>

                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <div class="custom-search-input">
                            <input type="text" placeholder="Search for your cakes">
                            <button type="submit"><i class="header-icon_search_custom"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <ul class="top_tools">
                            <li>
                                <div class="dropdown dropdown-cart">
                                    <a href="#" class="cart_bt"><strong>2</strong></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/1.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                    <strong><span>Pound Cake</span>Tk 750</strong>
                                                </a>
                                                <a href="#0" class="action"><i class="ti-trash"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/2.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                    <strong><span>Vanilla Cake</span>Tk 1200</strong>
                                                </a>
                                                <a href="0" class="action"><i class="ti-trash"></i></a>
                                            </li>
                                        </ul>
                                        <div class="total_drop">
                                            <div class="clearfix"><strong>Total</strong><span>Tk 1950</span></div>
                                            <a href="#" class="btn_1 outline">View Cart</a><a href="checkout.php" class="btn_1">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /dropdown-cart-->
                            </li>
                            <li>
                                <a href="#0" class="wishlist"><span>Wishlist</span></a>
                            </li>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="access_link"><span>Account</span></a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="btn_1">LogIn or Register</a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ti-user"></i>My Profile</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ti-package"></i>My Orders</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /dropdown-access-->
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                            </li>
                            <li>
                                <a href="#menu" class="btn_cat_mob">
                                    <div class="hamburger hamburger--spin" id="hamburger">
                                        <div class="hamburger-box">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>
                                    Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <input type="text" class="form-control" placeholder="Search for your cakes">
                <input type="submit" class="btn_1 full-width" value="Search">
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_2.jpeg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-right white">
                                        <h2 class="owl-slide-animated owl-slide-title">New Arrival</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Have a taste of our freshly arrived items
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="#" role="button">Order Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpeg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title"><br>Birthday Special</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Celebrate your amazing day with our surprising cakes
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="#" role="button">Order Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_3.jpeg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center black">
                                        <h2 class="owl-slide-animated owl-slide-title">Choose Your Flavor</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                           Grab our special cakes for your special ones
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="#" role="button">Order Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->

        <ul id="banners_grid" class="clearfix">
            <li>
                <a href="#" class="img_container">
                    <img src="img/banners_cat_placeholder.jpeg" data-src="img/banner_1.jpeg" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Regular Order</h3>
                        <div><span class="btn_1">Order Now</span></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="img_container">
                    <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_2.jpeg" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Special Order</h3>
                        <div><span class="btn_1">Order Now</span></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="img_container">
                    <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_3.jpeg" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Occasional Order</h3>
                        <div><span class="btn_1">Order Now</span></div>
                    </div>
                </a>
            </li>
        </ul>
        <!--/banners_grid -->

        <div class="container margin_60_35">

            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="featured lazy" data-bg="url(img/bg.jpg)">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container margin_60">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 wow" data-wow-offset="150">
                            <h3>Special Combo Offer</h3>
                            <p>Get your discount on multiple orders</p>
                            <div class="feat_text_block">
                                <div class="price_box">
                                    <span class="new_price">Tk 900</span>
                                    <span class="old_price">Tk 1200</span>
                                </div>
                                <a class="btn_1" href="#" role="button">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /featured -->

        <div class="container margin_60_35">

            <!-- /products_carousel -->
        </div>
        <!-- /container -->


        <!-- /bg_gray -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Popular Now</h2>
                <p>Have a glimpse of our most desired cakes</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="#">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
                        </figure>
                        <h4>Red Velvet Cake</h4>
                        <p>We offer all kinds of cakes including red velvet, tiramisu, chocolate, black forest, and many other flavors.</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
                        </figure>
                        <h4>Blueberry Cake</h4>
                        <p>We offer all kinds of cakes including red velvet, tiramisu, chocolate, black forest, and many other flavors.</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
                        </figure>
                        <h4>Tiramisu Cake</h4>
                        <p>We offer all kinds of cakes including red velvet, tiramisu, chocolate, black forest, and many other flavors.</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
                        </figure>
                        <h4>Vanilla Cake</h4>
                        <p>We offer all kinds of cakes including red velvet, tiramisu, chocolate, black forest, and many other flavors.</p>
                    </a>
                </div>

            </div>

        </div>

    </main>

    <footer class="revealed">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="ti-home"></i>EU Dhaka City<br>Bangladesh</li>
                            <li><i class="ti-headphone-alt"></i>01234567890</li>
                            <li><i class="ti-email"></i><a href="#0">info@cakehut.com</a></li>
                        </ul>

                        <div class="input-group">
                            <button name="submit" class="btn"><a href="logout.php">Logout</a></button>
                        </div>
                    </div>
                </div>

                        <div class="follow_us">
                            <h5>Stay In Touch</h5>
                            <ul>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </div>
    </footer>
</div>

<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<script src="js/carousel-home.min.js"></script>

</body>
</html>