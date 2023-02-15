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
    <link href="css/checkout.css" rel="stylesheet">

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
                                                <a href="#" class="action"><i class="ti-trash"></i></a>
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

    <main class="bg_gray">


        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="user_welcome.php">Home</a></li>
                        <li><a href="checkout.php">Order Now</a></li>
                    </ul>
                </div>
                <h2>Register Your Info to Place Order</h2>

            </div>
            <!-- /page_header -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="step first">
                        <h3>1. User Info and Billing Address</h3>
                        <ul class="nav nav-tabs" id="tab_checkout" role="tablist">

                        </ul>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Order Date">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Delivery Date">
                                </div>
                                <div id="other_addr_c" class="pt-2">
                                    <div class="row no-gutters">
                                        <div class="col-6 form-group pr-1">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-6 form-group pl-1">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telephone">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /step -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step middle payments">
                        <h3>2. Payment Details</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Order Id">
                        </div><div class="form-group">
                            <input type="text" class="form-control" placeholder="Customer Id">
                        </div>
                        <ul>
                            <div class="step middle payments">
                                <h5><a>Payment Method</a></h5>
                            <li>
                                <label class="container_radio">Cash on delivery<a href="#0" class="info" data-toggle="modal" data-target="#payments_method"></a>
                                    <input type="radio" name="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>

                    </div>
                    <!-- /step -->

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step last">
                        <h3>3. Order Details</h3>
                        <div class="box_general summary">
                            <ul>
                                <li class="clearfix"><em>1x Pound Cake</em>  <span>Tk 750</span></li>
                                <li class="clearfix"><em>1x Vanilla Cake</em> <span>Tk 1200</span></li>
                            </ul>
                            <ul>
                                <li class="clearfix"><em><strong>Subtotal</strong></em>  <span>Tk 1950</span></li>
                                <li class="clearfix"><em><strong>Shipping</strong></em> <span>Tk 80</span></li>

                            </ul>
                            <div class="total clearfix">TOTAL <span>Tk 2030</span></div>
                            <div class="form-group">
                                <label class="container_check">Registered to Order.
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <a href="#" class="btn_1 full-width">Confirm your order</a>
                        </div>
                        <!-- /box_general -->
                    </div>
                    <!-- /step -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->

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
<!--/footer-->
</div>
<!-- page -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>