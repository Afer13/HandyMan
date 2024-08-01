
<?php 
include 'baglan.php';
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
                        <h1 class="page-head-line">MESAJLAR</h1>        
                    </div>

                    <?php
                    $mesajSorgu=mysqli_query($baglan,"select*from mesajlar");
                    while($mesajCek=mysqli_fetch_assoc($mesajSorgu)){?>


                    <div style="margin-left: 90px;" class="col-md-10 col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Ad : <?php echo $mesajCek['tamad']; ?>
                            </div>
                            <div class="panel-footer">
                            E-mail : <?php echo $mesajCek['email']; ?>
                            </div>
                            <div class="panel-footer">
                            Telefon : <?php echo $mesajCek['telefon']; ?>
                            </div>
                            <div  class="panel-body">
                                <p>Mesaj : </p><br>
                                <p><?php echo $mesajCek['mesaj']; ?></p><br>
                                <p><?php echo $mesajCek['mesaj_zaman']; ?></p>
                            </div>
                            
                        </div>
                    </div>
                <?php } ?>

                </div>
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