
<?php 
include 'header.php';
session_start();
if(!isset($_SESSION['admin_username']))
{
    header('Location:login.php');
}
include 'sidebar.php';
?>
<!-- INDEX GÖVDƏ ------------------------ ---------- -->



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İdarəetmə paneli</title>

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

        
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">'HAQQINDA' MENUSUNDA YERLƏŞƏN MƏLUMAT</h1>
                        <h1 class="page-subhead-line">Handymen vebsaytındakı 'Haqqında' menusunu buradan düzəliş edə bilərsiniz !</h1>
                        <?php 
                            $haqqSorgu=mysqli_query($baglan,"select*from haqqinda");
                            $haqqCek=mysqli_fetch_assoc($haqqSorgu);
                         ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            <?php echo $haqqCek['haqqinda']; ?>
                            <br /><br />                          
                        </div>
                    </div>
                </div>
                <a href="haqqindaduzalis.php"><button style="margin-left: 25px;width: 95%;" type="button" class="btn btn-lg btn-success">Məlumatı Yenilə</button></a>
                    </div>
                </div>
                <!-- /. ROW  -->                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->




<!-- INDEX GÖVDƏ ------------------------ ---------- -->

<?php include 'footer.php' ?>