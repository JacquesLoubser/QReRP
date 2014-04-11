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
        overlay: true,
        shadow: true,
        flat: true,
		sysButtons: false,
        icon: '',
        title: 'Flat window',
        content: '',
        onShow: function(_dialog){
            var content = _dialog.children('.content');
            content.html('Set content from event onShow');
        }
    });
});
</script>
</body>
</html>