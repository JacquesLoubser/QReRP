<?php
function connect()
	{
    $con = mysqli_connect('localhost', 'root', '', 'qrerp');
	if (!$con)
	{
		die("false");
	}
	mysqli_select_db($con, "qrerp");
	return($con);
	}
	function query($con,$sql)
	{
		$result = mysqli_query($con, $sql);
		return($result);
	}
	?>