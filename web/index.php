<?php
include "header.php";
?>
<!--script src="js/jquery.js"></script-->

<script src="js/fileinput.min.js"></script>

<script src="js/bootstrap-datepicker.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script>
$(document).ready(function () {
		$('#datepicker').datepicker({
			dateFormat: 'yy-mm-dd',          
            minDate: 0,
            maxDate: '+7'
		});  
	});
</script>

<div class="container ">
  <div class="">
    <div class="">     
          <!--/stories-->
		   <?php
			$modul = "data.php";
			if(isset($_GET["modul"]))
			{
				$modul = $_GET["modul"].".php";
				include $_GET['pages']."/".$modul;
			
			}else
			{
					
					include "home.php";
			}
			?>
		  
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
</div>                                                
 </div>

<div class="row">
<?php
include "footer.php";
?>
</div>

	<!-- script references -->
		
	</body>
</html>

<script type="text/javascript">
function checkform(theform){
var why = "";

if(theform.txtInput.value == ""){
why += "- Security code should not be empty.\n";
}
if(theform.txtInput.value != ""){
if(ValidCaptcha(theform.txtInput.value) == false){
why += "- Security code did not match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

//Generates the captcha function
var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("txtCaptchaDiv").innerHTML = code;

// Validate the Entered input aganist the generated security code function
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('txtInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}

</script>

    <script src="responsive-calendar/js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          //time: '2013-05',
          events: {
            "<?php echo date("Y-m-d")?>": {},
            }
        });
      });
    </script>