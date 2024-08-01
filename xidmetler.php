<?php include 'baglan1.php';
include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<body id="page4">
<div class="extra">
  <div class="main">
    <!--==============================content================================-->
    <section id="content">
      <div class="indent-left">
        <h2 class="p1">XİDMƏTLƏR</h2>
        <div class="wrapper">
          <div class="col-1">
            <ul style="font-size: 16px;" class="price-list">
              <?php 
              $xidmetSorgu=mysqli_query($baglan,"select*from xidmetler");
              while($xidmetCek=mysqli_fetch_assoc($xidmetSorgu)){
              ?>

              <li><b><span><?php echo $xidmetCek['xidmet_qiymet']." AZN"; ?></span><a href="xidmet-elavem.php?xidmet_id=<?php echo $xidmetCek['xidmet_id']; ?>"><?php echo "~".$xidmetCek['xidmet_ad']; ?></a><strong>&nbsp;</strong></b></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

      

    </section>
    <!--==============================aside================================-->
    <aside>
      <div class="wrapper">
        <?php 
        $xidmetSorgu=mysqli_query($baglan,"select*from xidmetler");
        while($xidmetCek=mysqli_fetch_assoc($xidmetSorgu)) { ?>
        <div style="padding-left: 13px;padding-top: 7px;" class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $xidmetCek['xidmet_qisaad']; ?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <figure class="p2"><img style="width: 250px;" src="<?php echo substr($xidmetCek['xidmet_sekilyol'],3); ?>" alt=""></figure>
                <h6 class="color-1"><?php echo $xidmetCek['xidmet_ad']; ?></h6>
                <p><?php echo $xidmetCek['xidmet_qmelumat']; ?></p>
              </div>
              <div class="aligncenter"> <a class="button" href="xidmet-elavem.php?xidmet_id=<?php echo $xidmetCek['xidmet_id']; ?>">Etrafli Melumat</a> </div>
            </div>
          </div>
        </div>
<?php } ?>
      </div>
      <div class="block"></div>
    </aside>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
