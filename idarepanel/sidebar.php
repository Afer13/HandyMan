<!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <?php 
                                $hesabSidebar=mysqli_query($baglan,"select*from admin");
                                $hesabSidebarCek=mysqli_fetch_assoc($hesabSidebar);
                            ?>
                            <img src="<?php echo $hesabSidebarCek['hesab_sekilyol']; ?>" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $hesabSidebarCek['hesab_ad']; ?>
                            <br />
                                <small>Yalnız admin giriş edə bilər ! </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Ana Menu</a>
                    </li>
                    <li>
                        <a class="active-menu" href="menular.php"><i class="fa fa-yelp "></i>Menular</a>
                    </li>
                    <li>
                        <a class="active-menu" href="slaydlar.php"><i class="fa fa-yelp "></i>Slaydlar</a>
                    </li>
                    <li>
                        <a class="active-menu" href="xidmetler.php"><i class="fa fa-yelp "></i>Xidmətlər</a>
                    </li>
                    <li>
                        <a class="active-menu" href="filiallar.php"><i class="fa fa-yelp "></i>Filiallar</a>
                    </li>
                    <li>
                        <a class="active-menu" href="haqqinda.php"><i class="fa fa-yelp "></i>'Haqqında' Menusu</a>
                    </li>
                </ul>

            </div>

        </nav>