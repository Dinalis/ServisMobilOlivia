<?php 
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
include "../include/koneksi.php";
include "../include/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<title>Login Admin</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
</head>
<body style='background: url("assets/img/back1.jpg");'>

<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <header class="header black-bg">
              
            <!--logo start-->
            <a href="../web/index.php" class="logo"><b>Via Jaya Ac</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            
          
</header>

<div id="login-page">
  <div class="container">
    <form class="form-login" method="post" action="login.php?auth">
      <h2 class="form-login-heading">sign in now</h2>
      <div class="login-wrap">
        <input type="text" class="form-control" name="username" placeholder="USERNAME" autofocus>
        <br>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <label class="checkbox"> <span class="pull-right"> <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a> </span> </label>
        <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button> </form>
        <?php
	  if(isset($_GET['auth']))
	  {
		  
		  $username = serialize_str($_POST['username']);
		 
		  $password = serialize_str($_POST['password']);
		  $sql = "SELECT * FROM tbl_admin WHERE username = '".$username."' AND aktif=1";
		  $query = mysql_query($sql);
		 
		  if(mysql_num_rows($query)>0)
		  {
			  $data = mysql_fetch_array($query);
			  if($data["password_md5"] == md5($password))
			  {
				  mysql_query("UPDATE tbl_admin SET last_login = '".date("Y-m-d H:i:s")."' WHERE id = ".$data["id"]."");
				  $_SESSION['login_id'] = $data['id'];
				  $_SESSION['login_username'] = $data['username'];
				  $_SESSION['login_nama_pengguna'] = $data['nama'];
				  $_SESSION['login_email'] = $data['email'];
				  $_SESSION['login_level'] = $data['level'];
				  ?>
                  <script>
				  document.location.href = "index.php";
				  </script>
                  <?php
			  }else
			  {
				  echo "<span class='label label-danger'>Password anda salah</span>";
			  }
		  }else
		  {
			  echo "<span class='label label-danger'>Username anda tidak ditemukan</span>";
		  }
	  }
	  ?>
        <hr>
      </div>
      
      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
          <form method="post" action="login.php?getPassword">
            <div class="modal-header">
            
            
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
              <p>Masukkan username dan email anda untuk mendapatkan password baru..</p>
              <input type="text" name="username" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix">
              <br>
              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="reset">Cancel</button>
              <button class="btn btn-theme" type="submit">Submit</button>
              </div>
              </form>
              <?php
	  if(isset($_GET['getPassword']))
	  {
		  
		  $username = serialize_str($_POST['username']);
		 
		  $email = serialize_str($_POST['email']);
		  $sql = "SELECT * FROM tbl_admin WHERE username = '".$username."'AND email='".$email."'";
		  $query = mysql_query($sql);
		 
		  if(mysql_num_rows($query)>0)
		  {
			  $data = mysql_fetch_array($query);
			 $newPassword = substr(md5(date("Y-m-d")),0,6);
			 mysql_query("UPDATE tbl_admin SET password_md5='".md5($newPassword)."',password_cetak='".$newPassword."' WHERE id = '".$data['id']."'");
			 ?>
             <script>
             alert( "Password baru anda adalah <?php echo $newPassword?>");
			 </script>
             <?php
		  }else
		  {
			  echo "<span class='label label-danger'>Username anda tidak ditemukan</span>";
		  }
	  }
	  ?>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->
      
   
  </div>
</div>
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script> 
<script>
        $.backstretch("assets/img/civic.jpg", {speed: 500});
    </script>
</body>
</html>
