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
                        <form action="contactGetInTouchEditAction.php" method="post" enctype="multipart/form-data">
                            <tbody>
                                <tr class="active">
                                    <td>Image</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        <img src="../../../images/banner/<?php echo $settings['bannerImage']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
                                        <br />
                                        <input type="file" name="pic">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Registered Office </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['bannerHeading']; ?>" name="bannerHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td> <input type="text" class="ckeditor" value="<?php echo $settings['bannerSubHeading']; ?>" name="bannerSubHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Toll Free No. </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['aboutHeading']; ?>" name="aboutHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Mail Us</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['popupHeading']; ?>" name="popupHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Follow Us On</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loanHeading']; ?>" name="loanHeading" />
                                    Note: for new line please use &lt;br&gt; tag.
                                    <input type="text" class="ckeditor" value="<?php echo $settings['loanSubHeading']; ?>" name="loanSubHeading" />
                                    Note: for new line please use &lt;br&gt; tag.
                                    <input type="text" class="ckeditor" value="<?php echo $settings['loanHeading1']; ?>" name="loanHeading1" />
                                    Note: for new line please use &lt;br&gt; tag.
                                    <input type="text" class="ckeditor" value="<?php echo $settings['loanpopupHeading1']; ?>" name="loanpopupHeading1" />
                                    Note: for new line please use &lt;br&gt; tag.
                                </td>
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