
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
        <title>FILIALLAR</title>

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
                    <h1 class="page-head-line">FILIALLAR</h1>

                    <h1 class="page-wrapper-line"><font size="5">Filialları buradan əlavə edə,yeniliyə və silə bilərsiniz !</font></h1>
                    <?php if($_GET['durumDuz']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Filial uğurla yeniləndi !</b></h1>
                <?php } elseif($_GET['durumDuz']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Filial yenilənə bilmədi.Yəqin ki heç bir dəyişiklik edilməyib !</b></h1>

                <?php } if($_GET['durumEl']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Filial uğurla əlavə edildi !</b></h1>
                <?php } elseif($_GET['durumEl']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Filial əlavə edilə bilmədi !</b></h1>
                <?php } ?>

                <?php if($_GET['durumsil']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Filial uğurla silindi !</b></h1>
                <?php } elseif($_GET['durumsil']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Filial silinə bilmədi !</b></h1>
                <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-6 col-xs-12">
                       <!--    Hover Rows  -->
                       <div style="margin-left: 15px;" class="panel panel-default">
                        <div  class="panel-heading">
                            <font size="4"><b>Filiallar</b></font>
                            <a href="filialelaveet.php"><button style="margin-left: 486px;" type="button" class="btn btn-success" name="menuelave">Filial  əlavə  et</button></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Yerləşdiyi Yer</th>
                                            <th>Ünvan</th>
                                            <th>Telefon</th>
                                            <th>Fax Nömrə</th>
                                            <th>E-mail</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $filialSorgu=mysqli_query($baglan,"select*from filiallar");
                                            while ($filialCek=mysqli_fetch_assoc($filialSorgu)) { ?>
                                        <tr>
                                            <td><?php echo $filialCek['filial_id'];?></td>
                                            <td><?php echo $filialCek['filial_yer'];?></td>
                                            <td><?php echo $filialCek['filial_unvan'];?></td>
                                            <td><?php echo $filialCek['filial_telefon'];?></td>
                                            <td><?php echo $filialCek['filial_fax'];?></td>
                                            <td><?php echo $filialCek['filial_email'];?></td>
                                            <td><a href="filialduzelis.php?filialid7=<?php echo $filialCek['filial_id'];?>"><button type="button" class="btn btn-sm btn-primary" name="duzaliset">Düzəliş et</button></a></td>
                                            <td><a href="emeliyyat.php?filialid14=<?php echo $filialCek['filial_id']; ?>"><button type="button" class="btn btn-sm btn-danger" name="filial_sil" >Sil</button></a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
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