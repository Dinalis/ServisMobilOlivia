<br>
<?php
  $sql = "SELECT * FROM tbl_halaman WHERE kategori='sidebar'";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<div class='col-md-3'>
<?php
echo $row['isi'];
?>

</div>