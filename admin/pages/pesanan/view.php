<?php
	$id=$_GET['id'];

	$sql = "SELECT * FROM tbl_pesanan WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$checkbox_array = explode(",", $row['pesanan_tambahan']);


?>	  <div class="col-xs-12 col-sm-12 col-md-10">
		  <ol class="breadcrumb">
			  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="index.php?pages=pesanan"><span class="fa fa-modx"></span> Halaman</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Lihat Data</li>
			</ol>
			 
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Lihat Pesanan</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">			
			    <form >
			    <input type="hidden" name="id" value="<?php echo $row["id"]?>" />
				  <div class="form-group">
				    <label for="jm">Nama</label>
				    <input type="text" class="form-control" name="nama" value ="<?php echo $row['nama'] ?> " value="something" readonly>
				  </div>

				  <div class="form-group">
				    <label for="jm">No Telepon</label>
				    <input type="text" class="form-control" name="no_telp" value ="<?php echo $row['no_telp'] ?> " value="something" readonly>
				  </div>
				  
				  <div class="form-group">
				    <label for="jm">No Plat BK</label>
				    <input type="text" class="form-control" name="no_plat_bk" value ="<?php echo $row['no_plat_bk'] ?> " value="something" readonly>
				  </div>
				  
				  <div class="form-group">
				    <label for="jm">Tipe Mobil</label>
				    <input type="text" class="form-control" name="tipe_mobil" value ="<?php echo $row['tipe_mobil'] ?> " value="something" readonly>
				  </div>

				  <div class="form-group">
				    <label for="jm">Jenis Pemesanan</label>
				   <select name='select1' id="select1" class="form-control" readonly>
												 
						<?php
						
						  $pesan = htmlentities($row['jenis_pesanan']);
						  echo '<option value="'.$pesan.'">'.$pesan."</option>\n";
						
						?>

						
					</select>
				  </div>

				   <div class="form-group">
				    <label for="jm">Pesanan Tambahan</label><br/>
				    	<input type="checkbox" name="tambahan[]" class="sum" value="spoorbal"<?php if(in_array("spoorbal", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Spooring & Balancing (Rp. 200.000,-)<br/>
				    	<input type="checkbox" name="tambahan[]" class="sum" value="spoor"<?php if(in_array("spoor", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Spooring (Rp. 120.000,-) <br />
				    	<input type="checkbox" name="tambahan[]" class="sum" value="bal"<?php if(in_array("bal", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Balancing (Rp. 80.000,-)<br />
				    	<input type="checkbox" name="tambahan[]" class="sum" value="optim"<?php if(in_array("optim", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Optimalisasi Nitrogen (Rp. 200.000,-)<br />
				    	<input type="checkbox" name="tambahan[]" class="sum" value="tuneup"<?php if(in_array("tuneup", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Tune Up (Rp. 300.000,-)<br />
				    	<input type="checkbox" name="tambahan[]" class="sum" value="acringan"<?php if(in_array("acringan", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Perawatan AC Ringan (Rp. 200.000,-)<br />
				    	<input type="checkbox" name="tambahan[]" class="sum" value="fullservice"<?php if(in_array("fullservice", $checkbox_array)){ echo " checked=\"checked\""; } ?> disabled /> Full Service AC (Rp. 500.000,-)<br />
				  	 
				  		
				  </div>
				 
				  <div class="form-group">
				    <label for="jm">Total Biaya</label>
				    <input type="text" class="form-control" name="biaya" value ="<?php echo $row['total_biaya'] ?> " value="something" readonly>
				  </div>


				  <div class="form-group">
				    <label for="jm">Tanggal Pemesanan</label>
				    <input type="text"  class="form-control" name="tanggal_pesanan" value ="<?php echo $row['tanggal_pesanan'] ?> " value="something" readonly>
				  </div>

				  <div class="form-group">
				    <label for="jm">Waktu Pemesanan</label>
				    <input type="text" class="form-control" name="waktu_pesanan" value ="<?php echo $row['waktu_pesanan'] ?> " value="something" readonly>
				  </div>

				  <div class="form-group">
				    <label for="kt">catatan</label>
				    <textarea id="editor1" name="catatan" class="form-control"><?php echo $row['catatan']?></textarea>
				  </div>
				 
				  
				</form>
				</div>
				</div>
			  
		  </div>
	
