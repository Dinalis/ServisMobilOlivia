<?php
$id = $_GET["id"];
$sql_query = "DELETE FROM tbl_pengerjaan WHERE id = '".$id."'";
$query = mysql_query($sql_query);
if($query)
	{
		
		$_SESSION["msg"] = 'Data berhasil dihapus.';
		$_SESSION["status"] = "sukses";
		?>
		<script>
			document.location.href = "index.php?pages=kerja";
			
		</script>
		<?php
		
	}else
	{
		$_SESSION["msg"] = 'Data gagal dihapus.';
		$_SESSION["status"] = "gagal";
		?>
		<script>
			document.location.href = "index.php?pages=kerja";
		</script>
		<?php
	}
?>