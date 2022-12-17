<?php
include 'adminheader.php';
$c_id = 2;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit Product About</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="productEditAboutAction.php" method="post" name="loginform" enctype="multipart/form-data">
                            <tbody>
                                <tr>
                                    <td>Message</td>
                                    <td><input type="hidden" value="2" name="id" /> 
                                        <textarea name='aboutMessage' class="ckeditor"><?php echo $settings['aboutMessage'];?></textarea></td>
                                </tr>
                                <tr class="danger"><td colspan="2"><input type="submit" class="btn-success btn"></td></tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include 'adminfooter.php';?>