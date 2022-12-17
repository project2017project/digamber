<?php
include 'adminheader.php';
?>


    <div class="container-fluid">
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="main-header">
                    <h2>Add News</h2>
                </div>                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="Add-news-action.php" method="post" name="loginform" onsubmit="return loginvalidation()" enctype="multipart/form-data">
                            
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
                                                <option value="<?php echo $row['id'].'/'.$row['competencies_type_name']; ?>"><?php echo $row['competencies_type_name']; ?></option>
                                            <?php
                                            } ?>
										</select>								
									</td>
                                </tr>                                                               
                                <tr>
                                    <td>Description</td>
                                    <td class="iconsetadmin">
                                        <textarea name='description' class="ckeditor"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description Review</td>
                                    <td class="iconsetadmin">
                                        <textarea name='description_review' class="ckeditor"></textarea>
                                    </td>
                                </tr>
                                <tr class="danger">                                     
                                    <td colspan="2" align="center"><input type="submit" class="btn-success btn"></td>
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