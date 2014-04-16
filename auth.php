<?php
if (isset($_POST["user"]) && isset($_POST["password"]))
{
	$con = mysqli_connect('localhost', 'root', '', 'coolfusion');
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con, "coolfusion");
	$sql = "SELECT * FROM Users WHERE Name = '" . $_POST["user"] . "' And Password = '" . $_POST["password"] . "'";
	$result = mysqli_query($con, $sql);
	$num_rows = $result->num_rows;
	if ($num_rows > 0)
	{
		
		$count = 0;
		while ($row = mysqli_fetch_array($result))
		{
			
			if ($count == 0)
			{
				$count = 1;
				if (isset($_POST["persistent"]))
				{
					if ($_POST["persistent"] == true)
					{
						renewCookie($row['ID']);
					}
				}

				session_start();
				$_SESSION['user_id'] = $row['ID'];
				echo ("true");

				// True

			}
		}
	}
	else
	{
		echo ("false");

		// False

	}
}

function authUser($redirect,$pageID)
{
	if (isset($_COOKIE["user_id"]))
	{
		renewCookie();
		
		checkPage($pageID);
	}
	else
	{
		if (isset($_SESSION['user']))
		{
			
			checkPage($pageID);
		}
		else
		{
			if ($redirect == true)
			{
				printf("<script>location.href='login.php?pageID=\""+$pageID+"\"'</script>");
				echo('<META HTTP-EQUIV="Refresh" Content="0; URL=login.php?pageID="'+$pageID+'"">');
				

				die();

			}
			return false;
			
		}
	}
}


function renewCookie()
{
	$expire=time()+60*60*24*30;
setcookie("user_id", $_COOKIE["user_id"], $expire);
}
function checkPage($pageID)
{
	if($pageID!=0)
	{
		
	}
}
?>