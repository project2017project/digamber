<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `job` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit job</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="jobEditAction.php" method="post">
                            <tbody>
                                <tr>
                                    <td>Role</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['jobRole']; ?>" name="jobRole" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr class="active">
                                    <td>Location</td>
                                    <td><input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        <input type="text" class="ckeditor" value="<?php echo $settings['jobLocation']; ?>" name="jobLocation" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['jobDepartment']; ?>" name="jobDepartment" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Experience</td>
                                    <td><input type="text" class="ckeditor" name="jobExperience" value="<?php echo $settings['jobExperience']; ?>" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td> <textarea name='jobDescription' class="ckeditor"><?php echo $settings['jobDescription']; ?></textarea></td>
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