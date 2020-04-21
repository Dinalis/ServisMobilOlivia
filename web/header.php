<?php
include "../include/koneksi.php";
include "../include/function.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Via Jaya Ac</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		 <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		 <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
		<link href="css/styles.css" rel="stylesheet">
		<link href="responsive-calendar/css/responsive-calendar.css" rel="stylesheet">
		<link href="css/fileinput.min.css" rel="stylesheet">
		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
			</head>


	<body>
		<script type="text/javascript">
				
		$(document).ready(function(){  
			var myCarousels = $(".carousel");
			myCarousels.each(function( index, element  ) {
				var myCarousel = $("#"+$(element).attr('id')); 
				myCarousel.append("<ol class='carousel-indicators'></ol>");
				var indicators = $("#"+$(element).attr('id') + " .carousel-indicators"); 
				$("#"+$(element).attr('id') +" .carousel-inner").children(".item").each(function(index) {
					console.log(index);
					(index === 0) ? 
					indicators.append("<li data-target='#"+$(element).attr('id')+"' data-slide-to='"+index+"' class='active'></li>") : 
					indicators.append("<li data-target='#"+$(element).attr('id')+"' data-slide-to='"+index+"'></li>");
				});
			});
		});
		</script>
		<style>
		 .carousel-inner > .item > img,
		  .carousel-inner > .item > a > img 
		  {
		      width: 100%;
		      margin: auto;
		    }
		   
		</style>
		



  <div class="row">
	<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

	  <div class="carousel-inner" >
	    <div class="item active">
	      <img src="" alt="...">
	    </div>
	    <div class="item">
	      <img src="" alt="...">
	      
	    </div>
	    <div class="item">
	      <img src="" alt="...">
	      
	    </div>
	  </div>
	</div>
  </div>
  
<div class='row'>
	<header class="navbar navbar-bright " data-spy="affix" data-offset-top="197" role="banner">
	  
		<div class="navbar-header">
		  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		

		  
		</div>
		<nav class="collapse navbar-collapse"   role="navigation">
		  <ul class="nav navbar-nav">
			<li><a href='index.php'><i class="fa fa-home"></i> Home</a></li>
			<li>
			  <a href="index.php?modul=service"><i class="fa fa-th"></i> Service Mobil</a>
			</li>
			
			<li>
			  <a href="index.php?modul=pesanan"><i class="fa fa-th"></i> Pemesanan</a>
			</li>
			<li>
			  <a href="index.php?modul=pengerjaan"><i class="fa fa-th"></i> Pengerjaan</a>
			</li>
			
			<li>
			  <a href="index.php?modul=about_us"><i class="fa fa-comments"></i> Contact Us</a>
			</li>
			
			<li>
				<?php if($_SESSION['login_username'] != ''){ ?><a href="logout.php"><i class= ></i> logout</a>
				<?php }else{ ?><a href="login.php"><i class= ></i> login</a><?php } ?>
			  
			</li>
			
		  </ul>
		 
		</nav>
	  
	</header>
</div>
<div class="container main-body">
  