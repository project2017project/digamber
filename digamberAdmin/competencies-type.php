<?php include 'adminheader.php'; ?>
<div class="container-fluid">
    <div class="main-header">
        <h2>Compentency Type <a href="competencies-type-add.php" class="btn btn-primary pull-right">Add</a></h2>
    </div>
        <div class="row">
            <div class="col-lg-12">                               
                <div class="table-responsive" style="margin-top:10px;">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead><tr><th>S.No</th><th>Name</th><th>Created At</th><th>Action</th></tr></thead>
                        <tfoot><tr><th>S.No</th><th>Name</th><th>Created At</th><th>Action</th></tr></tfoot>
                        <tbody>
                            <?php
                            $sql = "select * from competencies_type";
                            //echo $sql;exit;
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['competencies_type_name']; ?></td>
									<td><?php echo $row['created']; ?></td>
                                    <td align="center">
                                        <a href="competencies-type-edit.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Edit</a>
                                        <a href="competencies-type-delete.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Delete</a>
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