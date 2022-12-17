<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `reviews` where id='" . $c_id . "'";
$res = $mysqli->query($sql);
$data = mysqli_fetch_array($res);
//echo $data;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header">
                    <h2>Upadate Reiew</h2>
                </div>
                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="reviewerslist-edit-action.php" method="post" name="loginform" enctype="multipart/form-data">
                             <tbody>                                
                                <tr class="active">
                                    <td>Review Category</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        <lable><?php echo $data['reviewer_category']; ?></label>
                                        <select name="reviewer_category">
											<option >Select Any review Type</option>
                                            <option value="self">Self</option><option value="direct-employee">Direct Employee</option><option value="peer">Peer</option>
										</select>	
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>Reviewer</td>
                                    <td>
                                        <input type="text" name="reviewer" value="<?php echo $data['reviewer']; ?>" readonly>
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>Reviewee</td>
                                    <td>
                                        <input type="text" name="reviewee" value="<?php echo $data['reviewee']; ?>"  readonly >
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>Survey ID</td>
                                    <td>
                                        <input type="text" name="survey_id" value="<?php echo $data['survey_id']; ?>"  readonly >
                                    </td>
                                </tr>
                                <tr class="danger"><td colspan="2" align="center"><input type="submit" class="btn-danger btn"></td></tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

<?php include 'adminfooter.php';?>