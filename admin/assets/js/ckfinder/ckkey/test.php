

<script type="text/javascript" src="jquery.js"></script>

<script>
function ajax(){
$.post('go.php',{'host':$('#host').val()},function(data){
 $('#keygen').val(data);
 $('#keygen').focus().select();
});
}
</script>
<div style="padding:10px 5px; margin:10px 0px; border:1px solid #ccc;">
<p>
	Nama hosting anda(tanpa http://www.)</p>
<p><input id="host" type="text" placeholder="google.com" />&nbsp;<input onclick="ajax();" type="button" value="Get key" /></p>
<p>
	<input id="keygen" onclick="$(this).select();" size="32" readonly="readonly" type="text" value="" /></p>
</div>

