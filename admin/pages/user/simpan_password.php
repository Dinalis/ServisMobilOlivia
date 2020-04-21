 <?php
	  if(isset($_POST['password']))
	  {
		  
		  $password = serialize_str($_POST['password']);
		  $newpassword = serialize_str($_POST['new_password']);
		 
		  $sql = "SELECT * FROM tbl_admin WHERE username = '".$_SESSION['login_username']."'AND password_md5='".md5($password)."'";
		  $query = mysql_query($sql);
		 
		  if(mysql_num_rows($query)>0)
		  {
			  $data = mysql_fetch_array($query);
			 $newPassword = substr(md5(date("Y-m-d")),0,6);
			 mysql_query("UPDATE tbl_admin SET password_md5='".md5($newpassword)."',password_cetak='".$newpassword."' WHERE id = '".$data['id']."'");
			 $_SESSION['msg'] = "Password berhasil diubah.";
			 $_SESSION['status'] = "sukses";
			 
		  }else
		  {
			  $_SESSION['msg'] = "Password gagal diubah.";
			  $_SESSION['status'] = "gagal";
		  }
		  ?>
             <script>
             	history.go(-1);
			 </script>
             <?php
	  }
	  ?>