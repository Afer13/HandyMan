

<!DOCTYPE html>
<html lang="en">
<body id="page6">
<div class="extra">
  <div class="main">


<?php include 'baglan1.php';
include 'header.php' ?>


 <!--==============================content================================-->

    <section id="content">


    	<div class="wrapper">
        <?php 
        $xidmet_id=$_GET['xidmet_id'];
        $xidmetSorgu=mysqli_query($baglan,"select*from xidmetler where xidmet_id='$xidmet_id'");
       	$xidmetCek=mysqli_fetch_assoc($xidmetSorgu);?>
        <div class="column-6">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $xidmetCek['xidmet_qisaad']; ?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                
                <h6 style="font-size: 20px;" class="color-1"><?php echo $xidmetCek['xidmet_ad']; ?></h6>
                <p><?php echo $xidmetCek['xidmet_qmelumat']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block"></div>
    </section>
  </div>
</div>
<?php include 'footer.php' ?>
<!--coded by cheh-->
</body>
</html>
