<?php
include 'adminheader.php';
$sql = "select * from `users` where User_Id=1";
$res = $mysqli->query($sql);
$data = mysqli_fetch_array($res);
//echo $data;
?>
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Admin Details</h2>
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="editprofile-action.php" method="post" name="loginform" onsubmit="return loginvalidation()" enctype="multipart/form-data">
                             <tbody>
                                
                                <tr class="active">
                                    <td>User Name</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $data['User_Id']; ?>" name="User_Id" />
                                        <input type="text" name="User_Name" value="<?php echo $data['User_Name']; ?>"></td>
                                </tr>
								<tr class="active">
                                    <td>Password</td>
                                    <td>
                                        <input type="password" name="User_Password" value="<?php echo $data['User_Password']; ?>"></td>
                                </tr>
								<tr class="danger">
                                    <td colspan="2" align="center"><input type="submit" class="btn-success btn"></td>
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
            <?php /* ?><div class="col-lg-6">
              </div><?php */ ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
<?php include 'adminfooter.php';?>