  <div class="col-xs-12 col-sm-12 col-md-10">
      <ol class="breadcrumb">
        <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
        <li><a href="index.php?pages=kerja"><span class="fa fa-modx"></span> Pengerjaan</a></li>
        <li class="active"><span class="fa fa-clone"></span> Lihat Foto</li>
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
                <div class="alert alert-danger"><b>!!!</b><?php echo $_SESSION["msg"]?></div>
                <?php
                }?>

       
        <p style="margin-bottom:10px;">
          <strong style="font-size:18pt;"><span class="fa fa-clone"></span> Foto Pengerjaan</strong>
        </p>
        <div class="panel panel-default">

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_pengerjaan WHERE id= $id";
$result = mysql_query($sql);

while ($row =mysql_fetch_array($result)){

  ?>
      <div class="panel-body">
          <form>
          <div class="form-group">
            <img src="../upload/pengerjaan/small_<?php echo $row['foto']?>">
          </div>
        </form>
        </div>
      </div>
  </div>
  <?php
}
  ?>      
 
  
