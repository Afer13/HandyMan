
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
        <title>Slaydlar</title>

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
                    <h1 class="page-head-line">SLAYDLAR</h1>

                    <h1 class="page-wrapper-line"><font size="5">Slaydları buradan əlavə edə,yeniliyə və silə bilərsiniz !</font></h1>
                    <?php if($_GET['sdurumDuz']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Slayd uğurla yeniləndi !</b></h1>
                <?php } elseif($_GET['sdurumDuz']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Slayd yenilənə bilmədi.Yəqin ki heç bir dəyişiklik edilməyib !</b></h1>

                <?php } if($_GET['sdurumEl']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Slayd uğurla əlavə edildi !</b></h1>
                <?php } elseif($_GET['sdurumEl']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Slayd əlavə edilə bilmədi !</b></h1>
                <?php } ?>

                <?php if($_GET['sdurumsil']=="ok"){ ?>
                    <h1 style="color: green;" class="page-subhead-line"><b>Slayd uğurla silindi !</b></h1>
                <?php } elseif($_GET['sdurumsil']=="no"){ ?>
                    <h1 style="color: red;" class="page-subhead-line"><b>Slayd silinə bilmədi !</b></h1>
                <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-6 col-xs-12">
                       <!--    Hover Rows  -->
                       <div style="margin-left: 15px;" class="panel panel-default">
                        <div  class="panel-heading">
                            <font size="4"><b> Slaydlar</b></font>
                            <a href="slaydelaveet.php"><button style="margin-left: 486px;" type="button" class="btn btn-success" name="slaydelave">Slayd  əlavə  et</button></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Slayd Adı</th>
                                            <th>Slayd Rəsmi</th>
                                            <th>Slayd URL</th>
                                            <th>Slayd Sıra</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $slaydSorgu=mysqli_query($baglan,"select*from slaydlar order by slayd_sira asc");
                                            while ($slaydCek=mysqli_fetch_assoc($slaydSorgu)) { ?>
                                        <tr>
                                            <td><?php echo $slaydCek['slayd_id'];?></td>
                                            <td><?php echo $slaydCek['slayd_ad'];?></td>
                                            <td><img style="width: 200px" src="<?php echo $slaydCek['slayd_yol'];?>"></td>
                                            <td><?php echo $slaydCek['slayd_url'];?></td>
                                            <td><?php echo $slaydCek['slayd_sira'];?></td>
                                            <td><a href="slaydduzelis.php?slaydid7=<?php echo $slaydCek['slayd_id'];?>"><button type="button" class="btn btn-sm btn-primary" name="duzaliset">Düzəliş et</button></a></td>
                                            <td><a href="emeliyyat.php?slaydid14=<?php echo $slaydCek['slayd_id']; ?>&sekilyol=<?php echo $slaydCek['slayd_yol']; ?>"><button type="button" class="btn btn-sm btn-danger" name="slayd_sil" >Sil</button></a></td>
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