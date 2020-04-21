<?php
	$id=$_GET['id'];

	$sql = "SELECT * FROM tbl_halaman WHERE id_isi='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	if(isset($_POST['update']))
	{
	
		$id=$_GET['id'];
		$kategori = $_POST['kategori'];
		$isi  = $_POST['isi'];

		$sql = "UPDATE tbl_halaman set kategori='".$kategori."' , isi='".$isi."' WHERE id_isi='".$id."'";
		$result = mysql_query($sql);

		if($result){
           $_SESSION["msg"] = 'Data berhasil diubah.';
			$_SESSION["status"] = "sukses"; ?>
			<script>
			document.location.href = "index.php?pages=halaman";
			</script>

		<?php
	    } else{
	    	$_SESSION["msg"] = 'Data gagal diubah.';
			$_SESSION["status"] = "gagal";
			echo mysql_error();
			?>
			<script>
				//history.go(-1);
			</script>
			<?php
	    }

	}

?>	  <div class="col-xs-12 col-sm-12 col-md-10">
		  <ol class="breadcrumb">
			  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="index.php?pages=halaman"><span class="fa fa-modx"></span> Halaman</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Ubah Data</li>
			</ol>
			 
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Ubah Isi Halaman</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">
			
			    <form method="post">
				  <div class="form-group">
				    <label for="jm">Kategori</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['kategori'] ?> " value="something" readonly>
				  </div>
				  <div class="form-group">
				    <label for="kt">Keterangan Nilai</label>
				    <textarea id="editor1" name="isi" class="form-control"><?php echo $row['isi']?></textarea>
				  </div>
				  <button type="submit" name="update" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
				  
				</form>
				</div>
				</div>
			  
		  </div>
	
