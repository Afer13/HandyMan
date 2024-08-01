<?php 
include 'baglan1.php';
include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<body id="page6">

  <div class="main">
 <!--==============================content================================-->
    <?php $hesabSorgu=mysqli_query($baglan,"select*from haqqinda"); 
          $hesabCek=mysqli_fetch_assoc($hesabSorgu);
    ?>
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2 class="p1">HAQQIMIZDA</h2>
            <p class="prev-indent-bot"><?php echo $hesabCek['haqqinda']; ?></p>

            </div>
        </article>
      </div>
    </section>
  </div>

<?php include 'footer.php' ?>
<!--coded by cheh-->
</body>
</html>
