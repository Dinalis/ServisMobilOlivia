<?php

if(isset($_POST['hapus-contengan'])){
    $imp = "('".implode("','",array_values($_POST['checkbox']))."')";
    $sql = "DELETE FROM tbl_halaman WHERE id_isi in $imp";
    $result = mysql_query($sql);
    if($result){
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showSuccessToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    } else{
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showErrorToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    }
}
?>

	<div class="col-xs-12 col-sm-12 col-md-10">
	<ol class="breadcrumb">
	  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
	  <li class="active"><span class="fa fa-modx"></span> halaman</li>
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

<form method="post">
	<div class="row">
		<div class="col-md-6 text-left">
			<strong style="font-size:18pt;"><span class="fa fa-modx"></span> Data Halaman</strong>
		</div>
		<div class="col-md-6 text-right">
            <button type="submit" name="hapus-contengan" class="btn btn-danger"><span class="fa fa-close"></span> Hapus Contengan</button>
			
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="10px"><input type="checkbox" name="select-all" id="select-all" /></th>
                <th >kategori</th>
                
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th><input type="checkbox" name="select-all2" id="select-all2" /></th>
                <th>Kategori</th>
                
                <th>Aksi</th>
            </tr>
        </tfoot>

        <tbody>
<?php
$sql = "SELECT * FROM tbl_halaman";
$result = mysql_query($sql);

$no=1;
while ($row =mysql_fetch_array($result)){
?>
            <tr>
                <td style="vertical-align:middle;"><input type="checkbox" value="<?php echo $row['id_isi'] ?>" name="checkbox[]" /></td>
                <td style="vertical-align:middle;"><?php echo $row['kategori'] ?></td>
                
                <td class="text-center" style="vertical-align:middle;">
					<a href="index.php?pages=halaman&modul=update&id=<?php echo $row['id_isi'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="index.php?pages=halaman&modul=hapus&id=<?php echo $row['id_isi'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
    </form>	
</div>

<?php

unset($_SESSION['msg']);
unset($_SESSION['status']);
?>