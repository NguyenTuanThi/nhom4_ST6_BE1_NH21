<?php include "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Total</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Total</li>
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
                <h3 class="card-title">Order_Bill</h3>

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
                            <th style="width: 5% ">
                                ID
                            </th>
                            <th style="width: 10% ">
                                Fullname
                            </th>
                            <th style="width: 15% ">
                                Address
                            </th>
                            <th style="width: 5% ">
                                Phone
                            </th>
                            <th style="width: 15% ">
                                Datetime
                            </th>
                            <th style="width: 15% ">
                                Total
                            </th>
                            <th style="width: 15% ">
                                Note
                            </th>
                            <th style="width: 5% text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getAllUser = $user->getAllUser();
                        foreach ($getAllUser as $value) :
                            $getAllBillByStatus2 = $bill->getAllBillByStatus2($value['user_id']);
                            foreach ($getAllBillByStatus2 as $value1) :
                        ?>
                        <tr>
                            <td>
                                <?php echo $value1['id'] ?>
                            </td>
                            <td><?php echo $value1['fullname'] ?>
                            </td>
                            <td>
                                <?php echo $value1['address'] ?>
                            </td>
                            <td><?php echo $value1['phone'] ?>
                            </td>
                            <td><?php echo $value1['created_at'] ?>
                            </td>
                            <td><?php echo number_format($value1['total']) ?> VND
                            </td>
                            <td><?php echo $value1['note'] ?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" href="delbills31.php?id=<?php echo $value1['id'] ?>">
                                    <i class="fas fa-trash"> </i>
                                    Delete
                                </a>

                            </td>
                        </tr>
                        <?php endforeach;
                        endforeach;
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