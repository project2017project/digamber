<?php
include 'adminheader.php';
$c_id = 5;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit CSR Banner</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="csrBannerEditAction.php" method="post" name="loginform" enctype="multipart/form-data">
                            <tbody>
                                <tr class="active">
                                    <td>Image</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id;?>" name="id" />
                                        <img src="../../../images/CSR_Banner/<?php echo $settings['bannerImage']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
                                        <br />
                                        <input type="file" name="pic">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heading </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['bannerHeading']; ?>" name="bannerHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Sub Heading</td>
                                    <td> <input type="text" class="ckeditor" value="<?php echo $settings['bannerSubHeading']; ?>" name="bannerSubHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td> <textarea name='aboutMessage' class="ckeditor"><?php echo $settings['aboutMessage'];?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Heading </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['aboutHeading']; ?>" name="aboutHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Heading</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loanHeading']; ?>" name="loanHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>SubHeading</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loanSubHeading']; ?>" name="loanSubHeading" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Heading 1 </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loanHeading1']; ?>" name="loanHeading1" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
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