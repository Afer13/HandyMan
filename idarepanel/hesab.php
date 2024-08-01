
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
                        <h1 class="page-head-line">HESAB</h1>
                        <h1 class="page-subhead-line">Hesab haqqında məlumatlara(hesab adı,şifrə profil şəkli) buradan baxa və düzəliş edə bilərsiniz . </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="main-box mb-red">
                            <?php 
                            $hesabSorgu=mysqli_query($baglan,"select*from admin");
                            $hesabCek=mysqli_fetch_assoc($hesabSorgu);
                            ?>
                                <i class="fa fa-5x"></i>
                                <img style="width: 150px" src="<?php echo $hesabCek['hesab_sekilyol']; ?>" class="img-thumbnail">
                                <h5 style="font-size: 20px;font-style: italic;" >PROFİL ŞƏKLİ</h5>
                        </div>
                    </div>
                    <div style="padding-top: 10px;" class="panel-body">
                            <h4 class="alert alert-info" style="line-height:40px;font-style: italic;">
                            <b>HESAB ADI :</b> <?php echo $hesabCek['hesab_ad']; ?> <br>
                            <b>USER_NAME :</b> <?php echo $hesabCek['hesab_username']; ?>
                           </h4>
                    </div>
                    <a href="hesabduzalis.php?hesab_id=<?php echo $hesabCek['hesab_id']; ?>"><button style="margin-left: 25px;width: 95%;" type="button" class="btn btn-lg btn-primary">Hesab Adını və UesrName Yenilə</button></a>
                    <a href="hesab-paroldeyis.php?hesab_id=<?php echo $hesabCek['hesab_id']; ?>"><button style="margin-left: 25px;width: 95%;" type="button" class="btn btn-lg btn-danger">Hesab Parolunu Yenilə</button></a>
                    <a href="hesab-sekildeyis.php?hesab_id=<?php echo $hesabCek['hesab_id']; ?>"><button style="margin-left: 25px;width: 95%;" type="button" class="btn btn-lg btn-success">Profil Şəklini Yenilə</button></a>
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