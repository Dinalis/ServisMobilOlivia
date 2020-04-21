<?php
include "sidebar.php";
	$sql = "SELECT * FROM tbl_halaman WHERE kategori='home'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
<div class='col-md-9 box'>


<?php
echo $row['isi'];
?>
</div>


