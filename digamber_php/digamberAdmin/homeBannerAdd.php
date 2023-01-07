<?php
include'adminheader.php';
?>
<div class="container-fluid">
    <div class="main-header">
        <h2>Add Home Banner</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">            
            <div class="table-responsive">
                <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                    <form action="homeBannerAddAction.php" method="post" enctype="multipart/form-data">
                        <tbody>
                            <tr class="active">
                                <td>Images</td>
                                <td><input type="file" name="pic"> <br/><b>Plz Image size </b></td>
                            </tr>
                            <tr><td>Image on Heading</td><td> <input type="text"  name="bannerHeading" /></td>
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
<?php include 'adminfooter.php'?>