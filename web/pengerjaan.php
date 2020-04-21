<?php
include "sidebar.php";
    $sql = "SELECT * FROM tbl_pengerjaan";
    $result = mysql_query($sql);
    
?>
<div class='col-md-9 box'>

<img class="center" src="images/logo.jpg" align="center" weight="500px" height="250px">
<p align="left">
	Ini adalah beberapa foto pengerjaan yang dilakukan oleh staff kami saat berada di lapangan:</p>

<?php
while($row = mysql_fetch_array($result))
{
?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="../upload/pengerjaan/small_<?php echo $row['foto']?>" alt="">
                </a>
            </div>
 <?php
}
 ?>          

</div>
