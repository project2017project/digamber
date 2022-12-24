<?php
include 'adminheader.php';
$c_id = 3;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit Contact Infomation</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="contactGetInTouchListAction.php" method="post" enctype="multipart/form-data">
                            <tbody>                                
                                <tr>
                                    <td>Customer Grievance Officer</td>
                                    <td><input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                    <input type="text" class="ckeditor" value="<?php echo $settings['loanHeading2']; ?>" name="loanHeading2" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td> <input type="text" class="ckeditor" value="<?php echo $settings['loanpopupHeading2']; ?>" name="loanpopupHeading2" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Mail Us</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['stakeHeading']; ?>" name="stakeHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Written Complain Address :</td>
                                    <td> <textarea name='aboutMessage' class="ckeditor"><?php echo $settings['aboutMessage'];?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Written Complain Address Hindi:</td>
                                    <td> <textarea name='popupMessage' class="ckeditor"><?php echo $settings['popupMessage'];?></textarea></td>
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