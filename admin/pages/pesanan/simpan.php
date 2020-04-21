<?php
switch($_GET['act'])
{
	case "baru":
	    if($_POST['select1']=="Paket Exclusive"){
			$jenis_pesanan=350000;
		}else if($_POST['select1']=="Exterior"){
			$jenis_pesanan=250000;
		}else if($_POST['select1']=="Interior"){
			$jenis_pesanan=200000;
		}else if($_POST['select1']=="Ruang Mesin"){
			$jenis_pesanan=200000;
		}




		$nama = $_POST['nama'];
		$no_telp  = $_POST['no_telp'];
		$tanggal_pesanan = $_POST['tanggal_pesanan'];
		$waktu_pesanan = $_POST['waktu_pesanan'];
		$catatan = $_POST['catatan'];
		$pesanan = $_POST['select1'];

		$biaya = implode(",",$_REQUEST['tambahan']);
		$bia=explode(",", $biaya);
		$sam=0;
		foreach ($bia as $key => $value) {
			if($value=="spoorbal"){
				$sem=200000;
			}elseif($value=="spoor"){
				$sem=120000;
			}elseif ($value=="bal") {
				# code...
				$sem=80000;
			}elseif($value=="optim"){
				$sem=200000;

			}elseif ($value=="tuneup") {
				# code...
				$sem=300000;
			}elseif($value=="acringan"){
				$sem=200000;

			}elseif ($value=="fullservice") {
				$sem=500000;
				# code...
			}
			$sam+=$sem;
		}

		$total_biaya=$sam+$jenis_pesanan;


		$sql = "INSERT INTO tbl_pesanan (nama, no_telp, jenis_pesanan,pesanan_tambahan, total_biaya, tanggal_pesanan, waktu_pesanan, catatan) 
		VALUES ('".$nama."' ,'".$no_telp."', '".$pesanan."','".$biaya."','".$total_biaya."', '".$tanggal_pesanan."', '".$waktu_pesanan."','".$catatan."' )";
		
		$result = mysql_query($sql);
		if($result){
			$sql_select = "SELECT id FROM tbl_pesanan WHERE nama='".$nama."' AND no_telp='".$no_telp."' ";
			$data = mysql_fetch_array(mysql_query($sql_select));
           	$_SESSION["msg"] = 'Data berhasil ditambah.';
			$_SESSION["status"] = "sukses"; ?>
			<script>
			 document.location.href = "index.php?pages=pesanan&modul=view&id=<?php echo $data['id']?>";
			</script>

		<?php
	    } else{
	    	$_SESSION["msg"] = 'Data gagal ditambah.';
			$_SESSION["status"] = "gagal";
			echo mysql_error();
			?>
			<script>
			
				
			</script>
			<?php
	    }
	break;

	case "edit":

		if($_POST['select1']=="Paket Exclusive"){
			$jenis_pesanan=350000;
		}else if($_POST['select1']=="Exterior"){
			$jenis_pesanan=250000;
		}else if($_POST['select1']=="Interior"){
			$jenis_pesanan=200000;
		}else if($_POST['select1']=="Ruang Mesin"){
			$jenis_pesanan=200000;
		}




		$id=$_POST['id'];
		$nama = $_POST['nama'];
		$no_telp  = $_POST['no_telp'];
		$tanggal_pesanan = $_POST['tanggal_pesanan'];
		$waktu_pesanan = $_POST['waktu_pesanan'];
		$catatan = $_POST['catatan'];
		$pesanan = $_POST['select1'];

		$biaya = implode(",",$_REQUEST['tambahan']);
		$bia=explode(",", $biaya);
		$sam=0;
		foreach ($bia as $key => $value) {
			if($value=="spoorbal"){
				$sem=200000;
			}elseif($value=="spoor"){
				$sem=120000;
			}elseif ($value=="bal") {
				# code...
				$sem=80000;
			}elseif($value=="optim"){
				$sem=200000;

			}elseif ($value=="tuneup") {
				# code...
				$sem=300000;
			}elseif($value=="acringan"){
				$sem=200000;

			}elseif ($value=="fullservice") {
				$sem=500000;
				# code...
			}
			$sam+=$sem;
		}

		$total_biaya=$sam+$jenis_pesanan;


	
		$sql = "UPDATE tbl_pesanan set nama='".$nama."' , no_telp='".$no_telp."', jenis_pesanan='".$pesanan."',pesanan_tambahan='".$biaya."',total_biaya='".$total_biaya."', tanggal_pesanan='".$tanggal_pesanan."', tanggal_pesanan='".$tanggal_pesanan."', waktu_pesanan='".$waktu_pesanan."',
			catatan='".$catatan."' WHERE id='".$id."'";
		$result = mysql_query($sql);

		if($result){
           $_SESSION["msg"] = 'Data berhasil diubah.';
			$_SESSION["status"] = "sukses"; ?>
			<script>
			document.location.href = "index.php?pages=pesanan&modul=view&id=<?php echo $id?>";
			</script>

		<?php
	    } else{
	    	$_SESSION["msg"] = 'Data gagal diubah.';
			$_SESSION["status"] = "gagal";
			echo mysql_error();
			?>
			<script>
			document.location.href = "index.php?pages=pesanan&modul=view&id=<?php echo $id?>";
				
			</script>
			<?php
	    }

	

	break;
}

?>

