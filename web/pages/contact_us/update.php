<?php
  $sql_query = "SELECT * FROM tbl_contact_us WHERE id= '".$_GET['id']."'";
  $data = mysql_fetch_array(mysql_query($sql_query));
?>
<div class="row ">
  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="showback">
    	
      <h4><i class="fa fa-angle-right"></i> Menu</h4>
      <button class="btn btn-round btn-primary" onclick="document.location.href='index.php?pages=contact_us&modul=data'">
      <span class="li_user"></span> View 
      </button>
      <a href='index.php?pages=contact_us&modul=hapus&id=<?php echo $data["id"];?>' class="btn btn-round btn-danger" onClick="return confirm('Anda yakin untuk menghapus data ini?')">Hapus</a>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb"><i class="fa fa-angle-right"></i> Form Contact Us</h4>
      <form enctype="multipart/form-data" class="form-horizontal style-form" method="post" action="index.php?pages=contact_us&modul=simpan&act=edit">
      <input type="hidden" name="id" value="<?php echo $data["id"]?>" />
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Contact Us</label>
          <div class="col-sm-10">
            <textarea id="editor1" name="contact_us" class="form-control" required="required"><?php echo $data["contact_us"]?></textarea>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"></label>
          <div class="row mt">
            <div class="col-sm-6 text-center">
              <input type="submit" value="Simpan" class="btn btn-primary"/>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
