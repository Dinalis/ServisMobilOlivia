<?php
	$id=$_GET['id'];

	$sql = "SELECT * FROM tbl_kontak WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>	

  <div class="col-xs-12 col-sm-12 col-md-10">
		  <ol class="breadcrumb">
			  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="index.php?pages=kontak"><span class="fa fa-modx"></span> kontak</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Lihat Data</li>
			</ol>
			 
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Data Kontak</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">
			
			    <form method="post">
				  <div class="form-group">
				    <label for="jm">Nama</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['nama'] ?> " value="something" readonly>
				  </div>
				   <div class="form-group">
				    <label for="jm">Telepon</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['telepon'] ?> " value="something" readonly>
				  </div>
				   <div class="form-group">
				    <label for="jm">Alamat</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['alamat'] ?> " value="something" readonly>
				  </div>
				   <div class="form-group">
				    <label for="jm">Kota</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['kota'] ?> " value="something" readonly>
				  </div>
				   <div class="form-group">
				    <label for="jm">Email</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['email'] ?> " value="something" readonly>
				  </div>
				   

				  <div class="form-group">
				    <label for="kt">Pesan</label>
				    <textarea  name="isi" class="form-control" value="something" readonly><?php echo $row['pesan']?></textarea>
				  </div>

				  <div class="form-group">
				    <label for="jm">Tanggal dikirim</label>
				    <input type="text" class="form-control" name="kategori" value ="<?php echo $row['tgl_kirim'] ?> " value="something" readonly>
				  </div>
				 
				  
				</form>
				</div>
				</div>
			  
		  </div>
	
