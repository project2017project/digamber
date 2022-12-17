<?php
include 'adminheader.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Add pictorial</h2></div>                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="pictorialAddAction.php" method="post" enctype="multipart/form-data">
                            <tbody>                                                              
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" class="ckeditor" name="pictorialName" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr class="active">
                                    <td>Image</td>
                                    <td>
                                        <input type="file" name="pic">
                                        <br /><b>Plz Image size </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td> <textarea name='pictorialMessage' class="ckeditor"></textarea></td>
                                </tr>
                                <tr>
                                    <td>URL</td>
                                    <td><input type="text" class="ckeditor" name="pictorialPlace" />
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