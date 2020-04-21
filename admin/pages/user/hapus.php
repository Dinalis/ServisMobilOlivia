<?php
$id = $_GET["id"];
$sql_query = "DELETE FROM tbl_admin WHERE id = '".$id."'";
$query = mysql_query($sql_query);
if($query)
	{
		
		$_SESSION["msg"] = 'Data berhasil dihapus.';
		$_SESSION["status"] = "sukses";
		?>
		<script>
			document.location.href = "index.php?pages=user&modul=data";
			
		</script>
		<?php
		
	}else
	{
		$_SESSION["msg"] = 'Data gagal dihapus.';
		$_SESSION["status"] = "gagal";
		?>
		<script>
			document.location.href = "index.php?pages=user&modul=data";
		</script>
		<?php
	}
?>