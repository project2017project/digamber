<?php
include 'adminheader.php';
$c_id = 1;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit Home Stake</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="Edit_Home_Stake_action.php" method="post" name="loginform" enctype="multipart/form-data">
                            <tbody>                                
                                <tr>
                                    <td>Heading </td>
                                    <input type="hidden" value="1" name="id" />
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['stakeHeading']; ?>" name="stakeHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td> <textarea name='stakeMessage' class="ckeditor"><?php echo $settings['stakeMessage'];?></textarea></td>
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