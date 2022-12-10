<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `competencies_type` where id='" . $c_id . "'";
$res = $mysqli->query($sql);
$data = mysqli_fetch_array($res);
//echo $data;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header">
                    <h2>Edit Compentency</h2>
                </div>
                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="competencies-type-edit-action.php" method="post" name="loginform" enctype="multipart/form-data">
                             <tbody>                                
                                <tr class="active">
                                    <td>Competencies Type</td>
                                    <td>
                                        <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        <input type="text" name="competencies_type_name" value="<?php echo $data['competencies_type_name']; ?>">
                                    </td>
                                </tr>
                                <tr class="danger"><td colspan="2" align="center"><input type="submit" class="btn-danger btn"></td></tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

<?php include 'adminfooter.php';?>