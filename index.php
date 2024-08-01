<?php include 'header.php';?>


<!DOCTYPE html>
<html lang="en">
<div class="wrapper">
        <div class="slider">
          <ul  class="items">

            <?php 
            $slaydSorgu=mysqli_query($baglan,"select*from slaydlar order by slayd_sira asc");
            while ($slaydCek=mysqli_fetch_assoc($slaydSorgu)) {
            ?>
            <li ><a  href="<?php echo $slaydCek['slayd_url'] ?>"><img  src="<?php echo substr($slaydCek['slayd_yol'],3) ?>" alt=""></a></li>
            <?php } ?>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>


    <!--==============================aside================================-->
    <aside>
      <div class="wrapper">

        <?php 
        $xidmetSorgu=mysqli_query($baglan,"select*from xidmetler");
        while($xidmetCek=mysqli_fetch_assoc($xidmetSorgu)) {

          if($xidmetCek['xidmet_anamenu']=="1")
          {
            ?>

        <div style="padding-left: 13px;padding-top: 7px;" class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $xidmetCek['xidmet_qisaad'] ?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <figure class="p2"><img style="width: 265px;" src="<?php echo substr($xidmetCek['xidmet_sekilyol'],3); ?>" alt=""></figure>
                <h6 class="color-1"><?php echo $xidmetCek['xidmet_ad'] ?></h6>
                <p><?php echo $xidmetCek['xidmet_qmelumat'] ?></p>
              </div>
              <div class="aligncenter"> <a class="button" href="xidmet-elavem.php?xidmet_id=<?php echo $xidmetCek['xidmet_id'] ?>">Elave Melumat</a> </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </aside>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2>XOŞ GƏLMİSİNİZ!</h2>
            <h6 class="prev-indent-bot">Handyman is one of free website templates created by TemplateMonster.com</h6>
            <p class="prev-indent-bot">This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. Handyman Template goes with two packages – with PSD source files and without them. PSD<br>
              source files are available for free for the registered members of Templates.com. The basic pack<br>
              age (without PSD source) is available for anyone without registration.</p>
            This website template has several pages: <a class="color-2" href="index.html">Home Page</a>, <a class="color-2" href="services.html">Services</a>, <a class="color-2" href="faq.html">FAQ</a>, <a class="color-2" href="prices.html">Prices</a>, <a class="color-2" href="staff.html">Our Staff</a>, <a class="color-2" href="contacts.html">Contacts</a> (note that contact us form – doesn’t work). </div>
        </article>
        <article class="col-2">
          <h3>Testimonials</h3>
          <div class="wrapper indent-bot">
            <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">James Williams</a></h6>
                Lorem ipsum dolor sitmet consectetur adipisicing elit sed do eiusmod. </div>
            </div>
          </div>
          <div class="wrapper">
            <figure class="img-indent"><img src="images/page1-img2.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">Thomas Seether</a></h6>
                Tempor incididunt utlabore et dolore magna aliqua ut enim ad minim veniam. </div>
                
            </div>
          </div>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>

<?php include 'footer.php' ?>

<script>Cufon.now();</script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 800,
        easing: 'easeOutQuart',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        waitBannerAnimation: false,
        prevBu: '.prev',
        nextBu: '.next'
    });
});
</script>
</body>
</html>
