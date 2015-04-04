<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo site_url ('css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo site_url ('css/bootstrap-responsive.css');?>" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

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



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

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



    <!-- NAVBAR
    ================================================== -->
    
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
		<h3 class="muted">
		<p class="text-right">Asik Nginap</p>
		</h3>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <div class="nav-collapse collapse">
              <ul class="nav">
                
				<li><a href="<?php echo site_url ('beranda') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url ('penginapan')?>">Penginapan</a></li>
				<li><a href="<?php echo site_url ('kontak kami')?>">Kontak Kami</a></li>
                </ul>
                </li>
              
			  </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

     

	<!-- Example row of columns -->
        
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span3">
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
		
		<div class="span9">
		
		<h3>Sahid Gunawangsa Manyar</h3>
		<p><img src="img/GS.jpg"class="img-rounded" align="absmiddle" hspace="180" /></p>
		
		<form class="form-horizontal">
		<div class="control-group">
		<label class="control-label" for="inputEmail">Nama</label>
		<div class="controls">
		<input type="text" id="Nama" placeholder="Nama">
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputPassword">Alamat</label>
		<div class="controls">
		<input type="text" id="Alamat" placeholder="Alamat">
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputPassword">Email</label>
		<div class="controls">
		<input type="text" id="Email" placeholder="Email">
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputPassword">No Telp</label>
		<div class="controls">
		<input type="text" id="No Telp" placeholder="No Telp">
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputPassword">Fax</label>
		<div class="controls">
		<input type="text" id="Fax" placeholder="Fax">
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputPassword">Link</label>
		<div class="controls">
		<input type="text" id="Link" placeholder="Link">
		</div>
		</div>
		
	</form>
		
		<h5>Rating Hotel Ini! ***</h5>
		
		<label for="exampleInputNama1">Nama</label>
			<input type="text" class="form-control" id="exampleInputNama1" placeholder="nama">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
		
		<h5>Komentar</h5>
			<textarea class="form-control" rows="5" id="InputKomentar1">
			</textarea><p>
			<button type="submit" class="btn">Kirim</button></p>
	    </div>
		<div class="container-fluid'>
		<div class="row-fluid'>
		<div class="span1'>
		<br><br><br><br>
		
		<h5>
		<p class='text-left">Nama </p>
		<p class='text-left">Alamat </p>
		<p class='text-left">Email </p>
		<p class='text-left">No Telpon </p>
		<p class='text-left">Fax </p>
		<p class='text-left">Link </p>
		</h5>
		
		</div>
		<div class="
		
		
		</div>
		</div>
		</div>
	  
	</div>

    </div><!-- /.container -->



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
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../assets/js/holder/holder.js"></script>
  </body>
</html>
