<?php
include 'adminheader.php';
?>

<div class="container-fluid">
    <div class="main-header">
        <h2>maplocation <a href="maplocationAdd.php" class="btn btn-primary pull-right">Add</a></h2>
    </div>
        <div class="row">
            <div class="col-lg-12">
                               
                <div class="table-responsive" style="margin-top:10px;">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead><tr><th>S.No</th><th>State Name</th><th>Location</th><th>Action</th></tr></thead>
                        <tfoot><tr><th>S.No</th><th>State Name</th><th>Location</th><th>Action</th></tr></tfoot>
                        <tbody>
                            <?php
                            $sql = "select * from map";
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['stateName']; ?></td><td><?php echo $row['location']; ?></td>
                                    <td><a href="maplocationEdit.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Edit</a>&ensp;
									<a href="maplocationDelete.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Delete</a></td>
                                </tr>
                            <?php
							$i++;
							} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include 'adminfooter.php';?>