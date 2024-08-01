

<!DOCTYPE html>
<html lang="en">
<body id="page6">
<div class="extra">
  <div class="main">


<?php include 'baglan1.php';
include 'header.php'; ?>


 <!--==============================content================================-->

 
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2 class="p1"> ƏLAQƏ</h2>
            <form id="contact-form" action="hemeliyyat.php" method="POST">
              <fieldset>
                <label><span class="text-form">Tam Ad:</span>
                  <input type="text" name="tamad">
                </label>
                <label><span class="text-form">E-mail:</span>
                  <input type="text" name="email">
                </label>
                <label><span class="text-form">Telefon:</span>
                  <input type="text" name="telefon">
                </label>
                <div class="wrapper">
                  <div class="text-form">Mesaj:</div>
                  <div class="extra-wrap">
                    <textarea name="mesaj"></textarea>
                  </div>
                </div>
              
                <div class="buttons">
                 <button class="button-2" type="submit" name="temizle">Temizle</button> 
                 <button class="button-2" type="submit" name="gondar">Gonder</button> 
                </div>
              </fieldset>
            </form>
          </div>
        </article>
        <article class="col-2">
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
