<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo site_url ('css/bootstrap.css');?>" rel="stylesheet">
	
    <style type="text/css">
	/* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */
	
      body {
        padding-top: 20px;
        padding-bottom: 60px;
		color: #5a5a5a;
      }
	
	    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */
	
      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url ('icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url ('icon-114-precomposed.png');?>">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url ('icon-72-precomposed.png');?>">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url ('icon-57-precomposed.png');?>">
                                   <link rel="shortcut icon" href="<?php echo site_url ('ico/favicon.png');?>">
  </head>

  <body>

    <div class="container">

      <div class="masthea.">
        <h3 class="muted">
		<p class="text-right">Asik Nginap</padding-right>
		</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
				<li><a href="<?php echo site_url ('beranda') ?>">Beranda</a></li>
				<li class="active"><a href="#">Penginapan</a></li>
                <li><a href="<?php echo site_url ('kontak') ?>">Kontak Kami</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Example row of columns -->
        
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span2">
		<h3>Tujuan</h3>
	
	<form class="form-search">
    <input type="text" class="input-small search-query">
    <button type="submit" class="btn">
	Search
	</button>
    </form>
	
	<hr>
	
	<div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Rating
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#">Bintang*</a></li>
    <li><a tabindex="-1" href="#">Bintang**</a></li>
    <li><a tabindex="-1" href="#">Bintang***</a></li>
	<li><a tabindex="-1" href="#">Bintang****</a></li>
	<li><a tabindex="-1" href="#">Bintang*****</a></li>
    </ul></div>
	
	<p>
	
	<div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Harga
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#">< 500.000</a></li>
    <li><a tabindex="-1" href="#">500.000 - 1.000.000</a></li>
    <li><a tabindex="-1" href="#">> 1.000.0000</a></li>
    </ul></div>
	
	<h3>Jenis</h3>
	<label class="checkbox">
	<input type="checkbox" value="option1">
	Hotel</label>
	<label class="checkbox">
	<input type="checkbox" value="option2">
	Apartement</label>
	<label class="checkbox">
	<input type="checkbox" value="option3">
	Inn</label>
	
	<h3>Fasilitas</h3>
	<label class="checkbox">
	<input type="checkbox" value="option1">
	Supermarket</label>
	<label class="checkbox">
	<input type="checkbox" value="option2">
	Kolam Renang</label>
	<label class="checkbox">
	<input type="checkbox" value="option3">
	Dapur</label>
	
	<h3>Area</h3>
	<label class="checkbox">
	<input type="checkbox" value="option1">
	Sby Utara</label>
	<label class="checkbox">
	<input type="checkbox" value="option2">
	Sby Timur</label>
	<label class="checkbox">
	<input type="checkbox" value="option3">
	Sby Selatan
	</label>
	<label class="checkbox">
	<input type="checkbox" value="option4">
	Sby Pusat
	</label>
	<label class="checkbox">
	<input type="checkbox" value="option5">
	Sby Barat
	</label>
	
		<!--Sidebar content-->
		</div>
		
		<div class="span10">
		<img src="img/GS.jpg" class="img-rounded" align="absmiddle">
		
		<h2> Terletak di Jl.Menur Pumpungan no.62 Surabaya.Hanya berjarak 7 menit berkendara dari Mal Galaxy, Grace Studio memiliki kamar-kamar tidur lengkap dengan perabotan. Anda memiliki akses ke kolam renang serta gym.</h2>
		</div>
		</div>
		</div>
	  
	</div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url ('js/jquery.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-transition.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-alert.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-modal.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-dropdown.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-scrollspy.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-tab.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-tooltip.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-popover.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-button.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-collapse.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-carousel.js')?>"></script>
    <script src="<?php echo site_url ('js/bootstrap-typeahead.js')?>"></script>
    <script>
  </body>
</html>
