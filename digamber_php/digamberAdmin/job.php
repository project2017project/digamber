<?php
include 'adminheader.php';
?>

<div class="container-fluid">
    <div class="main-header">
        <h2>job <a href="jobAdd.php" class="btn btn-primary pull-right">Add</a></h2>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive" style="margin-top:10px;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Role</th>
                            <th>Location</th>
                            <th>Department</th>
                            <th>Experience</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>S.No</th>
                            <th>Role</th>
                            <th>Location</th>
                            <th>Department</th>
                            <th>Experience</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            $sql = "select * from job";
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['jobRole']; ?></td>
                            <td><?php echo $row['jobLocation']; ?></td>
                            <td><?php echo $row['jobDepartment']; ?></td>
                            <td><?php echo $row['jobExperience']; ?></td>
                            <td><a href="jobEdit.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Edit</a>&ensp;
                                <a href="jobDelete.php?id=<?php echo $row['id']; ?>" class="btn-danger btn">Delete</a>
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
</div>
<?php include 'adminfooter.php';?>