<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

</head>
 
<body>

<?php 
include 'function.php';

session_start();

$perpustakaan = query('SELECT * FROM buku');
 
	// cek apakah yang mengakses halaman ini sudah login
	if(!isset ($_SESSION['level3']) ) {
		header("location:index.php");
	}

  if(isset($_POST["cari"]) ) {
    $perpustakaan = cari($_POST["keyword"]);
}
else{
    $perpustakaan = query('SELECT * FROM buku');
}
?> 

<nav class="uk-navbar uk-navbar-container uk-margin">

<div class="uk-navbar-left">
    <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle width="30"  href="#offcanvas-push"></a>
    <div id="offcanvas-push"  uk-offcanvas="mode: push; overlay: true">
        <div class="uk-offcanvas-bar">

            <ul class="uk-nav uk-nav-default">
                <li class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: menu" width="25"></span>Menu</li>
                <li class="uk-nav-divider"></li>
                <li><a href="halaman_siswa.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: home"></span>Beranda</a></li>
                <li><a href="#" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: info"></span>Informasi</a></li>
            </ul>

        </div>
    </div>
</div>

<div class="uk-navbar-center">
    <img src="logo.png" alt="" width="55px" ><h3 class="uk-text-bold uk-align-center uk-padding">SMK NEGERI 1 DENPASAR</h3></img>
</div>

<div class="uk-navbar-item uk-navbar-right">
       
<a href="logout.php" class="uk-button uk-button-danger uk-text-bold"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span>Log Out</a>
      
    </div>

</nav>

 <div class="uk-container">
   <br>
   <div class=" uk-margin">
    <form action="" method="post">
        <span class="uk-margin-small-right" uk-icon="icon: search"></span><input  class="uk-input uk-form-width-large " type="text" name="keyword" autofocus placeholder="Masukan Keyword Pencarian.."  autocomplete="off"> 
        <a class="uk-padding-small" href=""></a>
        <button class="uk-button uk-button-primary" type="submit" name="cari">Search</button>
    </form>
</div>

    <div id="cards_landscape_wrap-2">
                    <div class="">
                        <div class="row">
                       <?php foreach ($perpustakaan as $siswa ) { ?>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <!-- <a href=""> -->
                                    <div class="card-flyer">
                                        <div class="text-box">
                                            <div class="image-box">
                                                <img src="<?= $siswa['foto'];?>"
                                                    alt="" />
                                            </div>
                                            <div class="text-container">
                                                <h6><?= $siswa['judul'];?></h6>
                                                <p>Tempat Terbit : <?= $siswa['tempat_terbit'];?></p>
                                                <p>Tahun Terbit : <?= $siswa['tahun_terbit'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </a> -->
                            </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<style>
        #cards_landscape_wrap-2{
    text-align: center;
    background: white;
  }
  #cards_landscape_wrap-2 .container{
    padding-top: 80px; 
    padding-bottom: 100px;
  }
  #cards_landscape_wrap-2 a{
    text-decoration: none;
    outline: none;
  }
  #cards_landscape_wrap-2 .card-flyer {
    border-radius: 5px;
  }
  #cards_landscape_wrap-2 .card-flyer .image-box{
    background: #ffffff;
    overflow: hidden;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
    border-radius: 5px;
  }
  #cards_landscape_wrap-2 .card-flyer .image-box img{
    -webkit-transition:all .9s ease; 
    -moz-transition:all .9s ease; 
    -o-transition:all .9s ease;
    -ms-transition:all .9s ease; 
    width: 100%;
    height: 200px;
  }
  #cards_landscape_wrap-2 .card-flyer:hover .image-box img{
    opacity: 0.7;
    -webkit-transform:scale(1.15);
    -moz-transform:scale(1.15);
    -ms-transform:scale(1.15);
    -o-transform:scale(1.15);
    transform:scale(1.15);
  }
  #cards_landscape_wrap-2 .card-flyer .text-box{
    text-align: center;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box .text-container{
    padding: 30px 18px;
  }
  #cards_landscape_wrap-2 .card-flyer{
    background: #FFFFFF;
    margin-top: 50px;
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
  }
  #cards_landscape_wrap-2 .card-flyer:hover{
    background: #fff;
    box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    margin-top: 50px;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box p{
    margin-top: 10px;
    margin-bottom: 0px;
    padding-bottom: 0px; 
    font-size: 14px;
    letter-spacing: 1px;
    text-align: left;
    color: #000000;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box h6{
    margin-top: 0px;
    margin-bottom: 4px; 
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    font-family: 'Roboto Black', sans-serif;
    letter-spacing: 1px;
    color: #00acc1;
  }
    </style>