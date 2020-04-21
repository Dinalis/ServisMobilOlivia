<?php
    $id=$_GET['id'];

    $sql = "SELECT * FROM tbl_admin WHERE id='$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);


?> 
    <div class="col-xs-12 col-sm-12 col-md-10">
          <ol class="breadcrumb">
              <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
              <li><a href="index.php?pages=user"><span class="fa fa-modx"></span> Administrator</a></li>
              <li class="active"><span class="fa fa-clone"></span> Ubah Data</li>
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
              
              $sql_query = "SELECT * FROM tbl_admin WHERE id= '".$_GET['id']."'";
              $data = mysql_fetch_array(mysql_query($sql_query));
              ?>
             
            <p style="margin-bottom:10px;">
                <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Data User</strong>
            </p>
            <div class="panel panel-default">
        <div class="panel-body">
            
                <form >
                  <div class="form-group">
                    <label for="jm">Username</label>
                    <input type="text" class="form-control" name="username" value ="<?php echo $row['username'] ?> " value="something" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jm">Password</label>
                    <input type="text" class="form-control" name="password" value ="<?php echo $row['password_cetak'] ?> " value="something" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jm">Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama" value ="<?php echo $row['nama'] ?> " value="something" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jm">Email</label>
                    <input type="text" class="form-control" name="nama" value ="<?php echo $row['email'] ?> " value="something" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jm">Nomor Hp</label>
                    <input type="text" class="form-control" name="no_hp" value ="<?php echo $row['no_hp'] ?> " value="something" readonly>
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
                </form>
                </div>
                </div>
              
          </div>
    
<?php
unset($_SESSION['msg']);
unset($_SESSION['status']);
?>