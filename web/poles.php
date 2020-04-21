<?php
include "sidebar.php";
	$sql = "SELECT * FROM tbl_halaman WHERE kategori='poles'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
<div class='col-md-9 box'>
<img class="center" src="images/logo.png" align="center">
<?php
echo $row['isi'];
?>
</div>


