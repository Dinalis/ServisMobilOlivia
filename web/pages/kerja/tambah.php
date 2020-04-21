  <div class="col-xs-12 col-sm-12 col-md-10">
      <ol class="breadcrumb">
        <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
        <li><a href="index.php?pages=kerja"><span class="fa fa-modx"></span> Pengerjaan</a></li>
        <li class="active"><span class="fa fa-clone"></span> Tambah Foto</li>
      </ol>
       
        <p style="margin-bottom:10px;">
          <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Foto Pengerjaan</strong>
        </p>
        <div class="panel panel-default">

      <div class="panel-body">
      
          <form enctype="multipart/form-data" method="post" action="index.php?pages=kerja&modul=simpan&act=baru">
          <div class="form-group">
            <label for="jm">Upload Foto</label>
            <input type='file' name='foto'  required>
            <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px
          </div>

          <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          
        </form>
        </div>
      </div>
        
      </div>
  
