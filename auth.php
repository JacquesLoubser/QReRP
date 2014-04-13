<?php
echo($_Post["user"]);
if(isset($_Post["user"])&&isset($_Post["password"]))
{
	$con = mysqli_connect('localhost','root','','coolfusion');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"coolfusion");
$sql="SELECT * FROM Users WHERE Name = '".$_Post["user"]."' And Password = '".$_Post["password"]."'";
$result = mysqli_query($con,$sql);
if(mysql_num_rows($result)< 1)
{
	$row = mysqli_fetch_array($result[0]);
	if(isset($_Post["persistent"]))
	{	
	if($_Post["persistent"]==true)
	{
		renewCookie($row['ID']);
	}
	}
	session_start();
	 $_SESSION['user_id'] = $row['ID'];
	 return true;
echo("true");	
//True
}
else{
	return false;
echo("false");

//False
}
}
else
{
echo("Probs");	
}

function authUser($redirect)
{
	if (isset($_COOKIE["user_id"]))
	{
		renewCookie();
		return true;
	}
	
	else
	{
		if(isset($_SESSION['user']))
	{
		return true;
	}
	
else
{
	if($redirect=true)
	{
	printf("<script>location.href='login.php'</script>");
	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';    
    die();    
	//DIE!!!
	}
	die();
}
	}
}
function renewCookie()
{
	$expire=time()+60*60*24*30;
setcookie("user_id", $_COOKIE["user_id"], $expire);
}
//function renewCookie($user_id)
//{
//	$expire=time()+60*60*24*30;
//setcookie("user_id", $user_id, $expire);
//}
//?>