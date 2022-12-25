<?php
include 'adminheader.php';
$c_id = $_REQUEST['id'];
$sql = "select * from `investors` where id='" . $c_id . "'";
$res = $mysqli->query($sql);
$data = mysqli_fetch_array($res);
//echo $data;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Edit Investors</h2></div>
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="investorsEditAction.php" method="post">
                             <tbody>
                                <tr>
                                    <td>Investors Name</td>
                                    <td>
                                        <input type="text" name='investorsName' value="<?php echo $data['investorsName'];?>">
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>Investors Type</td>
                                    <td>
										<select name="investorstype">
											<option >Select Any Investors Type</option>
                                            <?php
                                            $sql = "select * from investorstype";
                                            $res = $mysqli->query($sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                                <option value="<?php echo $row['id']; ?>" <?php if($data['investorsType']==$row['id']){echo "selected";}?>>
                                                <?php echo $row['investorsTypeName']; ?></option>
                                            <?php
                                            } ?>
										</select>								
									</td>
                                </tr>
                                
                                        <input type="hidden" value="<?php echo $c_id; ?>" name="id" />
                                        
                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <textarea class="ckeditor" name='investorsMessgae'><?php echo $data['investorsMessgae'];?></textarea>
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