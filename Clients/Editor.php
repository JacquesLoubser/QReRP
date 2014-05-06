<?php

if (isset($_POST["clientID"]))
{
	if($_POST["clientID"]=="0")
	{
		echo('
<form>
<div display="inline"> <label for="title">Name  </label><div id="title" class="input-control select size2">
    <select>
    <option selected disabled>Title</option>
        <option>Mrs</option>
        <option>Mr</option>
        <option>Miss</option>
        <option>Ms</option>
    </select>
    </div>
    <div class="input-control text size3">
    <input type="text" value="" placeholder="First"/>
    <button class="btn-clear"></button>
</div>
<div class="input-control text size4">
    <input type="text" value="" placeholder="Last"/>
    <button class="btn-clear"></button>
</div>
</div>
<label for="dob">Date of Birth</label><div id="dob" class="input-control text size3">
    <input type="text">
    <button class="btn-date"></button>
</div>
<script>
    $("#dob").datepicker();
</script>
<label for="post">Postal Address</label><div id="post" class="input-control textarea">
    <textarea></textarea>
    </div>
    <label for="street">Street Address</label><div id="street" class="input-control textarea">
    <textarea></textarea>
</div>
<h3><u>Contact Details</u></h3>

<label for="telno">Telephone Number</label><div id="telno" class="input-control text size3">
    <input type="text" value=""/>
    <button class="btn-clear"></button>
</div>
<label for="mobno">Celphone Number</label><div id="mobno" class="input-control text size3">
    <input type="text" value=""/>
    <button class="btn-clear"></button>
</div>
<label for="altno">Alternative Number </label><div id="altno" class="input-control text size3">
    <input type="text" value=""/>
    <button class="btn-clear"></button>
</div>
<label for="email">Email Address</label><div id="email" class="input-control text size4">
    <input type="email" value="" placeholder="someone@somthing.com"/>
    <button class="btn-clear"></button>
</div>
    </form>');

}
else
{
	require("../sql_query.php");
$con = connect();
	
$sql = "SELECT * FROM clients WHERE clients.ID=".$_POST["clientID"];
$result = query($con,$sql);
while($row = mysqli_fetch_array($result)) {
	$phpdate = strtotime( $row['DOB'] );
$mysqldate = date( 'Y-m-d', $phpdate );
echo('
<form>
<div display="inline"> <label for="title">Name  </label><div id="title" class="input-control select size2">
    <select>
    <option selected disabled>Title</option>
        <option>Mrs</option>
        <option>Mr</option>
        <option>Miss</option>
        <option>Ms</option>
    </select>
    </div>
    <div class="input-control text size3">
    <input type="text" value="'.$row['FirstName'].'" placeholder="First"/>
    <button class="btn-clear"></button>
</div>
<div class="input-control text size4">
    <input type="text" value="'.$row['LastName'].'" placeholder="Last"/>
    <button class="btn-clear"></button>
</div>
</div>
<label for="dob">Date of Birth</label><div id="dob" class="input-control text size3">
    <input type="text">
    <button class="btn-date"></button>
</div>
<label for="post">Postal Address</label><div id="post" class="input-control textarea">
    <textarea>'.$row['postal'].'</textarea>
    </div>
    <label for="street">Street Address</label><div id="street" class="input-control textarea">
    <textarea>'.$row['street'].'</textarea>
</div>
<h3><u>Contact Details</u></h3>

<label for="telno">Telephone Number</label><div id="telno" class="input-control text size3">
    <input type="text" value="'.$row['Telephone'].'"/>
    <button class="btn-clear"></button>
</div>
<label for="mobno">Cellphone Number</label><div id="mobno" class="input-control text size3">
    <input type="text" value="'.$row['Mobile'].'"/>
    <button class="btn-clear"></button>
</div>
<label for="altno">Alternative Number </label><div id="altno" class="input-control text size3">
    <input type="text" value="'.$row['AltNo'].'"/>
    <button class="btn-clear"></button>
</div>
<label for="email">Email Address</label><div id="email" class="input-control text size4">
    <input type="email" value="'.$row['Email'].'" placeholder="someone@somthing.com"/>
    <button class="btn-clear"></button>
</div>
    </form>
	<script>
	 $("#dob").datepicker({
        date: "'.$mysqldate.'",
    position:"bottom",
    effect:"slide"
    });
	</script>');
}
}
}
?>