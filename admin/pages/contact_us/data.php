<div class="col-lg-12 col-md-12 col-sm-12">
  <div class="showback">
    <h4><i class="fa fa-angle-right"></i> Data Company Profile</h4>
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
	
  $sql_query = "SELECT * FROM tbl_contact_us 
  				";
  
  $query = mysql_query($sql_query);
  if(mysql_num_rows($query)>0)
  	$data = mysql_fetch_array(mysql_query($sql_query));
  echo mysql_error();
  ?>
   
    <table width="100%" class="data">
      <tr>
       
        <td ><h4><?php echo $data["contact_us"]?></h4></td>
      <tr>
      
      
      
    </table>
    <h4><i class="fa fa-angle-right"></i> Menu</h4>
   

    <button type="button" class="btn btn-round btn-warning" onClick="document.location.href = 'index.php?pages=contact_us&modul=update&id=<?php echo $data['id']?>'">Edit</button>
   
  </div>
</div>

<?php
unset($_SESSION['msg']);
unset($_SESSION['status']);
?>