<?php
include 'adminheader.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Add Location</h2></div>                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="maplocationAddAction.php" method="post" enctype="multipart/form-data">
                            <tbody>                                                              
                                <tr>
                                    <td>State Name</td>
                                    <td><input type="text" class="ckeditor" name="stateName" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Co-ordinates</td>
                                    <td><input type="text" class="ckeditor" name="coordinates" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branches</td>
                                    <td><input type="text" class="ckeditor" name="branches" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Portfolio</td>
                                    <td><input type="text" class="ckeditor" name="portfolio" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>Members</td>
                                    <td><input type="text" class="ckeditor" name="members" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
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