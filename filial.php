<?php 
include 'baglan1.php';
include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<body id="page6">
<div class="extra">
  <div class="main">





 <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article style="font-size: 18px;" class="col-md-4">
          
          <h2 class="p1">Filiallar</h2><?php 
  $filialSorgu=mysqli_query($baglan,"select*from filiallar");
  while($filialCek=mysqli_fetch_assoc($filialSorgu)){
?>
          <h6><?php echo $filialCek['filial_yer']; ?></h6>
          <dl class="img-indent-bot">
            <dt><?php echo $filialCek['filial_unvan']; ?></dt>
            <dd><span>Telefon:</span><strong><?php echo $filialCek['filial_telefon']; ?></strong></dd>
            <dd><span>Fax nömrə:</span><strong><?php echo $filialCek['filial_fax']; ?></strong></dd>
            <dd><span>Email:</span><strong><a href="#"><?php echo $filialCek['filial_email']; ?></a></strong></dd>
          </dl>
        <?php } ?>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<?php include 'footer.php' ?>
<!--coded by cheh-->
</body>
</html>
