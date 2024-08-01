      <!--==============================header=================================-->
<?php include 'baglan1.php';

      include 'function.php';
 ?>
<head>
<title>Handyman</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
            <h1><a href="index.php">Handyman</a></h1>
            <strong class="support">055 764 71 65</strong> </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php">Əsas Menu</a></li>

            <?php 
            $menuSorgu=mysqli_query($baglan,"select*from menular order by menu_sira asc");   //Menuların ölçüsünu düzgün şəkildə yerləşdirmək üçün styles.css faylından 212 ci sətirdəki padding kodunda ölçüləri dəyişdirin//
            $menusay=mysqli_num_rows($menuSorgu);
            $say=0;
            while($menuCek=mysqli_fetch_assoc($menuSorgu)) { $say++;?>

            <li class="<?php if($menusay==$say)
            {
              echo "last";
            } 
          ?>"><a href="<?php echo $menuCek['menu_link'] ?>"><?php echo $menuCek['menu_ad'] ?></a></li>

            <?php } ?>
          </ul>
        </nav>
      </div>
      
    </header>