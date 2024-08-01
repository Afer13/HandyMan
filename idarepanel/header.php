<?php include 'baglan.php';
session_start();
if(!isset($_SESSION['admin_username']))
{
    header('Location:login.php?loginppp=no');
}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
</head>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">İDARƏETMƏ PANELİ</a>
            </div>

            <div class="header-right">
                <a href="hesab.php"><button type="button" class="btn btn-lg btn-primary">Hesab</button></a>
                <?php $mesajSorgu=mysqli_query($baglan,"select*from mesajlar");
                    $mesajSay=mysqli_num_rows($mesajSorgu);
                ?>
                <a href="mesajlar.php" class="btn btn-lg btn-primary" title="Mesajlar"><b><?php echo $mesajSay; ?>  </b><i class="fa fa-envelope fa"></i></a>
                <a href="cixiset.php"  class="btn btn-lg btn-danger" title="Logout"><i  class="fa fa-exclamation-circle "></i>Çıxış Et</a>
            </div>
        </nav>