<?php include "header.php"; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">View cart</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">View cart</li>
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
        <div class="row">
            <!-- Order Details -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5% text-center">
                                ID
                            </th>
                            <th style="width: 25% text-center">
                                Name
                            </th>
                            <th style="width: 25% text-center">
                                Images
                            </th>
                            <th style="width: 10% text-center">
                                Price
                            </th>
                            <th style="width: 5% text-center">
                                Qty
                            </th>
                            <th style="width: 5% ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['user'])) {
                            # code...
                            $checkCart = $cart->checkCart($_SESSION['user']);
                            foreach ($checkCart as $value) {
                        ?>

                        <tr>
                            <td>
                                <?php echo $value['id'] ?>
                            </td>
                            <td><?php echo $value['name'] ?>
                            </td>
                            <td>
                                <img style="width: 100px;" src="./img/<?php echo $value['image'] ?>" alt="">
                            </td>
                            <td class="project_progress">
                                <?php echo number_format($value['price']) ?>VND
                            </td>
                            <td class="project_state">
                                <!-- ?php echo $value['qty'] ?> -->
                                <div class="input-number">
                                    <input type="number" name="qty" value="<?php echo $value['qty'] ?>">
                                    <a href="addcart.php?id=<?php echo $value['id'] ?>"><span
                                            class="qty-up">+</span></a>
                                    <a href="qtydown.php?id=<?php echo $value['id'] ?>"><span
                                            class="qty-down">-</span></a>
                                    <!-- <span class="qty-up">+</span> -->
                                    <!-- <span class="qty-down">-</span> -->
                                </div>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm"
                                    href="delCart.php?id=<?php echo $value['product_id'] ?>">
                                    <i class="fas fa-trash"> </i>
                                    Delete
                                </a>

                            </td>
                        </tr>
                        <?php }
                        }
                        ?>
                    </tbody>
                </table>
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

<?php include "footer.html"; ?>