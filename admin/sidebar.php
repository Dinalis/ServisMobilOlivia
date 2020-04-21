<ul class=" nav ">

<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** --> 
<!--sidebar start-->
<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-2">
   <?php
	  if($_SESSION['login_level'] == "administrator")
	  {
	  ?>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-dashboard"></span> Dashboard</h3>
			  </div>
			  <div class="panel-body">
			    <ul class="nav nav-pills nav-stacked">
				  <li role="presentation"><a href="index.php?pages=user"><span class="fa fa-home"></span> Beranda</a></li>
				</ul>
			  </div>
			</div>
      
      <?php
	  }
	  ?>
		  	<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-cogs"></span> Analisa Data</h3>
			  </div>
			  <div class="panel-body">
			    <ul class="nav nav-pills nav-stacked">
				  <li role="presentation"><a href="index.php?pages=halaman"><span class="fa fa-bank"></span> Data Halaman</a></li>
				  <li role="presentation"><a href="index.php?pages=pesanan"><span class="fa fa-bank"></span> Data Pesanan</a></li>
				  <li role="presentation"><a href="index.php?pages=kerja"><span class="fa fa-book"></span> Data Pengerjaan</a></li>
				  <li role="presentation"><a href="index.php?pages=kontak"><span class="fa fa-book"></span> Data Kontak</a></li>
				</ul>
			  </div>
			</div>
		  	
		  	<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-database"></span> Admin Area</h3>
			  </div>
			  <div class="panel-body">
			    <ul class="nav nav-pills nav-stacked">
				  <li role="presentation"><a href="index.php?pages=user&modul=profil"><span class="fa fa-user"></span> Profil</a></li>
				 
				</ul>
			  </div>
			</div>
 
</div>
<!--sidebar end--> 
