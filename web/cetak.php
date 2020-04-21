<?php
include "../include/koneksi.php";
$id = $_GET['id'];

$q = mysql_query("select * from tbl_pesanan where id=$id");
$r = mysql_fetch_array($q);
?>
<body style="width:500px" onload="window.print()">
<center>
	<b>BUKTI PEMESANAN</b><br>
	<b>Via Jaya Ac</b>
</center><br><br>
<table align="center">
<tbody>
<tr>
<td>Nama</td>
<td>:</td>
<td><?php echo $r['nama'];?></td>
</tr>
<tr>
<td>No Telepon</td>
<td>:</td>
<td><?php echo $r['no_telp'];?></td>
</tr>
<tr>
<td>No Plat BK</td>
<td>:</td>
<td><?php echo $r['no_plat_bk'];?></td>
</tr>
<tr>
<td>Tipe Mobil</td>
<td>:</td>
<td><?php echo $r['tipe_mobil'];?></td>
</tr>
<tr>
<td>Jenis Pesanan</td>
<td>:</td>
<td><?php echo $r['jenis_pesanan'];?></td>
</tr>
<tr>
<td>Pesanan Tambahan</td>
<td>:</td>
<td><?php echo $r['pesanan_tambahan'];?></td>
</tr>
<tr>
<td>Estimasi Biaya</td>
<td>:</td>
<td>Rp. <?php echo number_format($r['total_biaya'],0,".",".")?></td>
</tr>
<tr>
<td>Tanggal Pesanan</td>
<td>:</td>
<td><?php echo $r['tanggal_pesanan'];?></td>
</tr>
<tr>
<td>Waktu Pesanan</td>
<td>:</td>
<td><?php echo $r['waktu_pesanan'];?></td>
</tr>
<tr>
<td>Catatan</td>
<td>:</td>
<td><?php echo $r['catatan'];?></td>
</tr>
</tbody>
</table>
<center>
<br><br>
	<b>
Terima kasih atas pemesanan anda
</b><br>
	<b>- Kepuasan Anda Adalah Kebanggaan Kami -</b>
</center>
<!-- DivTable.com -->
</body>