

<!--
    <td><a href="slaydduzelis.php?slaydid7=<?php //echo $slaydCek['slayd_id'];?>"><button type="button" class="btn btn-sm btn-primary" name="slaydduzaliset">Düzəliş et</button></a></td> 
-->

<?php 
include 'header.php';
include 'sidebar.php';
include 'baglan.php';
$slayd_id8=$_GET['slaydid7'];  
$slaydSorgu=mysqli_query($baglan,"select*from slaydlar where slayd_id='$slayd_id8'");
$slaydCek=mysqli_fetch_assoc($slaydSorgu); 
?>
<!-- INDEX GÖVDƏ ------------------------ ---------- -->



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Slayd Yeniləmə</title>

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
                    <h1 class="page-head-line">SLAYD YENİLƏMƏ</h1>
                    <h1 class="page-subhead-line">Slaydları buradan yeniliyə bilərsiniz...</h1>
                </div>
                <div class="row">
            <div style="margin-left: 60px;" class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">

                        <div class="panel-heading">
                           SLAYD - YENİLƏ
                        </div>

                        <div class="panel-body">
                            <form role="form">

                                        <label>Slayd Şəkli</label>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                            <div>
                                                                <span class="btn btn-file btn-success"><span class="fileupload-new">Şəkil seç</span><span class="fileupload-exists">Dəyişdir</span><input type="file" name="sekilsec"></span>
                                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
                                                            </div>
                                                        </div>


                                        <div class="form-group">
                                            <label>Slayd Adı</label>
                                            <input class="form-control" required="" type="hidden" value="<?php echo $slaydCek['slayd_id']; ?>" name="slayd_id5">
                                            <input class="form-control" required="" type="text" value="<?php echo $slaydCek['slayd_ad']; ?>" name="slayd_ad5">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label> Slayd URL</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $slaydCek['slayd_url']; ?>" name="slayd_url5">
                                        </div>
                                        <div class="form-group">
                                            <label> Slayd Sıra</label>
                                            <input class="form-control" required="" type="number" value="<?php echo $slaydCek['slayd_sira']; ?>" name="slayd_sira5">
                                        </div>                                
                                        <button style="margin-top: 10px;width: 100%;" type="submit" class="btn btn-info" name="slayd_duzaliset">DÜZƏLİŞ ET </button>

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