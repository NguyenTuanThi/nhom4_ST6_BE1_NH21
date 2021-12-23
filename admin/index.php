<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php $countNewOrder = $bill->countNewOrder();
                            foreach ($countNewOrder as $value) : ?>
                            <h3><?php echo $value['neworder']; ?></h3>
                            <?php endforeach; ?>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="bills1.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php $countTransport = $bill->countTransport();
                            foreach ($countTransport as $value) : ?>
                            <h3><?php echo $value['neworder']; ?></h3>
                            <?php endforeach; ?>

                            <p>Transport</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shuttle-van"></i>
                        </div>
                        <a href="bills2.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-5">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php $countCustomer = $user->countCustomer();
                            foreach ($countCustomer as $value) : ?>
                            <h3><?php echo $value['total']; ?></h3>
                            <?php endforeach; ?>

                            <p>Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="users.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-7">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php $countPrice = $bill->countPrice();
                            foreach ($countPrice as $value) : ?>
                            <h3><?php echo number_format($value['total1']); ?> VND</h3>
                            <?php endforeach; ?>
                            <p>Total revenue</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <a href="bills3.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>