<?php
switch($_GET['act'])
{
	
	case "edit":
	$id = serialize_str($_POST['id']);
	$contact_us = serialize_str($_POST['contact_us']);
	$str_query = "UPDATE tbl_contact_us SET 
				  contact_us ='".$contact_us."' WHERE id = $id";
	
	
	$query = mysql_query($str_query);
	if($query)
	{
		
		$_SESSION["msg"] = 'Data berhasil disimpan.';
		$_SESSION["status"] = "sukses";
		?>
		<script>
			document.location.href = "index.php?pages=contact_us&modul=view&id=<?php echo $id?>";
			
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