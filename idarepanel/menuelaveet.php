
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
        <title>Menu Əlavə Et</title>

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
                    <h1 class="page-head-line">MENULAR</h1>
                    <h1 class="page-subhead-line">Menuları buradan düzəliş edə və ya əlavə və silə bilərsiniz...</h1>
                </div>
                <div class="row">
            <div style="margin-left: 60px;" class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           MENU - ƏLAVƏ ET
                        </div>

                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Menu Adı</label>
                                            <input class="form-control" required="" type="text" name="menu_ad">
                                        </div>
                                        <div class="form-group">
                                            <label> Menu Linki</label>
                                            <input class="form-control" required="" type="text" value="http://" name="menu_link">
                                        </div>
                                        <div class="form-group">
                                            <label> Menu Sıra</label>
                                            <input class="form-control" required="" type="text" name="menu_sira">
                                        </div>
                                  
                                 
                                        <button style="margin-top: 10px;width: 100%;" type="submit" class="btn btn-info" name="menu_elaveet">ƏLAVƏ ET </button>

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