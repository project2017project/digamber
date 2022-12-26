<?php
include 'adminheader.php';
$c_id = 4;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit About Page</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="aboutPageEditAction.php" method="post" name="loginform" enctype="multipart/form-data">
                            <tbody>
                                <tr class="active">
                                    <td>Image</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id;?>" name="id" />
                                        <img src="../../images/about/<?php echo $settings['aboutImage']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
                                        <br />
                                        <input type="file" name="pic">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heading </td>
                                    <td><input type="text" value="<?php echo $settings['aboutHeading']; ?>" name="aboutHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td><input type="text" value="<?php echo $settings['aboutMessage']; ?>" name="aboutMessage" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Popup Heading </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['popupHeading']; ?>" name="popupHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Popup Message</td>
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