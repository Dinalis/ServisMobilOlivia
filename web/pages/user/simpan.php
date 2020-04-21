<?php
switch($_GET['act'])
{
	case "baru":
	$username = serialize_str($_POST['username']);
	$password = serialize_str($_POST["password"]);
	$nama = serialize_str($_POST['nama']);
	$no_hp = serialize_str($_POST['no_hp']);
	$email = serialize_str($_POST['email']);
	$aktif = (isset($_POST['aktif'])?1:0);
	$level = serialize_str($_POST['level']);
	$str_query = "INSERT INTO tbl_admin VALUES(null,'".$username."','".md5($password)."','".$password."','".$nama."','".$no_hp."','".$email."','".$aktif."',0,'".$level."')";
	
	$query = mysql_query($str_query);
	if($query)
	{
		$sql_select = "SELECT id FROM tbl_admin WHERE username='".$username."' AND password_md5 = '".md5($password)."'";
		$data = mysql_fetch_array(mysql_query($sql_select));
		$_SESSION["msg"] = 'Data berhasil ditambah.';
		$_SESSION["status"] = "sukses";
		?>
		<script>
			document.location.href = "index.php?pages=user&modul=view&id=<?php echo $data['id']?>";
			
		</script>
		<?php
		
	}else
	{
		$_SESSION["msg"] = 'Data gagal ditambah.';
		$_SESSION["status"] = "gagal";
		?>
		<script>
			history.go(-1);
		</script>
		<?php
	}
	break;
	case "edit":
	$id = serialize_str($_POST['id']);
	$username = serialize_str($_POST['username']);
	$password = serialize_str($_POST["password"]);
	$nama = serialize_str($_POST['nama']);
	$no_hp = serialize_str($_POST['no_hp']);
	$email = serialize_str($_POST['email']);
	$aktif = (isset($_POST['aktif'])?1:0);
	$level = serialize_str($_POST['level']);
	$str_query = "UPDATE tbl_admin SET username ='".$username."',password_md5='".md5($password)."',password_cetak = '".$password."',nama='".$nama."',no_hp = '".$no_hp."',email='".$email."',aktif = $aktif,level = '".$level."' WHERE id = $id";
	
	$query = mysql_query($str_query);
	if($query)
	{
		
		$_SESSION["msg"] = 'Data berhasil disimpan.';
		$_SESSION["status"] = "sukses";
		?>
		<script>
			document.location.href = "index.php?pages=user&modul=view&id=<?php echo $id?>";
			
		</script>
		<?php
		
	}else
	{
		$_SESSION["msg"] = 'Data gagal ditambah.';
		$_SESSION["status"] = "gagal";
		?>
		<script>
			history.go(-1);
		</script>
		<?php
	}
	break;	
	
}
?>