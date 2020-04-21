   
<div class="col-xs-12 col-sm-12 col-md-10">
          <ol class="breadcrumb">
              <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
              <li><a href="index.php?pages=user"><span class="fa fa-modx"></span> Administrator</a></li>
              <li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
            </ol>
             
            <p style="margin-bottom:10px;">
                <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah User</strong>
            </p>
            <div class="panel panel-default">
        <div class="panel-body">
            
                <form method="post" action="index.php?pages=user&modul=simpan&act=baru">
                <input type="hidden" name="id" value="<?php echo $row["id"]?>" />
                  <div class="form-group">
                    <label for="jm">Username</label>
                    <input type="text" class="form-control" name="username" required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Password</label>
                    <input type="text" class="form-control" name="password"  required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama"  required>
                  </div>

                   <div class="form-group">
                    <label for="jm">Email</label>
                    <input type="text" class="form-control" name="email"  required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Nomor Hp</label>
                    <input type="text" class="form-control" name="no_hp"  required>
                  </div>

                  <div class="form-group">
                    <label for="jm">Level</label>
                       <select class="form-control" required="required" name="level">
                        <option>Pilih level pengguna....</option>
                        <option value="administrator">Administrator</option>
                        <option value="operator">Operator</option>
                        
                      </select>
                  </div>

                   <div class="form-group">
                    <label for="jm">Status</label>
                    <input type="checkbox" checked="" data-toggle="switch" name="aktif" value="1"/>
                  </div>

                  <button type="submit"  class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                  
                </form>
                </div>
                </div>
              
          </div>
    
