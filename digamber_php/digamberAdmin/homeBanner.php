<?php
include 'adminheader.php';
?>

    <div class="container-fluid">
        <div class="main-header">
            <h2>Home Banner <a href="homeBannerAdd.php" class="btn btn-primary pull-right">Add</a></h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" style="margin-top:10px;">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead><tr><th>S.No</th><th>Heading</th><th>Image</th><th>Action</th></tr></thead>
                        <tfoot><tr><th>S.No</th><th>Heading</th><th>Image</th><th>Action</th></tr></tfoot>
                        <tbody>
                            <?php
                            $homebannersql = "select * from `homebanner`";
                            $homebannerres = $mysqli->query($homebannersql);
                            $i = 1;
                            while ($homebanner = mysqli_fetch_array($homebannerres)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $homebanner['bannerHeading']; ?></td>
                                    <td><img src="../../images/Home_Banner/<?php echo $homebanner['bannerImage']; ?>" width="150" height="140" style="border:#000 solid 1px;"/></td>
                                    <td><a href="homeBannerEdit.php?id=<?php echo $homebanner['id']; ?>" class="btn btn-primary">Edit</a>
                                        &ensp;<a onclick="return confirm('Are you sure, you want to delete this image?')" 
                                                 href="homeBannerDelete.php?id=<?php echo $homebanner['id']; ?>"
                                                 class="btn-success btn">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

<?php include 'adminfooter.php';?>