
<div class="row ">
  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="showback">
      <h4><i class="fa fa-angle-right"></i> Menu</h4>
      <button class="btn btn-primary" onclick="document.location.href='index.php?pages=company_profile&modul=data'">
      <span class="li_user"></span> Company Profile
      </button>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb"><i class="fa fa-angle-right"></i> Form Company Profile</h4>
      <form enctype="multipart/form-data" class="form-horizontal style-form" method="post" action="index.php?pages=company_profile&modul=simpan&act=baru">
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Company Profile</label>
          <div class="col-sm-10">
            <textarea name="company_profile" class="form-control"></textarea>
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
