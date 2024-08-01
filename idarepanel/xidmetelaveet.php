
<?php 
include 'header.php';
include 'sidebar.php';
include 'baglan.php';
?>
<!-- INDEX GÖVDƏ ------------------------ ---------- -->



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Xidmət Əlavə Et</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!--CUSTOM BASIC STYLES-->
        <link href="assets/css/basic.css" rel="stylesheet" />
        <!--CUSTOM MAIN STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>

<form action="emeliyyat.php" method="POST" enctype="multipart/form-data">
    
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Xidmətlər</h1>
                    <h1 class="page-subhead-line">Xidmətləri buradan əlavə edə bilərsiniz...</h1>
                </div>
                <div class="row">
            <div style="margin-left: 60px;" class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           XİDMƏT - ƏLAVƏ ET
                        </div>

                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Xidmət Qısa Adı</label>
                                            <input class="form-control" required="" type="text" name="xidmet_qisaad">
                                        </div>
                                        <div class="form-group">
                                            <label>Adı</label>
                                            <input class="form-control" required="" type="text" name="xidmet_ad">
                                        </div>
                                        <div class="form-group">
                                            <label>Qısa Məlumat</label>
                                            <input class="form-control" required="" type="text" name="xidmet_qmelumat">
                                        </div>
                                        <div class="form-group">
                                            <label>Qiymət</label>
                                            <input class="form-control" required="" type="text" name="xidmet_qiymet">
                                        </div>
                                        <div class="form-group">
                                            <label>Sıra</label>
                                            <input class="form-control" required="" type="text" name="xidmet_sira">
                                        </div>

                                        <div class="panel-body">
                                        <div class="form-group">
                                            <label>Ana Menu</label>
                                            <select name="xidmet_anamenu" class="form-control">
                                                    <option value="0">Xeyir</option>
                                                    <option value="1">Bəli</option>            
                                            </select>
                                        </div>
                                                    <label>Xidmət Şəkli</label>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                            <div>
                                                                <span class="btn btn-file btn-success"><span class="fileupload-new">Şəkil seç</span><span class="fileupload-exists">Dəyişdir</span><input type="file" name="xsekilsec"></span>
                                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
                                                            </div>
                                                        </div>
                                                </div>
                                  
                                        <button style="margin-top: 10px;width: 100%;" type="submit" class="btn btn-info" name="xidmet_elaveet">ƏLAVƏ ET </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->
</div>


<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->




<!-- INDEX GÖVDƏ ------------------------ ---------- -->

<?php include 'footer.php' ?>