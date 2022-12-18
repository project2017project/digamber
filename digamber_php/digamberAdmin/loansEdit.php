<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `loans` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);
//print_r($settings);die;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit loans</h2></div>
                <div class="table-responsive">
                    <table id="tbl" class="display table table-bordered table-hover table-striped">
                        <form action="loansEditAction.php" method="post" enctype="multipart/form-data">
                            <tbody>
                                <tr>
                                <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                    <td>Name</td>
                                    <td><input type="text" class="ckeditor" value="<?php echo $settings['loansName']; ?>" name="loansName" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>JLG Loan</td>
                                    <td><input type="text" class="ckeditor" name="JLGLoan" value="<?php echo $settings['JLGLoan']; ?>" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>IML Loan</td>
                                    <td><input type="text" class="ckeditor" name="IMLLoan" value="<?php echo $settings['IMLLoan']; ?>" />
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