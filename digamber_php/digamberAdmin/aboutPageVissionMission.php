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
                <div class="main-header"><h2>Edit Vission/Mission</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="aboutPageVissionMissionAction.php" method="post" enctype="multipart/form-data">
                            <tbody>
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
                                <tr class="active">
                                    <td>Image 1</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id;?>" name="id" />
                                        <img src="../../images/about/<?php echo $settings['loanImage1']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
                                        <br />
                                        <input type="file" name="pic1">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>Image 1</td>
                                    <td>
                                        <img src="../../images/about/<?php echo $settings['loanImage2']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
                                        <br />
                                        <input type="file" name="pic2">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heading 1 </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loanHeading2']; ?>" name="loanHeading2" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Message 1</td>
                                    <td> <textarea name='loanMessage2' class="ckeditor"><?php echo $settings['loanMessage2'];?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Popup Heading </td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loanpopupHeading2']; ?>" name="loanpopupHeading2" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Popup Message</td>
                                    <td> <textarea name='loanpopupMessage2' class="ckeditor"><?php echo $settings['loanpopupMessage2'];?></textarea></td>
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