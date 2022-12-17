<?php include 'adminheader.php'; ?>
<div class="container-fluid">
    <div class="main-header">
        <h2>Review List</h2>
    </div>
        <div class="row">
            <div class="col-lg-12">                               
                <div class="table-responsive" style="margin-top:10px;">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead><tr><th>S.No</th><th>Survey ID</th><th>reviewer</th><th>reviewee</th><th>Category</th><th>Created At</th><th>Action</th></tr></thead>
                        <tfoot><tr><th>S.No</th><th>Survey ID</th><th>reviewer</th><th>reviewee</th><th>Category</th><th>Created At</th><th>Action</th></tr></tfoot>
                        <tbody>
                            <?php
                            $sql = "select * from reviews";
                            //echo $sql;exit;
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['survey_id']; ?></td>
                                    <td><?php echo $row['reviewer']; ?></td>
                                    <td><?php echo $row['reviewee']; ?></td>
                                    <td><?php echo $row['reviewer_category']; ?></td>
									<td><?php echo $row['created']; ?></td>
                                    <td align="center">
                                        <a href="reviewerslist-edit.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Edit</a>
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