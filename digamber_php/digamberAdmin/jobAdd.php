<?php
include 'adminheader.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Add job</h2></div>                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="jobAddAction.php" method="post" enctype="multipart/form-data">
                            <tbody>                                                              
                                <tr>
                                    <td>Role</td>
                                    <td><input type="text" class="ckeditor" name="jobRole" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr class="active">
                                    <td>Location</td>
                                    <td><input type="text" class="ckeditor" name="jobLocation" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td><input type="text" class="ckeditor" name="jobDepartment" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Experience</td>
                                    <td><input type="text" class="ckeditor" name="jobExperience" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td> <textarea name='jobDescription' class="ckeditor"></textarea></td>
                                </tr>
                                <tr class="danger">                                     
                                    <td colspan="2"><input type="submit" class="btn-success btn"></td>
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include 'adminfooter.php';?>