<?php include "header.php" ?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class=" col-md-12">
                <h3 class="breadcrumb-header">View order</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">View order</li>
                </ul>
            </div>
        </div>
        <!-- ?php
        if (isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
            $getAllBill = $bill->getAllBill($id);
            foreach ($getAllBill  as $value) {
            }
        }
        ?> -->
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section ">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row" style="margin-top: -100px;">
            <!-- Product tab -->
            <?php if (isset($_SESSION['user'])) {
                # code...
                $check = $user->check($_SESSION['user']);
                foreach ($check as $values) { ?>
            <div class="col-md-12 ">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Processing</a></li>
                        <li><a data-toggle="tab" href="#tab2">Delivery in progress</a></li>
                        <li><a data-toggle="tab" href="#tab3">Delivered</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="card-body p-0">
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 5% text-center">
                                                    ID
                                                </th>
                                                <th style="width: 25% text-center">
                                                    Fullname
                                                </th>
                                                <th style="width: 25% text-center">
                                                    Address
                                                </th>
                                                <th style="width: 10% text-center">
                                                    Phone
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Datetime
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Total
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Note
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Status
                                                </th>
                                                <th style="width: 5% ">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                    $getAllBillByStatus0 = $bill->getAllBillByStatus0($values['user_id']);
                                                    foreach ($getAllBillByStatus0 as $value) {
                                                    ?>

                                            <tr>
                                                <td>
                                                    <?php echo $value['id'] ?>
                                                </td>
                                                <td><?php echo $value['fullname'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['address'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['phone'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['created_at'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo number_format($value['total']) ?> VND
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['note'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    Đang xử lý
                                                </td>

                                                <td class="project-actions text-right">
                                                    <a class="btn btn-danger btn-sm"
                                                        href="del.php?id=<?php echo $value['id'] ?>">
                                                        <i class="fas fa-trash"> </i>
                                                        Cancel
                                                    </a>
                                                </td>
                                                <?php }
                                                        ?>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="card-body p-0">
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 5% text-center">
                                                    ID
                                                </th>
                                                <th style="width: 25% text-center">
                                                    Fullname
                                                </th>
                                                <th style="width: 25% text-center">
                                                    Address
                                                </th>
                                                <th style="width: 10% text-center">
                                                    Phone
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Datetime
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Total
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Note
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                    $getAllBillByStatus1 = $bill->getAllBillByStatus1($values['user_id']);
                                                    foreach ($getAllBillByStatus1 as $value) {
                                                    ?>

                                            <tr>
                                                <td>
                                                    <?php echo $value['id'] ?>
                                                </td>
                                                <td><?php echo $value['fullname'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['address'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['phone'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['created_at'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo number_format($value['total']) ?> VND
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['note'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    Đang vận chuyển
                                                </td>
                                            </tr>
                                            <?php }

                                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <div class="card-body p-0">
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 5% text-center">
                                                    ID
                                                </th>
                                                <th style="width: 25% text-center">
                                                    Fullname
                                                </th>
                                                <th style="width: 25% text-center">
                                                    Address
                                                </th>
                                                <th style="width: 10% text-center">
                                                    Phone
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Datetime
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Total
                                                </th>
                                                <th style="width: 5% text-center">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                    $getAllBillByStatus2 = $bill->getAllBillByStatus2($values['user_id']);
                                                    foreach ($getAllBillByStatus2 as $value) {
                                                    ?>

                                            <tr>
                                                <td>
                                                    <?php echo $value['id'] ?>
                                                </td>
                                                <td><?php echo $value['fullname'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['address'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['phone'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo $value['created_at'] ?>
                                                </td>
                                                <td class="project_progress">
                                                    <?php echo number_format($value['total']) ?> VND
                                                </td>
                                                <td class="project_progress">
                                                    Đã giao hàng
                                                </td>
                                            </tr>
                                            <?php }

                                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
            <?php }
            } ?>
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
<?php include "footer.html" ?>