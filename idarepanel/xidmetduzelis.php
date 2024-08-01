
<?php 
include 'header.php';
include 'sidebar.php';
include 'baglan.php';
$xidmet_id8=$_GET['xidmetid7'];  
$xidmetSorgu=mysqli_query($baglan,"select*from xidmetler where xidmet_id='$xidmet_id8'");
$xidmetCek=mysqli_fetch_assoc($xidmetSorgu); 
?>
<!-- INDEX GÖVDƏ ------------------------ ---------- -->



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Xidmət Yeniləmə</title>

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
                    <h1 class="page-head-line">XİDMƏT YENİLƏMƏ</h1>
                    <h1 class="page-subhead-line">Xidmətləri buradan yeniliyə bilərsiniz...</h1>
                </div>
                <div class="row">
            <div style="margin-left: 60px;" class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           XİDMƏT - YENİLƏ
                        </div>
                        

                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label> Qısa Ad</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $xidmetCek['xidmet_qisaad']; ?>" name="xidmet_qisaad5">
                                        </div>
                                        <div class="form-group">
                                            <label>Xidmət Adı</label>

                                            <input class="form-control" required="" type="hidden" value="<?php echo $xidmetCek['xidmet_id']; ?>" name="xidmet_id5">

                                            <input class="form-control" required="" type="text" value="<?php echo $xidmetCek['xidmet_ad']; ?>" name="xidmet_ad5">
                                        </div>
                                        <div class="form-group">
                                            <label> Qısa Məlumat</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $xidmetCek['xidmet_qmelumat']; ?>" name="xidmet_qmelumat5">
                                        </div>
                                        <div class="form-group">
                                            <label> Qiyməti</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $xidmetCek['xidmet_qiymet']; ?>" name="xidmet_qiymet5">
                                        </div> 
                                        <div class="form-group">
                                            <label> Sıra</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $xidmetCek['xidmet_sira']; ?>" name="xidmet_sira5">
                                        </div>
                                        <div class="form-group">
                                            <label> Ana Menu</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $xidmetCek['xidmet_anamenu']; ?>" name="xidmet_anamenu5">
                                        </div>

                                        <label> Şəkli</label>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                            <div>
                                                                <span class="btn btn-file btn-success"><span class="fileupload-new">Şəkil seç</span><span class="fileupload-exists">Dəyişdir</span><input type="file" name="xsekilsec"></span>
                                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
                                                            </div>
                                                        </div>

                                        <button style="margin-top: 10px;width: 100%;" type="submit" class="btn btn-info" name="xidmet_duzaliset">YENİLƏ </button>

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

<?php include 'footer.php' 

?>