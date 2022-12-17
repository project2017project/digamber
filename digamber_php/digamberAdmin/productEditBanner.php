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
                <div class="main-header"><h2>Edit Product Banner</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="productEditBannerAction.php" method="post" enctype="multipart/form-data">
                            <tbody>
                                <tr class="active">
                                    <td>Image</td>
                                    <td>
                                        <input type="hidden" value="2" name="id" />
                                        <img src="../../images/Home_Banner/<?php echo $settings['bannerImage']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
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
                                <tr class="danger"><td colspan="2"><input type="submit" class="btn-success btn"></td></tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include 'adminfooter.php';?>