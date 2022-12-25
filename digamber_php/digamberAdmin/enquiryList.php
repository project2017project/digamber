<?php
include 'adminheader.php';
?>

<div class="container-fluid">
    <div class="main-header">
        <h2>Enquiry</h2>
    </div>
        <div class="row">
            <div class="col-lg-12">
                               
                <div class="table-responsive" style="margin-top:10px;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead><tr> <th>S.No</th><th>Name</th><th>Email</th><th>Phone Number</th>
                                    <th>Current Role</th><th>Previous Exp</th><th>Total Exp</th><th>File</th>
                                    <th>Message</th></tr></thead>
                        <tfoot><tr><th>S.No</th><th>Name</th><th>Email</th><th>Phone Number</th>
                                    <th>Current Role</th><th>Previous Exp</th><th>Total Exp</th><th>File</th>
                                    <th>Message</th></tr></tfoot>
                        <tbody>
                            <?php
                            $sql = "select * from enquire";
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['gender'] .' ' . $row['fullName']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['contactNumber']; ?></td>
                                    <td><?php echo $row['currentRole']; ?></td>
                                    <td><?php echo $row['previousExp']; ?></td>
                                    <td><?php echo $row['totalExp']; ?></td>
                                    <td><a href="../../images/career/<?php echo $row['uploadfile']; ?>"><?php echo $row['uploadfile']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
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