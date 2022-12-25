<?php
include 'adminheader.php';
?>
<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="main-header"><h2>Add Investors</h2></div>
            <div class="table-responsive">
                <table id="tbl" class="display table table-bordered table-hover table-striped">
                    <form action="investorsAddAction.php" method="post">
                        <tbody>
                            <tr>
                                <td>Investors Name</td>
                                <td>
                                    <input type="text" name='investorsName'>
                                </td>
                            </tr>
                            <tr class="active">
                                <td>Investors Type</td>
                                <td>
                                    <select name="investorsType">
                                        <option>Select Any Investors Type</option>
                                        <?php
                                            $sql = "select * from investorstype";
                                            $res = $mysqli->query($sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>">
                                            <?php echo $row['investorsTypeName']; ?></option>
                                        <?php
                                            } 
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td class="iconsetadmin">
                                    <textarea class="ckeditor" name='investorsMessgae' ></textarea>
                                </td>
                            </tr>                            
                            <tr class="danger">
                                <td colspan="2"><input type="submit" class="btn-success btn"></td>
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