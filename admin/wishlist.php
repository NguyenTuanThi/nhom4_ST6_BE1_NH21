<?php include "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Wishlist</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Wishlist</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5% text-center">
                                Username
                            </th>
                            <th style="width: 40% ">
                                Name
                            </th>
                            <th style="width: 15% ">
                                Images
                            </th>
                            <th style="width: 10% text-center">
                                Price
                            </th>
                            <th style="width: 5% ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        # code...
                        $getAllWishList = $wish->getAllWishList();
                        foreach ($getAllWishList as $value) {
                        ?>

                        <tr>
                            <td>
                                <?php echo $value['username'] ?>
                            </td>
                            <td><?php echo $value['name'] ?>
                            </td>
                            <td>
                                <img style="width: 100px;" src="../img/<?php echo $value['image'] ?>" alt="">
                            </td>
                            <td class="project_progress">
                                <?php echo number_format($value['price']) ?>VND
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" href="delwl.php?id=<?php echo $value['product_id'] ?>">
                                    <i class="fas fa-trash"> </i>
                                    Delete
                                </a>

                            </td>
                        </tr>
                        <?php }

                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "footer.html"; ?>