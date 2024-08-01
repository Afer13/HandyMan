
<?php 
include 'header.php';
include 'sidebar.php';
include 'baglan.php';
$hesab_id=$_GET['hesab_id'];  
$hesabSorgu=mysqli_query($baglan,"select*from admin where hesab_ID ='$hesab_id'");
$hesabCek=mysqli_fetch_assoc($hesabSorgu); 
?>
<!-- INDEX GÖVDƏ ------------------------ ---------- -->



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hesab Yeniləmə</title>

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
                    <h1 class="page-head-line">HESAB MƏLUMATLARINI YENİLƏMƏ</h1>
                    <h1 class="page-subhead-line">Hesab məlumatlarını buradan yeniliyə bilərsiniz...</h1>
                </div>
                <input class="form-control" required="" type="hidden" value="<?php echo $hesabCek['hesab_id']; ?>" name="hesab_id">
                <div class="row">
            <div style="margin-left: 60px;" class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           HESAB - AD
                        </div>
                        

                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Hesab Adı</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $hesabCek['hesab_ad']; ?>" name="hesab_ad">
                                        </div>
                                        <div class="form-group">
                                            <label>User_name</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $hesabCek['hesab_username']; ?>" name="hesab_username">
                                        </div>                                
                                        

                                        
                                        <button style="margin-top: 10px;width: 100%;" type="submit" class="btn btn-info" name="hesab_duzaliset">YENİLƏ </button>
                                    </form>
                            </div>
                        </div>
            </div>

            

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