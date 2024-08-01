
<?php 
include 'header.php';
include 'sidebar.php';
include 'baglan.php';
$menu_id8=$_GET['menuid7'];  
$menuSorgu=mysqli_query($baglan,"select*from menular where menu_id='$menu_id8'");
$menuCek=mysqli_fetch_assoc($menuSorgu); 
?>
<!-- INDEX GÖVDƏ ------------------------ ---------- -->



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Menu Yeniləmə</title>

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
<form action="emeliyyat.php" method="POST">
    
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">MENU YENİLƏMƏ</h1>
                    <h1 class="page-subhead-line">Menulara buradan yeniliyə bilərsiniz...</h1>
                </div>
                <div class="row">
            <div style="margin-left: 60px;" class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           MENU - YENİLƏ
                        </div>
                        

                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Menu Adı</label>
                                            <input class="form-control" required="" type="hidden" value="<?php echo $menuCek['menu_id']; ?>" name="menu_id5">
                                            <input class="form-control" required="" type="text" value="<?php echo $menuCek['menu_ad']; ?>" name="menu_ad5">
                                        </div>
                                        <div class="form-group">
                                            <label> Menu Linki</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $menuCek['menu_link']; ?>" name="menu_link5">
                                        </div>  
                                        <div class="form-group">
                                            <label> Menu Sira</label>
                                            <input class="form-control" required="" type="text" value="<?php echo $menuCek['menu_sira']; ?>" name="menu_sira5">
                                        </div>                               
                                        <button style="margin-top: 10px;width: 100%;" type="submit" class="btn btn-info" name="menu_duzaliset">YENİLƏ </button>

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