<?php include "header.php"; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <?php
        if (isset($_SESSION['user'])) {
            $check = $user->check($_SESSION['user']);
            foreach ($check as $values1) {
                $total = $cart->countPrice($values1['user_id']);
                foreach ($total as $value2) {
                    $getAllCart = $cart->getAllCart();
                    foreach ($getAllCart as $value3)
        ?>

        <form action="addbill.php?user_id=<?php echo $values1['user_id'] ?>" method="POST">
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="fullname" placeholder="Fullname">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <textarea class="input" placeholder="Order Notes" name="note"></textarea>
                        </div>
                    </div>
                    <!-- /Billing Details -->
                </div>
                <!-- Order Details -->

                <div class="col-md-5 order-details">

                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>

                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>

                        <div class="order-products">
                            <?php $checkCart = $cart->checkCart($_SESSION['user']);
                                        foreach ($checkCart as  $values) {
                                        ?>
                            <div class="order-col">
                                <div><?php echo $values['qty'] ?>x <?php echo $values['name'] ?></div>
                                <div><?php echo number_format($values['qty'] * $values['price']); ?>VND</div>
                            </div>
                            <?php
                                        } ?>
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total"><?php echo number_format($value2['total1']); ?>VND</strong>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="primary-btn order-submit">Place
                        order</button>


                    <?php }
            }
        } ?>
                </div>
                <!-- /Order Details -->

            </div>
        </form>
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

<?php include "footer.html"; ?>