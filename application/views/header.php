    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href=""><img src="<?php echo URL_IMG?>logo.png" style="height: 40px;" alt="..."></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo URL_CTR;?>home" class="scroll">Home</a></li>
                <li><a href="<?php echo URL_CTR;?>skruas" class="scroll">SK Ruas Jalan</a></li>
                <li><a href="<?php echo URL_CTR;?>petajalan" class="scroll">Peta Jalan Nasional</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jalan <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/kemantapan">Kemantapan</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/kemantapan_ruas">Kemantapan per ruas</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/stripmap">Stripmap</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/aadt">AADT</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/lebar_jalan">Lebar Jalan</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/grafik_lebar">Grafik Lebar Jalan</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/lajur">Lajur</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/kendaraan">Kendaraan</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jalan/grafik_kondisi">Grafik Kondisi Jalan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jembatan <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jembatan/tabel_kondisi">Tabel Kondisi</a></li>
                        <li><a class="portal-cursor" href="<?php echo URL_CTR;?>jembatan/grafik_kondisi">Grafik Kondisi</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo URL_CTR;?>download" class="scroll">Download</a></li>
                <li><a href="<?php echo URL_CTR;?>pengumuman" class="scroll">Pengumuman</a></li>
                <li><a href="<?php echo URL_CTR;?>contact" class="scroll">Contact</a></li>
                <li><a href="<?php echo URL_CTR;?>login" class="scroll">Login</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>