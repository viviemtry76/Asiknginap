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
				 <li><a href="<?php echo site_url('beranda')?>">Beranda</a></li>
				 <li><a href="<?php echo site_url('penginapan')?>">Penginapan</a></li>
				<li class="active"><a href="#">Kontak Kami</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

	<div class="container">
	<form>
		<div class="form-group">
		<h3>Kirimkan pertanyaan, saran, dan kritik anda pada kami</h3>
			<label for="exampleInputNama1">Nama</label>
			<input type="text" class="form-control" id="exampleInputNama1" placeholder="nama">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
			<h5>Tulis pertanyaan, saran, dan kritik anda di bawah ini</h5>
			<textarea class="form-control" rows="5" id="InputKomentar1">
			</textarea><p>
			<button type="submit" class="btn">Kirim</button></p>
			</div>