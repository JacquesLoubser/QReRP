<?php
function connect()
	{
		$con = mysqli_connect('localhost', 'root', '', 'coolfusion');
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error($con));
	}
	mysqli_select_db($con, "coolfusion");
	return($con);
	}
	function query($con,$sql)
	{
		$result = mysqli_query($con, $sql);
		return($result);
	}
	?>