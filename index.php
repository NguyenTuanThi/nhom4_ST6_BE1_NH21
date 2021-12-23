<?php

include "header.php";
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop01.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Laptop<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop03.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Accessories<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop02.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Cameras<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->

            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php
                                foreach ($getProductNew as  $value) :
                                ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['image'] ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                        </h3>
                                        <h4 class="product-price">
                                            <?php echo number_format($value['price']) ?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"> <a
                                                    href="addwishlist.php?id=<?php echo $value['id']; ?>"><i
                                                        class="fa fa-heart-o"></i><span class="tooltipp">add to
                                                        wishlist</span></a> </button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                    class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a
                                                    href=" viewproduct.php?id=<?php echo $value['id'] ?>"><i
                                                        class="fa fa-eye"></i><span class="tooltipp">quick
                                                        view</span></a></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="addcart1.php?id=<?php echo $value['id'] ?>"> <button
                                                class="add-to-cart-btn">
                                                <i class="fa fa-shopping-cart"></i> add to
                                                cart</button></a>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php
                                endforeach;
                                ?>

                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->


        </div>
        <!-- /row -->
        <div class="row" style="padding-top: 20px;">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Apple</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->

            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <?php
                                foreach ($getProductManuID as  $value) :
                                ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['image'] ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                        </h3>
                                        <h4 class="product-price">
                                            <?php echo number_format($value['price']) ?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"> <a
                                                    href="addwishlist.php?id=<?php echo $value['id']; ?>"><i
                                                        class="fa fa-heart-o"></i><span class="tooltipp">add to
                                                        wishlist</span></a> </button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                    class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a
                                                    href=" viewproduct.php?id=<?php echo $value['id'] ?>"><i
                                                        class="fa fa-eye"></i><span class="tooltipp">quick
                                                        view</span></a></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="addcart1.php?id=<?php echo $value['id'] ?>"> <button
                                                class="add-to-cart-btn">
                                                <i class="fa fa-shopping-cart"></i> add to
                                                cart</button></a>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php
                                endforeach;
                                ?>

                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->


        </div>
        <div class="row" style="padding-top: 20px;">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Laptop</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->

            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-3">
                                <?php
                                foreach ($getProductTypeID as  $value) :
                                ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['image'] ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                        </h3>
                                        <h4 class="product-price">
                                            <?php echo number_format($value['price']) ?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"> <a
                                                    href="addwishlist.php?id=<?php echo $value['id']; ?>"><i
                                                        class="fa fa-heart-o"></i><span class="tooltipp">add to
                                                        wishlist</span></a> </button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                    class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a
                                                    href=" viewproduct.php?id=<?php echo $value['id'] ?>"><i
                                                        class="fa fa-eye"></i><span class="tooltipp">quick
                                                        view</span></a></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="addcart1.php?id=<?php echo $value['id'] ?>"> <button
                                                class="add-to-cart-btn">
                                                <i class="fa fa-shopping-cart"></i> add to
                                                cart</button></a>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php
                                endforeach;
                                ?>

                            </div>
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->


        </div>

    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 50% OFF</p>
                    <a class="primary-btn cta-btn" href="#">Shop now</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Featured products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->

            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-10">
                                <?php
                                foreach ($getAllProductsByFeature as  $value) :
                                ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['image'] ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                        </h3>
                                        <h4 class="product-price">
                                            <?php echo number_format($value['price']) ?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"> <a
                                                    href="addwishlist.php?id=<?php echo $value['id']; ?>"><i
                                                        class="fa fa-heart-o"></i><span class="tooltipp">add to
                                                        wishlist</span></a> </button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                    class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a
                                                    href=" viewproduct.php?id=<?php echo $value['id'] ?>"><i
                                                        class="fa fa-eye"></i><span class="tooltipp">quick
                                                        view</span></a></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="addcart1.php?id=<?php echo $value['id'] ?>"> <button
                                                class="add-to-cart-btn">
                                                <i class="fa fa-shopping-cart"></i> add to
                                                cart</button></a>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php
                                endforeach;
                                ?>

                            </div>
                            <div id="slick-nav-10" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">

                    <div>
                        <?php
                        foreach ($getAllProductSold as  $value) :
                        ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price">
                                    <?php echo number_format($value['price']) ?>VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach; ?>

                    </div>

                    <div>
                        <?php
                        foreach ($getAllProductSold1 as  $value) :
                        ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price">
                                    <?php echo number_format($value['price']) ?>VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php
                        endforeach;
                        ?>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-6" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-6">
                    <div>
                        <?php
                        foreach ($getAllProductSold1 as  $value) :
                        ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price">
                                    <?php echo number_format($value['price']) ?>VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach; ?>

                    </div>

                    <div>
                        <?php
                        foreach ($getAllProductSold2 as  $value) :
                        ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price">
                                    <?php echo number_format($value['price']) ?>VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>

            <div class="clearfix visible-sm visible-xs"></div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-7" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-7">
                    <div>
                        <?php
                        foreach ($getAllProductSold2 as  $value) :
                        ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price">
                                    <?php echo number_format($value['price']) ?>VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach; ?>

                    </div>

                    <div>
                        <?php
                        foreach ($getAllProductSold3 as  $value) :
                        ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="viewproduct.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price">
                                    <?php echo number_format($value['price']) ?>VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->

<?php
include "footer.html";
?>