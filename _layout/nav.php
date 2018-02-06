    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="http://localhost/kelompok1A"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/kelompok1A">Home</a></li>
                        <li><a href="http://localhost/kelompok1A/about">About</a></li>
                        
                        <!--<li class="dropdown">-->
                        <li><a href="http://localhost/kelompok1A/db">Database</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="http://localhost/kelompok1A/pegawai">Pegawai</a></li>
                                <li><a href="http://localhost/kelompok1A/barang">Barang</a></li>
                                <li><a href="http://localhost/kelompok1A/konsumen">Kosumen</a></li>
                            </ul>-->
                        </li>
                        <li><a href="http://localhost/kelompok1A/kontak">Contact</a></li>

                        <?php if (isset($_SESSION['username'])): ?>
                            <li><a href="http://localhost/kelompok1A/login/admin.php"><i class="icon-lock"></i></a></li>
                            <li><a href="#" id="log">Logout</a></li>
                                <form id="out" method="post" action="http://localhost/kelompok1A/login/logout.php">
                                    <input type="hidden" name="logout">
                                </form>
                        <?php else: ?>
                            <li><a href="http://localhost/kelompok1A/login"><i class="icon-lock"></i></a></li>
                        <?php endif; ?>


                        


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->