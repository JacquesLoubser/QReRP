<?php
if(isset($_Post["user"]))
{
	//Handle Pass Check
}
else
{
	authUser();
}
function authUser()
{
	if(isset($_SESSION['user']))
	{
		//Approved
	}
	else
	{
	if (isset($_COOKIE["user_id"]))
	{
		renewCookie();
		//Approved
	}
else
{
	printf("<script>location.href='login.php'</script>");
	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';    
    die();    
	//DIE!!!
}
	}
}
function renewCookie()
{
	$expire=time()+60*60*24*30;
setcookie("user_id", $_COOKIE["user_id"], $expire);
}
?>