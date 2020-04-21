<?php
include "sidebar.php";
?>
<div class='col-md-9 box'>
<img class="center" src="images/logo.jpg" align="center">
<?php 
if(isset($_GET['do']))
{
	$nama = strip_tags($_POST['nama']);
	$email = strip_tags($_POST['email']);
	$telepon = strip_tags($_POST['telepon']);
	$alamat = strip_tags($_POST['alamat']);
	$kota = strip_tags($_POST['kota']);
	$pesan = strip_tags($_POST['pesan']);
	$sql = "INSERT INTO tbl_kontak VALUES(null,'".$telepon."','".$alamat."','".$kota."','".$nama."','".$email."','".$pesan."','".date("Y-m-d H:i:s")."')";
	$query = mysql_query($sql);
	if($query)
	{
		echo "<div class='alert alert-success'>Pesan anda berhasil dikirim. Terima Kasih</div>";
	}else
	{
		echo "<div class='alert alert-danger'>Maaf terjadi kesalahan, pesan anda tidak berhasil dikirim, silahkan coba lagi.</div>";
	}
}
?>
	<p align="left">
	<strong>KANTOR PUSAT</strong><br />
	Jl.P.Polim Gg.Sidodadi No.14 Bojonegoro<br /></p>


<p align="left">
	<strong> </strong><br />
	Mobile: 08568234337
	NO.REK : 3506-01-027286-53-1 (BRI)<br /></p>


Atau dapat juga menghubungi kami dengan mengisi form di bawah ini.<br><br>
<div class="col-md-9">
	<form style="text-align: center" onsubmit="return checkform(this);" action='?modul=about_us&do' method='post'>
		<div class="form-group col-md-3">
          <label class="control-label">Nama </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="nama" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Email </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="email" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Alamat </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="alamat" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Telepon </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="telepon" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Kota </label>
		</div>
		<div class="form-group col-md-9">
            <input type="text" name="kota" class="form-control" required="required">
        </div>
		<div class="form-group col-md-3">
          <label class="control-label">Pesan</label>
		</div>
		<div class="form-group col-md-9">
            <textarea name='pesan' class='form-control' required></textarea>
        </div>
      
        <div class='form-group'>
		<font color="#DD0000">Captcha ></font> 
		<span id="txtCaptchaDiv" style="background-color:#A51D22;color:#FFF;padding:5px"></span>
		<input type="hidden" id="txtCaptcha" />
		<input type="text" name="captcha" id="txtInput" size="15" />
		  </div>
		<div class='col-md-4'></div>
		<div class="form-group col-md-8">
          
            <input type="submit" name="register" class="btn btn-success" value='Submit'>
        </div>
	</form>
</div>
</div>