<?php
include 'adminheader.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header"><h2>Add loans</h2></div>                
                <div class="table-responsive">
                    <table  id="tbl"  class="display table table-bordered table-hover table-striped">
                        <form action="loansAddAction.php" method="post" enctype="multipart/form-data">
                            <tbody>                                                              
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" class="ckeditor" name="loansName" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>JLG Loan</td>
                                    <td><input type="text" class="ckeditor" name="JLGLoan" />
                                    Note: for new line please use &lt;br&gt; tag.</td>
                                </tr>
                                <tr>
                                    <td>IML Loan</td>
                                    <td><input type="text" class="ckeditor" name="IMLLoan" />
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