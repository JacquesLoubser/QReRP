<?php
$a=true;
if($a=false)
{
require("auth.php");
$auth = authUser(false);
if($auth=true)
{
	printf("<script>location.href='login.php'</script>");
	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';    
    die();
}
}
?>
<!Doctype HTML>
<head>
<title>Login to QReRP</title>
<link href="min/metro-bootstrap.min.css" rel="stylesheet">
<link href="min/metro-bootstrap-responsive.min.css" rel="stylesheet">
<link href="min/iconFont.min.css" rel="stylesheet">
<script src="min/jquery.min.js"></script>
<script src="min/jquery.ui.widget.min.js"></script>
<script src="min/jquery.mousewheel.js"></script>
<script src="min/metro.min.js"></script>
<script src="js/metro-dialog.js"></script>

</head>
<body id="bod">
<script type="text/javascript">
$(document).ready(function(){
    $.Dialog({
		maxWidth: 260,
		maxHeight: 500,
		padding: 20,
        overlay: true,
        shadow: true,
        flat: true,
		sysButtons: false,
        icon: '',
        title: 'QReRP Login',
        content: '',
        onShow: function(_dialog){
            var content = _dialog.children('.content');
content.html('<label for="Username">Username</label><div align="center" class="input-control text size3"><input id="Username" type="text" value="" placeholder="Type Username"/><button class="btn-clear"></button></div><label for="pass">Password</label> <div  class="input-control password size3"><input id="pass" type="password" value="" placeholder="Type Password"/><button class="btn-reveal"></button></div><div class="input-control checkbox"> <label><input type="checkbox" /><span class="check"></span>Keep Me Logged in </label></div><div><button class="large primary">Login</button><button class="large info">Cancel</button></div>');
        }
    });
});
</script>
</body>
</html>