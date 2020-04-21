<?php
include "sidebar.php";
?>
<div class='col-md-9 box'>
<?php 
if(isset($_GET['do']))
{
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
		
		$no_plat_bk = $_POST['no_plat_bk'];
		$tipe_mobil = $_POST['tipe_mobil'];
		
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

		$batas = mysql_query("select * from tbl_pesanan where tanggal_pesanan='$tanggal_pesanan' and waktu_pesanan='$waktu_pesanan'");
		$hb = mysql_num_rows($batas);
		
		$cekbk = mysql_query("select * from tbl_pesanan where tanggal_pesanan='$tanggal_pesanan' and no_plat_bk ='$no_plat_bk'");
		$hc = mysql_num_rows($cekbk);
		
		
		if($hb > 3){
			echo "<div class='alert alert-danger'>Maaf pemesanan untuk waktu tersebut telah penuh,Silahkan dipilih waktu lainnya.</div>";
		}elseif($hc > 0){
			echo "<div class='alert alert-danger'>No Plat BK Anda sudah dipesan untuk tanggal tersebut.</div>";
			}
			else{
		
		$sql = "INSERT INTO tbl_pesanan (nama, no_telp,no_plat_bk,tipe_mobil, jenis_pesanan,pesanan_tambahan, total_biaya, tanggal_pesanan, waktu_pesanan, catatan) 
		VALUES ('".$nama."' ,'".$no_telp."','".$no_plat_bk."','".$tipe_mobil."', '".$pesanan."','".$biaya."','".$total_biaya."', '".$tanggal_pesanan."', '".$waktu_pesanan."','".$catatan."' )";
		
		$query = mysql_query($sql);
		if($query)
		{
			echo "<div class='alert alert-success'>Pesanan anda berhasil dikirim. Terima Kasih </div>";
			$last=mysql_insert_id();
			?>
			<script>
				if (confirm('Apakah Anda Ingin Mencetak Bukti Pesanan ?')) {
   document.location = "cetak.php?id=<?php echo $last;?>";
} else {
    // Do nothing!
}
			</script>
			<?php
			
		}else
		{
			echo "<div class='alert alert-danger'>Maaf terjadi kesalahan, pesan anda tidak berhasil dikirim, silahkan coba lagi.</div>";
		}
			
	}
}
?>
	
<div class="col-md-10">
<h1 style="text-align: center">Pemesanan</h1>
<br>
	<form  onsubmit="return checkform(this);" action='?modul=pesanan&do' method='post'>
		<div class="form-group col-md-3">
          <label class="control-label">Nama </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="nama" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">No Telepon </label>
		</div>
		
		<div class="form-group col-md-9">
            <input type="text" name="no_telp" class="form-control" required="required">
        </div>
        <div class="form-group col-md-3">
          <label class="control-label">No Plat BK </label>
		</div>
		
		<div class="form-group col-md-9">
            <input type="text" name="no_plat_bk" class="form-control" required="required">
        </div>
        <div class="form-group col-md-3">
          <label class="control-label">Tipe Mobil </label>
		</div>
		<div class="form-group col-md-9">
       
			<select name='tipe_mobil'  class="form-control">
			<option  class="sum">Pilih Tipe Mobil</option>
			 
			<option value="Ertiga">Ertiga</option>
			<option value="Carry Pick Up">Carry Pick Up</option>
			<option value="APV">APV</option>
			<option value="Ignis">Ignis</option>
			
			</select>
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Jenis Pesanan </label>
		</div>
		<div class="form-group col-md-9">
       
			<select name='select1' id="select1" class="form-control">
			<option  class="sum">Pilih Pesanan</option>
			 
			<option value="Paket Exclusive" class="sum">Paket Exclusive</option>
			<option value="Exterior" class="sum">Exterior</option>
			<option value="Interior" class="sum" >Interior</option>
			<option value="Ruang Mesin" class="sum">Ruang Mesin</option>
			<option value="Perawatan Berkala 10.000 KM" class="sum">Perawatan Berkala 10.000 KM</option>
			<option value="Perawatan Berkala 20.000 KM" class="sum">Perawatan Berkala 20.000 KM</option>
			<option value="Perawatan Berkala 40.000 KM" class="sum">Perawatan Berkala 40.000 KM</option>
			<option value="Lainnya" class="sum">Lainnya</option>
			</select>
        </div>
        <div class="form-group col-md-12" id="demo">
	        <div class="form-group col-md-3" >
	          <label class="control-label">Estimasi Biaya </label>
			</div>
			<div class="form-group col-md-9 " >
	            <p>Rp. 350.000,-</br>Dengan Rincian</br>
	            	<ul>
	            		<li>Poles Body : Rp. 150.000,-</li>
	            		<li>Poles Kaca : Rp. 75.000,-</li>
	            		<li>Steam Interior : Rp. 50.000,-</li>
	            		<li>Mesin : Rp. 50.000,-</li>
	            		<li>Paint Protection : Rp. 25.000,-</li>

	            	</ul>

	            </p>
	        </div>

    	</div>
    	<div class="form-group col-md-12" id="demo1">
	        <div class="form-group col-md-3" >
	          <label class="control-label">Estimasi Biaya </label>
			</div>
			<div class="form-group col-md-9" >
	            <textarea  class="form-control" disabled>Rp. 250.000,-</textarea>
	        </div>

    	</div>
    	<div class="form-group col-md-12" id="demo2">
	        <div class="form-group col-md-3" >
	          <label class="control-label">Estimasi Biaya </label>
			</div>
			<div class="form-group col-md-9" >
	            <textarea  class="form-control" disabled>Rp. 200.000,-</textarea>
	        </div>

    	</div>
    	<div class="form-group col-md-12" id="demo3">
	        <div class="form-group col-md-3" >
	          <label class="control-label">Estimasi Biaya </label>
			</div>
			<div class="form-group col-md-9" >
	            <textarea  class="form-control" disabled>Rp. 200.000,-</textarea>
	        </div>

    	</div>
    	<div class="form-group col-md-4">
          <label class="control-label">Pesanan Tambahan </label>
		</div>
		<div class="form-group col-md-8" class="form-control">
             <input type="checkbox" name="tambahan[]" class="sum" value="spoorbal" >Tune Up (Rp. 225.000,-)<br/>
             <input type="checkbox" name="tambahan[]" class="sum" value="spoor" >Ganti AKI (Rp. 300.000,-)<br/>
             <input type="checkbox" name="tambahan[]" class="sum" value="bal"  >Ganti OLI (Rp. 80.000,-)<br/>
             <input type="checkbox" name="tambahan[]" class="sum" value="optim" > Kaca Film(Rp. 200.000,-)<br/>
             <input type="checkbox" name="tambahan[]" class="sum" value="tuneup" >Pemasangan Audio Mobil(Rp. 3500.000,-)<br/>
             <input type="checkbox" name="tambahan[]" class="sum" value="acringan" >Perawatan AC Ringan (Rp. 2500.000,-)<br/>
             <input type="checkbox" name="tambahan[]" class="sum" value="fullservice" >Full Service AC (Rp. 3000.000,-)
        </div>
    	<div class="form-group col-md-3">
          <label class="control-label">Estimasi Biaya</label>
		</div>
		<div class="form-group col-md-9">
    <span type="text" name="payment-total" id="payment-total" class="form-control" >0</span>
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Tanggal Pesanan </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" id='datepicker' name="tanggal_pesanan" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Waktu Pesanan </label>
		</div>
		<div class="form-group col-md-9">
            <?php 
			$waktu_pesanan = array('Pukul 08:00 WIB-selesai','Pukul 09:00 WIB-selesai','Pukul 10:00 WIB-selesai','Pukul 11:00 WIB-selesai','Pukul 12:00 WIB-selesai','Pukul 13:00 WIB-selesai','Pukul 14:00 WIB-selesai','Pukul 15:00 WIB-selesai','Pukul 16:00 WIB-selesai','Pukul 17:00 WIB-selesai');
			?>
			<select name='waktu_pesanan' class='form-control' required>
			<option value=''>Pilih Waktu</option>
			<?php 
			foreach($waktu_pesanan as $item)
			{
				echo "<option value='".$item."'>".$item."</option>";
			}
			?>
			</select>
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Catatan</label>
		</div>
		<div class="form-group col-md-9">
            <textarea name='catatan' class='form-control' required></textarea>
        </div>
		<div class="form-group col-md-4">
          
            <input type="submit" name="register" class="btn btn-primary" value='Pesan'>
        </div>
	</form>
</div>
</div>


<style type="text/css">
	#demo{display:none;}
	#demo1{display:none;}
	#demo2{display:none;}
	#demo3{display:none;}
</style>

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
		}else if(value=="Perawatan Berkala 10.000 KM"){
			jenis_pesanan=600000;
		}else if(value=="Perawatan Berkala 20.000 KM"){
			jenis_pesanan=1200000;
		}else if(value=="Perawatan Berkala 40.000 KM"){
			jenis_pesanan=1500000;
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
  total.innerHTML = formatCurrency(checkboxesTotal + selectTotal)
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

function showDiv(elem){
   if(elem.value == 'Paket Exclusive'){
      document.getElementById('demo').style.display = "block";
      document.getElementById('demo1').style.display = "none";
      document.getElementById('demo2').style.display = "none";
      document.getElementById('demo3').style.display = "none";
      
   }else if(elem.value == 'Exterior'){
	   	document.getElementById('demo1').style.display = "block";
	   	document.getElementById('demo').style.display = "none";
	   	document.getElementById('demo2').style.display = "none";
	    document.getElementById('demo3').style.display = "none";
   }else if(elem.value == 'Interior'){
   	document.getElementById('demo2').style.display = "block";
   	document.getElementById('demo1').style.display = "none";
	   	document.getElementById('demo').style.display = "none";
	   	 document.getElementById('demo3').style.display = "none";
   }else if(elem.value == 'Ruang Mesin'){
   	document.getElementById('demo3').style.display = "block";
   	document.getElementById('demo1').style.display = "none";
	   	document.getElementById('demo').style.display = "none";
	   	document.getElementById('demo2').style.display = "none";
   }else{
   	document.getElementById('demo3').style.display = "none";
   	document.getElementById('demo1').style.display = "none";
	   	document.getElementById('demo').style.display = "none";
	   	document.getElementById('demo2').style.display = "none";
   }
}
</script>
