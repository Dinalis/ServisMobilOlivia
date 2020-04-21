<?php
include "sidebar.php";
?>
<div class="form-group col-md-3">
          <label class="control-label">Jenis Pesanan </label>
		</div>
		<div class="form-group col-md-9">
       
			<select name='select1' id="select1"  >
			<option  class="sum">Pilih Pesanan</option>
			 
			<option value="350000" class="sum">Paket Exclusive</option>
			<option value="250000" class="sum">Exterior</option>
			<option value="200000" class="sum" >Interior</option>
			<option value="200000" class="sum">Ruang Mesin</option>
			
			</select>
        </div>
<div class="form-group col-md-8">
             <input type="checkbox"  class="sum"  value="200000" >Spooring & Balancing (Rp. 200.000,-)<br/>
             <input type="checkbox"  class="sum" value="120000" >Spooring (Rp. 120.000,-)<br/>
             <input type="checkbox"  class="sum" value="80000"  >Balancing (Rp. 80.000,-)<br/>
             <input type="checkbox"  class="sum" value="200000" >Optimalisasi Nitrogen (Rp. 200.000,-)<br/>
             <input type="checkbox"  class="sum" value="300000" >Tune Up (Rp. 300.000,-)<br/>
             <input type="checkbox"  class="sum" value="200000" >Perawatan AC Ringan (Rp. 200.000,-)<br/>
             <input type="checkbox"  class="sum" value="500000" >Full Service AC (Rp. 500.000,-)
        </div>
    	<div class="form-group col-md-3">
          <label class="control-label">Biaya Total </label>
		</div>
		<div class="form-group col-md-9">
    <span type="text" name="payment-total" id="payment-total"  >0</span>
        </div>


        <script type="text/javascript">
            
            var checkboxes = document.querySelectorAll('.sum')
var select = document.querySelector('#select1')
var total = document.querySelector('#payment-total')
var checkboxesTotal = 0
var selectTotal = 0

checkboxes.forEach(function(input) {
  input.addEventListener('change', onCheckboxSelect)
})

select.addEventListener('change', onSelectChange)

function onCheckboxSelect(e) {
  var sign = e.target.checked ? 1 : -1
  checkboxesTotal += sign * parseInt(e.target.value, 10)
  renderTotal()
}

function onSelectChange(e) {
  var value = parseInt(e.target.value, 10)
  if (!isNaN(value)) {
    selectTotal = value
    renderTotal()
  }
}

function renderTotal() {
  total.innerHTML = checkboxesTotal + selectTotal
}
        </script>