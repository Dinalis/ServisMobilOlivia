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

<div class='register'>
<div class="page-header">
  <h1>Register Form</h1>
</div>
<div class="panel panel-default">
  <div class="panel-body">
  <div class='col-md-9'>
  <?php 
  if(isset($_GET['do']))
  {
	 $nama = $_POST['nama'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $alamat = $_POST['alamat'];
	 // $tanggal_lahir = $_POST['tanggal_lahir'];
	 // $jenis_kelamin = $_POST['jenis_kelamin'];
	 // $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
	 // $status_perkawinan = $_POST['status_perkawinan'];
	 // $no_ktp = $_POST['no_ktp'];
	 $telepon = $_POST['telepon'];
	 $email = $_POST['email'];
	 // $tahun_alumni = $_POST['tahun_alumni'];
	 $sql = "INSERT INTO tbl_user VALUES(null,'".$username."','".md5($password)."','".$password."','".$nama."','".$telepon."','".$email."','".$alamat."', null)";
	 $query = mysql_query($sql);
	 if($query)
	 {
		 echo "<div class='alert alert-success'>Data berhasil disimpan, silahkan login dari halaman ini <a href='login_user.php'>Login Sekarang !</a>.</div>";
	 }else
	 {
		 echo "<div class='alert alert-danger'>Data gagal disimpan.</div>";
	 }
	 
  }
  ?>
    <form action='?modul=register&do' method='post'>
		<div class="form-group col-md-3">
          <label class="control-label">Nama Lengkap</label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="nama" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Username</label>
		</div>
		<div class="form-group col-md-6">
            <input type="text" name="username" class="form-control" required="required">
        </div>
		<div class='clear'></div>
		<div class="form-group col-md-3">
          <label class="control-label">Password</label>
		</div>
		<div class="form-group col-md-6">
            <input type="password" name="password" class="form-control" required="required">
        </div>
		<div class='clear'></div>
		<!-- <div class="form-group col-md-3">
          <label class=" control-label">Tempat Lahir </label>
		</div> -->
		<!-- <div class="form-group col-md-9">
            <input type="text" name="tempat_lahir" class="form-control" required="required">
        </div> -->
		<!-- <div class="form-group col-md-3">
          <label class=" control-label">Tanggal Lahir </label>
		</div> -->
		<!-- <div class="form-group col-md-9">
            <input type="text" id='datepicker' name="tanggal_lahir" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class=" control-label">Jenis Kelamin </label>
		</div> -->
		<!-- <div class="form-group col-md-9">
            <input type="radio" name="jenis_kelamin" value='Laki-Laki'  checked>Laki-Laki
		   <input type="radio" name="jenis_kelamin"  value='Perempuan'>Perempuan
        </div>
		<div class='clear'></div>
		
		<div class="form-group col-md-3">
          <label class="control-label">Pendidikan Terakhir   </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="pendidikan_terakhir" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class=" control-label">Status Perkawinan   </label>
		</div> -->
		<div class="form-group col-md-3">
          <label class="control-label">Telepon  </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="telepon" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class=" control-label">Email   </label>
		</div>
		<div class="form-group col-md-9">
            <input type="email" name="email" class="form-control" required="required">
        </div>
        <div class="form-group col-md-3">
          <label class=" control-label">Alamat</label>
		</div>
		<div class="form-group col-md-9">	
			<textarea name="alamat" class="form-control"></textarea>
        </div>

		<div class='clear'></div>
		<div class="form-group col-md-12">
          
            <input type="submit" name="register" class="btn btn-success" value='Register'>
			<input type="reset" class="btn btn-danger" value='Reset'>
        </div>
	</form>
  </div>
  </div>
</div>
</div>
