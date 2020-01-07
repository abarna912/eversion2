<?php
include '../includes/db-config.php';
?>
<style type="text/css">
span#content1{
display:none;
}
span#content2 {
display:none;
}
input#show:checked ~ span#content1{
  display:block;
}
input#hide:checked ~ span#content2{
  display:block;
}
input#country:checked ~ span#mc{
display:block;
}
span#mc{
display:none;
}
span.mc1{
display:none;
}
input#o_country:checked ~span.mc1{
display:block;
}
</style>
<input type="radio" id="country" name="ctry">India
<span id="mc">
<input type="radio" id="show" name="job_type">
<label id="id1"><span id="id1">Export</span></label>

<span id="content1">
<label>Pick_Type</label>
<input type="radio" name="l_o" id="i_p">Local
<input type="radio" name="l_o"  id="i_p">Outstation
<br>
<br>
<label>Pickup_Pincode</label>
<input type="text" id="i_pin">
<br>
<br>
<label>Port_of_offloading</label>
<select id="i_off">
<option value='0'></option>
 <?php  $getPort = getPort();
			foreach($getPort as $or_value){	?>
            <option value='<?php echo $or_value['pid']; ?>' ><?php echo $or_value['port_name']; ?></option>
           <?php }	?>
</select>
<br>
<br>
<input type="button" id="btn_save" value="save" onClick="saveServiceProviderDetail()" class="submitBtnModal" />
</span>

<input type="radio" id="hide" name="job_type"> 
<label id="id2"><span id="id2">Import</span></label>
<span id="content2">
<label>Delivery_Type</label>
<input type="radio" name="l_o" id="i_pp">Local
<input type="radio" name="l_o" id="i_pp">Outstation
<br>
<br>
<label>Port_of_Loading</label>
<select id="i_pl">
<option value='0'></option>
 <?php  $getPort = getPort();
			foreach($getPort as $or_value){	?>
            <option value='<?php echo $or_value['pid']; ?>' ><?php echo $or_value['port_name']; ?></option>
           <?php }	?>
</select>
<br>
<br>
<label>Dest_Pincode</label>
<input type="text" id="i_pin">
<br>
<br>
<input type="button" id="btn_save" value="save" onClick="saveServiceProviderDetail()" class="submitBtnModal" />
</span>
</span>
<input type="radio" id="o_country" name="ctry">Outside India
<span class="mc1">
<input type="radio" id="show" name="job_type">
<label id="id1"><span id="id1">Export</span></label>
<span id="content1">
<label>Pick_Type</label>
<input type="radio" name="l_o" id="o_p">Local
<input type="radio" name="l_o" id="o_p">Outstation
<br>
<br>
<label>Pickup_Pincode</label>
<input type="text" id="o_pin">
<br>
<br>
<label>Port_of_offloading</label>
<select id="o_off">
<option value='0'></option>
 <?php  $getPort = getPort();
			foreach($getPort as $or_value){	?>
            <option value='<?php echo $or_value['pid']; ?>' ><?php echo $or_value['port_name']; ?></option>
           <?php }	?>
</select>
<br>
<br>
<input type="button" id="btn_save" value="save" onClick="saveServiceProviderDetail()" class="submitBtnModal" />
</span>

<input type="radio" id="hide" name="job_type"> 
<label id="id2"><span id="id2">Import</span></label>
<span id="content2">
<label>Delivery_Type</label>
<input type="radio" name="l_o" id="o_dt">Local
<input type="radio" name="l_o" id="o_dt">Outstation
<br>
<br>
<label>Port_of_Loading</label>
<select id="o_pl">
<option value='0'></option>
 <?php  $getPort = getPort();
			foreach($getPort as $or_value){	?>
            <option value='<?php echo $or_value['pid']; ?>' ><?php echo $or_value['port_name']; ?></option>
           <?php }	?>
</select>
<br>
<br>
<label>Dest_Pincode</label>
<input type="text" id="o_dp">
<br>
<br>
<input type="button" id="btn_save" value="save" onClick="saveServiceProviderDetail()" class="submitBtnModal" />
</span>
</span>

