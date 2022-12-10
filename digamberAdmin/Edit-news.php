<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `competencies` where id='" . $c_id . "'";
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
                        <form action="Edit-news-action.php" method="post" name="loginform" enctype="multipart/form-data">
                             <tbody>
                             <tr class="active">
                                    <td>Compentency Type</td>
                                    <td>
										<select name="conpentencytype">
											<option >Select Any Compentency Type</option>
                                            <?php
                                            $sql = "select * from competencies_type";
                                            $res = $mysqli->query($sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                                <option value="<?php echo $row['id']; ?>" <?php if($data['competencies_type_id']==$row['id']){echo "selected";}?>><?php echo $row['competencies_type_name']; ?></option>
                                            <?php
                                            } ?>
										</select>								
									</td>
                                </tr>
                                
                                        <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        
                                <tr>
                                    <td>Description</td>
                                    <td class="iconsetadmin">
                                        <textarea name='description' class="ckeditor"><?php echo $data['description'];?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description Review</td>
                                    <td class="iconsetadmin">
                                        <textarea name='description_review' class="ckeditor"><?php echo $data['description_review'];?></textarea>
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td colspan="2" align="center"><input type="submit" class="btn-danger btn"></td>

                                </tr>

                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
            <?php /* ?><div class="col-lg-6">

              </div><?php */ ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

<?php include 'adminfooter.php';?>