<?php
    $sql = "SELECT * FROM tbl_admin WHERE id='".$_SESSION['login_id']."'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);


?>    
<div class="col-xs-12 col-sm-12 col-md-10">
          <ol class="breadcrumb">
              <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
              <li class="active"><span class="fa fa-clone"></span> Data Profil</li>
            </ol>
             
            <p style="margin-bottom:10px;">
                <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Profil</strong>
            </p>
            <div class="panel panel-default">
        <div class="panel-body">
            
                <form method="post" action="index.php?pages=user&modul=simpan&act=edit">
                <input type="hidden" name="id" value="<?php echo $row["id"]?>" />
                  <div class="form-group">
                    <label for="jm">Username</label>
                    <input type="text" class="form-control" name="username" value ="<?php echo $row['username'] ?> " required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Password</label>
                    <input type="text" class="form-control" name="password" value ="<?php echo $row['password_cetak'] ?> " required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama" value ="<?php echo $row['nama'] ?> " required>
                  </div>

                   <div class="form-group">
                    <label for="jm">Email</label>
                    <input type="text" class="form-control" name="email" value ="<?php echo $row['email'] ?> " required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Nomor Hp</label>
                    <input type="text" class="form-control" name="no_hp" value ="<?php echo $row['no_hp'] ?> " required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Level</label>
                      <select class="form-control" required="required" name="level">
                         <?php
                         if($row['level'] == 'administrator')
                          echo '<option value="operator">Operator</option>';
                         else
                            echo '<option value="administrator">Administrator</option>';
                          echo '<option value="'.$row['level'].'" selected>'.ucwords($row['level']).'</option>';
                         ?>
                    </select>
                  </div>

                   <div class="form-group">
                    <label for="jm">Status</label>
                    <?php
                      if($row['aktif'] ==1)
                              echo '<input type="checkbox" checked="" data-toggle="switch" name="aktif" value="1">';
                      else
                          echo '<input type="checkbox"  data-toggle="switch" name="aktif" value="1">';
                        ?>
                  </div>

                  <button type="submit" name="update" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                  
                </form>
                </div>
                </div>
              
          </div>
    
