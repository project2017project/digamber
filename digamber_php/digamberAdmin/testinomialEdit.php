<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `testinomial` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit testinomial</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="testinomialEditAction.php" method="post" enctype="multipart/form-data">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['testinomialName']; ?>" name="testinomialName" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr class="active">
                                    <td>Partner Image</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        <img src="../../images/testinomial/<?php echo $settings['testinomialImage']; ?>" width="150" height="140" style="border:#000 solid 1px;" />
                                        <br />
                                        <input type="file" name="pic">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td> <textarea name='testinomialMessage' class="ckeditor"><?php echo $settings['testinomialMessage'];?></textarea></td>
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