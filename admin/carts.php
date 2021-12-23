<?php include "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Carts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Carts</li>
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
                <h3 class="card-title">Carts</h3>

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
                            <th style="width: 30% text-center">
                                Products
                            </th>
                            <th style="width: 10% text-center">
                                Price
                            </th>
                            <th style="width: 5% text-center">
                                Qty
                            </th>
                            <th style="width: 15% text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getAllCart1 = $cart->getAllCart1();
                        foreach ($getAllCart1 as $values) :
                        ?>
                        <tr>
                            <td>
                                <?php echo $values['username'] ?>
                            </td>
                            <td><?php echo $values['name'] ?>
                            </td>
                            <td>
                                <?php echo $values['price'] ?>
                            </td>
                            <td><?php echo $values['qty'] ?>
                            </td>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm"
                                    href="delcart1.php?id=<?php echo $values['id_cart'] ?>">
                                    <i class="fas fa-trash"> </i>
                                    Delete
                                </a>

                            </td>
                        </tr>
                        <?php endforeach;

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