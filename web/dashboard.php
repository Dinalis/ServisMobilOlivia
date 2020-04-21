<br>
<div class='col-md-9'>
<div class="jumbotron">
	<?php 
	if(isset($_GET['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * from tbl_alumni WHERE username = '".$username."'";
		$query = mysql_query($sql);
		if(mysql_num_rows($query)>0)
		{
			$data = mysql_fetch_array($query);
			if($password == $data['password'])
			{
				$_SESSION['username'] = $data['username'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['level'] = "mahasiswa";
				$_SESSION['id']  = $data['id'];
				?>
				<script>
				document.location.href= 'index.php';
				</script>
				<?php 
			}else 
			{
				echo "<div class='alert alert-danger'>Password dan username tidak sesuai.</div>";
			}
		}else 
		{
			echo "<div class='alert alert-danger'>Username tidak terdaftar.</div>";
		}
	}
	?>
  <h1>Login</h1>
  <form  onsubmit="return checkform(this);" action='?modul=dashboard&login' method='post'>
  <div class='form-group'>
	<div class=''><label>Username</label></div>
	<div class=''><input type='text'  name='username' class='form-control'></div>
  </div>
  <div class='form-group'>
	<div class=''><label>Password</label></div>
	<div class=''><input type='password' name='password' class='form-control'></div>
  </div>
  <div class='form-group'>
	<font color="#DD0000">Captcha ></font> <span id="txtCaptchaDiv" style="background-color:#A51D22;color:#FFF;padding:5px"></span>
<input type="hidden" id="txtCaptcha" />
<input type="text" name="captcha" id="txtInput" size="15" />
  </div>
  <div class='form-group'>
	<input type='submit' value='Login' class='btn btn-success'>
	<input type='reset' value='Reset' class='btn btn-danger'>
  </div>
  </form>
</div>
</div>
<div class='col-md-3 sidebar'>

<div class='kalender'>
<div class="">
<div class="text-center"><h2>Kalender</h2></div>
  <div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
</div>

</div>


</div>

