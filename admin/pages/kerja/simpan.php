<?php
switch($_GET['act'])
{
	case "baru":
	$temp = explode(".", $_FILES["foto"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	////
			//direktori gambar
		  $vdir_upload = "../upload/pengerjaan/";
		  $vfile_upload = $vdir_upload . $newfilename;

		  move_uploaded_file($_FILES["foto"]["tmp_name"], "../upload/pengerjaan/" . $newfilename);

		  //identitas file asli
		  $im_src = imagecreatefromjpeg($vfile_upload);
		  $src_width = imageSX($im_src);
		  $src_height = imageSY($im_src);

		  //Simpan dalam versi small 110 pixel
		  //Set ukuran gambar hasil perubahan
		  $dst_width = 200;
		  $dst_height = 150;

		  //proses perubahan ukuran
		  $im = imagecreatetruecolor($dst_width,$dst_height);
		  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

		  //Simpan gambar
		  imagejpeg($im,$vdir_upload . "small_" . $newfilename);
		 
	$str_query = "INSERT INTO tbl_pengerjaan (foto) 
				  VALUES('".$newfilename."')";
	
	$query = mysql_query($str_query);
	if($query)
	{
		$sql_select = "SELECT id FROM tbl_pengerjaan WHERE foto='".$newfilename."' ";
		$data = mysql_fetch_array(mysql_query($sql_select));
		$_SESSION["msg"] = 'Data berhasil ditambah.';
		$_SESSION["status"] = "sukses";
		?>
		<script>
			document.location.href = "index.php?pages=kerja&modul=view&id=<?php echo $data['id']?>";
			
		</script>
		<?php
		
	}else
	{
		$_SESSION["msg"] = 'Data gagal ditambah.';
		$_SESSION["status"] = "gagal";
		echo mysql_error();
		?>
		<script>
			//history.go(-1);
		</script>
		<?php
	}
	break;


	case "edit":
	$id = serialize_str($_POST['id']);
	
	$temp = explode(".", $_FILES["foto"]["name"]);
	if($_FILES["foto"]["name"]!="")
	{
		$newfilename = round(microtime(true)) . '.' . end($temp);
		
		  $vdir_upload = "../upload/pengerjaan/";
		  $vfile_upload = $vdir_upload . $newfilename;

		  move_uploaded_file($_FILES["foto"]["tmp_name"], "../upload/pengerjaan/" . $newfilename);

		  //identitas file asli
		  $im_src = imagecreatefromjpeg($vfile_upload);
		  $src_width = imageSX($im_src);
		  $src_height = imageSY($im_src);

		  //Simpan dalam versi small 110 pixel
		  //Set ukuran gambar hasil perubahan
		  $dst_width = 200;
		  $dst_height = 150;

		  //proses perubahan ukuran
		  $im = imagecreatetruecolor($dst_width,$dst_height);
		  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

		  //Simpan gambar
		  imagejpeg($im,$vdir_upload . "small_" . $newfilename);

		  $str_query = "UPDATE tbl_pengerjaan SET foto='".$newfilename."' WHERE id = $id";
		  $query = mysql_query($str_query);
			echo mysql_error();
			if($query)
			{
				
				$_SESSION["msg"] = 'Data berhasil diubah.';
				$_SESSION["status"] = "sukses";
				?>
				<script>
					document.location.href = "index.php?pages=kerja&modul=view&id=<?php echo $id?>";
					
				</script>
				<?php
				
			}else
			{
				$_SESSION["msg"] = 'Data gagal diubah.';
				$_SESSION["status"] = "gagal";
				?>
				<script>
					history.go(-1);
				</script>
				<?php
			}
	}else 
	{
				$_SESSION["msg"] = 'Tidak ada diubah.';
				$_SESSION["status"] = "sukses";
				?>
				<script>
					document.location.href = "index.php?pages=kerja&modul=view&id=<?php echo $id?>";
				</script>
				<?php
	}

	
	break;	
	
}
?>