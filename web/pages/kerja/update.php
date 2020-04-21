  <div class="col-xs-12 col-sm-12 col-md-10">
      <ol class="breadcrumb">
        <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
        <li><a href="index.php?pages=kerja"><span class="fa fa-modx"></span> Pengerjaan</a></li>
        <li class="active"><span class="fa fa-clone"></span> Ganti Foto</li>
      </ol>
       
        <p style="margin-bottom:10px;">
          <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Edit Foto Pengerjaan</strong>
        </p>
        <div class="panel panel-default">

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_pengerjaan WHERE id= $id";
$result = mysql_query($sql);

$no=1;
while ($row =mysql_fetch_array($result)){

  ?>
      <div class="panel-body">
          <form enctype="multipart/form-data" method="post" action="index.php?pages=kerja&modul=simpan&act=edit">
          <input type="hidden" name="id" value="<?php echo $row["id"]?>" />
          <div class="form-group">
            <img src="../upload/pengerjaan/small_<?php echo $row['foto']?>">
          </div>
          <div class="form-group">
            <label for="jm">Ganti Foto</label>
            <input type='file' name='foto'  required>
            <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px
          </div>

          <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          
        </form>
        </div>
      </div>
  </div>
  <?php
}
  ?>      
      </div>
  
