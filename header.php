<?php
session_start();

require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
require "models/bill.php";
require "models/wish.php";
require "models/order_detail.php";
$protype = new protype();
$product = new Product();
$cart = new Cart();
$user = new User();
$bill = new Bill();
$wish = new Wishlist();
$sold = new Order_Detail();


// $getAllProducts = $product->getAllProducts();
// var_dump($getAllProducts)
$getProductNew = $product->getProductNew();
$getProductTypeID = $product->getProductTypeID();
$getProductManuID = $product->getProductManuID();
$getAllProductSold = $sold->getAllProductSold();
$getAllProductSold1 = $sold->getAllProductSold1();
$getAllProductSold2 = $sold->getAllProductSold2();
$getAllProductSold3 = $sold->getAllProductSold3();
$getAllProductsByFeature = $product->getAllProductsByFeature();
$getAllProducts1 = $product->getAllProducts1();
//$getProductById = $product->getProductById(2);
//var_dump($getProductManuID);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                    <!-- <li><a href="login/index.php"><i class="fa fa-user-o"></i> My Account</a></li>-->
                    <?php if (isset($_SESSION['user'])) { ?>
                    <li><a href="myorder.php" style="color: white;">

                            <?php echo "Xin chào " . $_SESSION['user'];
                        } ?></a></li>
                    <?php if (isset($_SESSION['user'])) { ?>
                    <li><a href="login/logout.php" style="color: white;"><i class="fa fa-user-o"></i>LogOut</a></li>
                    <?php   } ?>

                    <?php if (!isset($_SESSION['user'])) { ?>
                    <li><a href="login/index.php" style="color: white;"><i class="fa fa-user-o"></i>Login</a></li>
                    <?php   }
                        ?>


                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6 text-center">
                        <div class="header-search">
                            <form method="get" action="result.php" name="searchcol">
                                <input name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : "" ?>"
                                    class="input" placeholder="Search here">
                                <button type="submit" name="submit" class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <?php
                            if (isset($_SESSION['user'])) {
                                $check = $user->check($_SESSION['user']);
                                foreach ($check as $values1) {
                                    $count = $cart->countProduct($values1['user_id']);
                                    foreach ($count as $value1) {
                                        $total = $cart->countPrice($values1['user_id']);
                                        foreach ($total as $value2) {
                                            $countwish = $wish->countWishlist($values1['user_id']);
                                            foreach ($countwish as $value3) {
                            ?>
                            <div>
                                <a href="viewwishlist.php">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>

                                    <div class="qty"><?php echo $value3['total']; ?></div>
                                    <?php } ?>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->

                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>

                                    <div class="qty"><?php echo $value1['total']; ?></div>

                                </a>

                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <?php
                                                            if (isset($_SESSION['user'])) {
                                                                # code...

                                                                $checkCart = $cart->checkCart($_SESSION['user']);
                                                                foreach ($checkCart as $value) {
                                                            ?>
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a
                                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                                </h3>
                                                <h4 class="product-price"><span
                                                        class="qty"><?php echo $value['qty'] ?></span><?php echo number_format($value['price']) ?>
                                                    VND </h4>
                                            </div>
                                            <a href="delCart.php?id=<?php echo $value['product_id'] ?>"> <button
                                                    class="delete"><i class="fa fa-close"></i></button></a>
                                        </div>
                                        <?php }
                                                            }
                                                        }
                                                        ?>
                                    </div>

                                    <div class="cart-summary">
                                        <small><?php echo $value1['total']; ?> Item(s) selected</small>
                                        <h5>SUBTOTAL: <?php echo number_format($value2['total1']); ?>VND</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="viewcart.php">View Cart</a>
                                        <a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                            <?php
                                    }
                                }
                            }
                                    ?>
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php
                    $getAllProtype = $protype->getAllProtype();
                    foreach ($getAllProtype as $value) :
                    ?>
                    <li>
                        <a
                            href="products.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a>
                    </li>
                    <?php
                    endforeach;
                    ?>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->