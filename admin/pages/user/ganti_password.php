<?php
  $sql_query = "SELECT * FROM tbl_admin WHERE id= '".$_SESSION['login_id']."'";
  $data = mysql_fetch_array(mysql_query($sql_query));
?>
 <div class="col-xs-12 col-sm-12 col-md-10">
          <ol class="breadcrumb">
              <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
              <li class="active"><span class="fa fa-clone"></span> Data Profil</li>
            </ol>
              <?php
              if(isset($_SESSION["msg"]) && $_SESSION["status"]=="sukses")
              {
              ?>
                <div class="alert alert-success"><b>Well done!</b> <?php echo $_SESSION["msg"]?></div>
                <?php
              }else if(isset($_SESSION["msg"]) && $_SESSION["status"]=="gagal")
              {
              ?>
                <div class="alert alert-danger"><b>Well done!</b><?php echo $_SESSION["msg"]?></div>
                <?php
              }
              ?>
            <p style="margin-bottom:10px;">
                <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Profil</strong>
            </p>
            <div class="panel panel-default">
            <div class="panel-body">
            
                <form id="ganti_password" class="form-horizontal style-form" method="post" action="index.php?pages=user&modul=simpan_password">
                <input type="hidden" name="id" value="<?php echo $data["id"]?>" />
                  <div class="form-group">
                    <label for="jm">Password Lama</label>
                    <input type="password" class="form-control" name="password"  required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Password Baru</label>
                    <input type="password" name="new_password" id="new_password"  class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Ulangi Password Baru</label>
                    <input type="password" name="new_password" id="new_password2"  class="form-control" required>
                  </div>

         

                  <button type="submit" name="update" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                  
                </form>
                </div>
                </div>
              
          </div>
    

<?php
unset($_SESSION['msg']);
unset($_SESSION['status']);
?>
