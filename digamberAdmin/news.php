<?php
include 'adminheader.php';
?>

<div class="container-fluid">
    <div class="main-header">
        <h2>Compentency <a href="Add-news.php" class="btn btn-primary pull-right">Add</a></h2>
    </div>
        <div class="row">
            <div class="col-lg-12">
                               
                <div class="table-responsive" style="margin-top:10px;">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Competencies Type </th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Competencies Type </th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $sql = "select  competencies.id as competenciesId, 
                                            competencies.name as competenciesName, 
                                            competencies_type.competencies_type_name as competenciesTypeName, 
                                            competencies.updated as date  from competencies LEFT JOIN competencies_type ON(competencies.competencies_type_id = competencies_type.id)";
                            //echo $sql;exit;
                            $res = $mysqli->query($sql);
							$i=1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['competenciesName']; ?></td>
                                    <td><?php echo $row['competenciesTypeName']; ?></td>
									<td><?php echo $row['date']; ?></td>
                                    <td align="center"><a href="Edit-news.php?id=<?php echo $row['competenciesId']; ?>" class="btn btn-danger">Edit</a>&ensp;
									<a href="delete-news.php?id=<?php echo $row['competenciesId']; ?>" class="btn-danger btn">Delete</a></td>
                                </tr>
                            <?php
							$i++;
							} ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->


<!-- /#page-wrapper -->
<?php include 'adminfooter.php';?>