<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `map` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit Location</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="maplocationEditAction.php" method="post">
                            <tbody>
                                <tr>
                                    <td>State Name</td>
                                    <td><input type="hidden" name="id" value="<?php echo $settings['id']; ?>"/>
                                    <input type="text" class="ckeditor" name="stateName" value="<?php echo $settings['stateName']; ?>"/>
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Co-ordinates</td>
                                    <td><input type="text" class="ckeditor" name="coordinates" value="<?php echo $settings['coordinates']; ?>"/>
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branches</td>
                                    <td><input type="text" class="ckeditor" name="branches" value="<?php echo $settings['branches']; ?>"/>
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Portfolio</td>
                                    <td><input type="text" class="ckeditor" name="portfolio" value="<?php echo $settings['portfolio']; ?>"/>
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Members</td>
                                    <td><input type="text" class="ckeditor" name="members" value="<?php echo $settings['members']; ?>"/>
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