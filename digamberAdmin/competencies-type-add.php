<?php include 'adminheader.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-header">
                <h2>Add Competencies Type</h2>
            </div>
            
            <div class="table-responsive">
                <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                    <form action="competencies-type-add-action.php" method="post" name="loginform" enctype="multipart/form-data">                  
                        <tbody>                                
                            <tr class="active"><td>Competencies Type Name</td><td><input type="text" name="competencies_type_name"></td></tr>
                            <tr class="danger">                                     
                                <td colspan="2" align="center"><input type="submit" class="btn btn-danger"></td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'adminfooter.php';?>