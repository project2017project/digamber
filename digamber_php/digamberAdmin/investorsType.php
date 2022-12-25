<?php include 'adminheader.php'; ?>
<div class="container-fluid">
    <div class="main-header">
        <h2>Investors Type <a href="investorsTypeAdd.php" class="btn btn-primary pull-right">Add</a></h2>
    </div>
        <div class="row">
            <div class="col-lg-12">                               
                <div class="table-responsive" style="margin-top:10px;">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead><tr><th>S.No</th><th>Name</th><th>Created At</th><th>Action</th></tr></thead>
                        <tfoot><tr><th>S.No</th><th>Name</th><th>Created At</th><th>Action</th></tr></tfoot>
                        <tbody>
                            <?php
                            $sql = "select * from investorstype";
                            //echo $sql;exit;
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['investorsTypeName']; ?></td>
									<td><?php echo $row['created_at']; ?></td>
                                    <td>
                                        <a href="investorsTypeEdit.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Edit</a>
                                        <a href="investorsTypeDelete.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Delete</a>
                                    </td>
                                </tr>
                            <?php
							$i++;
							} ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->


<!-- /#page-wrapper -->
<?php include 'adminfooter.php';?>