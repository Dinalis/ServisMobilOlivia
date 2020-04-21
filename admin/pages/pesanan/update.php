<?php
	$id=$_GET['id'];

	$sql = "SELECT * FROM tbl_pesanan WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);


?>	  <div class="col-xs-12 col-sm-12 col-md-10">
		  <ol class="breadcrumb">
			  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="index.php?pages=pesanan"><span class="fa fa-modx"></span> Halaman</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Ubah Data</li>
			</ol>
			 
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Ubah Pesanan</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">
			
			    <form method="post" action="index.php?pages=pesanan&modul=simpan&act=edit">
			    <input type="hidden" name="id" value="<?php echo $row["id"]?>" />
				  <div class="form-group">
				    <label for="jm">Nama</label>
				    <input type="text" class="form-control" name="nama" value ="<?php echo $row['nama'] ?> " required>
				  </div>

				  <div class="form-group">
				    <label for="jm">No Telepon</label>
				    <input type="text" class="form-control" name="no_telp" value ="<?php echo $row['no_telp'] ?> " required>
				  </div>

				  <div class="form-group">
				    <label for="jm">Jenis Pemesanan</label>
				   <?php 
						$jenis_pesanan = array('Paket Exclusive','Exterior','Interior','Ruang Mesin');
						?>
						<select name='select1' id="select1" class='form-control' required>
						<option value=''>Pilih Pesanan</option>
						<?php 
						foreach($jenis_pesanan as $item)
						{
							if($item==$row['jenis_pesanan'])
								echo "<option value='".$item."' selected>".$item."</option>";
							else
							echo "<option value='".$item."'>".$item."</option>";
						}
						?>
						</select>
				  </div>

				<div class="form-group">
          			<label for="jm">Pesanan Tambahan</label><br/> 
			
		             <input type="checkbox" name="tambahan[]" class="sum" value="spoorbal" >Spooring & Balancing (Rp. 200.000,-)<br/>
		             <input type="checkbox" name="tambahan[]" class="sum" value="spoor" >Spooring (Rp. 120.000,-)<br/>
		             <input type="checkbox" name="tambahan[]" class="sum" value="bal"  >Balancing (Rp. 80.000,-)<br/>
		             <input type="checkbox" name="tambahan[]" class="sum" value="optim" >Optimalisasi Nitrogen (Rp. 200.000,-)<br/>
		             <input type="checkbox" name="tambahan[]" class="sum" value="tuneup" >Tune Up (Rp. 300.000,-)<br/>
		             <input type="checkbox" name="tambahan[]" class="sum" value="acringan" >Perawatan AC Ringan (Rp. 200.000,-)<br/>
		             <input type="checkbox" name="tambahan[]" class="sum" value="fullservice" >Full Service AC (Rp. 500.000,-)<br/>
		        </div>

		        <div class="form-group">
				    <label for="jm">Biaya</label>
				   
    					<span type="text" name="payment-total" id="payment-total" class="form-control" ><?php echo $row['total_biaya'] ?></span>
      
				  </div>

				  

				  <div class="form-group">
				    <label for="jm">Tanggal Pemesanan</label>
				    <input type="text" id='datepicker' class="form-control" name="tanggal_pesanan" value ="<?php echo $row['tanggal_pesanan'] ?> " required>
				  </div>

				  <div class="form-group">
				    <label for="jm">Waktu Pemesanan</label>
				     <?php 
						$waktu_pesanan = array('Pukul 08:00 WIB-selesai','Pukul 09:00 WIB-selesai','Pukul 10:00 WIB-selesai','Pukul 11:00 WIB-selesai','Pukul 12:00 WIB-selesai','Pukul 13:00 WIB-selesai','Pukul 14:00 WIB-selesai','Pukul 15:00 WIB-selesai','Pukul 16:00 WIB-selesai','Pukul 17:00 WIB-selesai');
						?>
						<select name='waktu_pesanan' class='form-control' required>
						<option value=''>Pilih Waktu</option>
						<?php 
						foreach($waktu_pesanan as $item)
						{
							if($item==$row['waktu_pesanan'])
								echo "<option value='".$item."' selected>".$item."</option>";
							else
							echo "<option value='".$item."'>".$item."</option>";
						}
						?>
						</select>
				  </div>

				  <div class="form-group">
				    <label for="kt">catatan</label>
				    <textarea id="editor1" name="catatan" class="form-control"><?php echo $row['catatan']?></textarea>
				  </div>
				  <button type="submit" name="update" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
				  
				</form>
				</div>
				</div>
			  
		  </div>
	<script type="text/javascript">

var checkboxes = document.querySelectorAll('.sum')
var select = document.querySelector('#select1')
var total = document.querySelector('#payment-total')
var checkboxesTotal = 0
var selectTotal = 0



checkboxes.forEach(function(input) {
  input.addEventListener('change', onCheckboxSelect)
})

select.addEventListener('change', onSelectChange)

function onCheckboxSelect(e) {
  var sign = e.target.checked ? 1 : -1
  var sem1=0
  if(e.target.value=="spoorbal"){
				sem1=200000;
			}else if(e.target.value=="spoor"){
				sem1=120000;
			}else if (e.target.value=="bal") {
				
				sem1=80000;
			}else if(e.target.value=="optim"){
				sem1=200000;

			}else if (e.target.value=="tuneup") {
				
				sem1=300000;
			}else if(e.target.value=="acringan"){
				sem1=200000;

			}else if (e.target.value=="fullservice") {
				sem1=500000;
				
			}


  checkboxesTotal += sign * parseInt(sem1, 10)
  renderTotal()
}

function onSelectChange(e) {
  var value = document.getElementById('select1').value
  var jenis_pesanan = 0
  if(value=="Paket Exclusive"){
			jenis_pesanan=350000;
		}else if(value=="Exterior"){
			jenis_pesanan=250000;
		}else if(value=="Interior"){
			jenis_pesanan=200000;
		}else if(value=="Ruang Mesin"){
			jenis_pesanan=200000;
		}else{
			jenis_pesanan=0;
		}

  var harga = parseInt(jenis_pesanan, 10)
  if (!isNaN(harga)) {
    selectTotal = harga
    renderTotal()
  }
}

function renderTotal() {
  total.innerHTML = checkboxesTotal + selectTotal
}



function formatCurrency(num){
 num = num.toString().replace(/\$|\,/g,'');
 if(isNaN(num)) num = "0";
  cents = Math.floor((num*100+0.5)%100);
  num = Math.floor((num*100+0.5)/100).toString();
 if(cents < 10) cents = "0" + cents;
  for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
  num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
  return ("Rp. " + num + "," + cents);
}
</script>
