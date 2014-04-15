<?php
require("auth.php");
$auth = authUser(false);
if($auth==true)
{
	echo('<script>location.href="index.php"</script>');
	echo ('<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">');    
    die();
}
?>
<!Doctype HTML>
<head>
<title>Login to QReRP</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/metro-bootstrap.min.css" rel="stylesheet">
<link href="css/metro-bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/iconFont.min.css" rel="stylesheet">
<link href="css/mycss.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.widget.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/metro.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
		overlayClickClose: false,
        shadow: true,
        flat: true,
		sysButtons: false,
        icon: '',
        title: 'QReRP Login',
        content: '',
        onShow: function(_dialog){
            var content = _dialog.children('.content');
content.html('<label for="Username">Username</label> <div align="center" class="input-control text size3"> <input id="Username" type="text" value="" placeholder="Type Username" /> <button class="btn-clear"></button> </div> <label for="pass">Password</label> <div class="input-control password size3"> <input id="pass" type="password" value="" placeholder="Type Password" /> <button class="btn-reveal"></button> </div> <div class="input-control checkbox"> <label> <input id="persis" type="checkbox" /> <span class="check"></span>Keep Me Logged in</label> </div><div id="error"></div><div> <button id="login" class="large primary">Login</button> <button class="large info">Cancel</button> </div>');
        }

    });
    $("#login").on("click",function () {
        if ($("#Username").val().toString() != "" && $("#pass").val().toString() != "") {
            $.post("auth.php", {
                   user: $("#Username").val(),
                   password: $("#pass").val(),
                   persistent: $("#persis").val()
                },
                function (data, status) {
                    
					if(data=="false")
					{
						$("#error").html(' <div class="alert alert-danger"><strong>Error!</strong> Please check your username and password.</div>');
						$.Dialog.autoResize();
					}
                });
		}
		else
		{
		$("#error").html('<div class="alert alert-warning"><strong>Error!</strong> Please check all the fields are filled in.</div>');
						$.Dialog.autoResize();	
		}
    });
});
</script>

</body>
</html>