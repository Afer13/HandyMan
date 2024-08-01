
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
        <title>Xidmətlər</title>

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
                    <h1 class="page-head-line">Xidmətlər</h1>

                    <h1 class="page-wrapper-line"><font size="5">Xidmətləri buradan əlavə edə,yeniliyə və silə bilərsiniz !</font></h1>
                    <?php if($_GET['xdurumDuz']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Xidmət uğurla yeniləndi !</b></h1>
                <?php } elseif($_GET['xdurumDuz']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Xidmət yenilənə bilmədi.Yəqin ki heç bir dəyişiklik edilməyib !</b></h1>

                <?php } if($_GET['xdurumEl']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Xidmət uğurla əlavə edildi !</b></h1>
                <?php } elseif($_GET['xdurumEl']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Xidmət əlavə edilə bilmədi !</b></h1>
                <?php } ?>

                <?php if($_GET['xdurumsil']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Xidmət uğurla silindi !</b></h1>
                <?php } elseif($_GET['xdurumsil']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Xidmət silinə bilmədi !</b></h1>
                <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-6 col-xs-12">
                       <!--    Hover Rows  -->
                       <div style="margin-left: 15px;" class="panel panel-default">
                        <div  class="panel-heading">
                            <font size="4"><b> Xidmətlər</b></font>
                            <a href="xidmetelaveet.php"><button style="margin-left: 486px;" type="button" class="btn btn-success" name="xidmetelave">Xidmət  əlavə  et</button></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Qısa Adı</th>
                                            <th>Adı</th>
                                            <th>Qısa Məlumat</th>
                                            <th>Qiyməti</th> 
                                            <th>Sıra</th>
                                            <th>AnaMenu</th>
                                            <th>Şəkil</th>                               
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $xidmetSorgu=mysqli_query($baglan,"select*from xidmetler");
                                            while ($xidmetCek=mysqli_fetch_assoc($xidmetSorgu)) { ?>
                                        <tr>
                                            <td><?php echo $xidmetCek['xidmet_id'];?></td>
                                            <td><?php echo $xidmetCek['xidmet_qisaad'];?></td>
                                            <td><?php echo $xidmetCek['xidmet_ad'];?></td>
                                            <td><?php echo $xidmetCek['xidmet_qmelumat'];?></td>
                                            <td><?php echo $xidmetCek['xidmet_qiymet'];?></td>
                                            <td><?php echo $xidmetCek['xidmet_sira'];?></td>
                                            <td><?php echo $xidmetCek['xidmet_anamenu'];?></td>
                                            <td><img style="width: 150px;" src="<?php echo $xidmetCek['xidmet_sekilyol'];?>"></td>
                                            <td><a href="xidmetduzelis.php?xidmetid7=<?php echo $xidmetCek['xidmet_id'];?>"><button type="button" class="btn btn-sm btn-primary" name="duzaliset">Düzəliş et</button></a></td>
                                            <td><a href="emeliyyat.php?xidmetid14=<?php echo $xidmetCek['xidmet_id']; ?>"><button type="button" class="btn btn-sm btn-danger" name="xidmet_sil" >Sil</button></a></td>
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