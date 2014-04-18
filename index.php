<html !Doctype>
<head>
<title>QReRP</title>
<link href="css/metro-bootstrap.min.css" rel="stylesheet">
<link href="css/metro-bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/iconFont.min.css" rel="stylesheet">
<link href="css/mycss.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.widget.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/metro.min.js"></script>
<script src="js/my.js"></script>

</head>
<body class="metro" onLoad="resizePlaceholder()" onResize="resizePlaceholder()" >
<div class="container">
<div class="placeholder">
<div id="float-container" class="container bar-float" display="inline">
<h1>
<a  href="javascript:void(0)" onClick="back()">
<i class="icon-arrow-left-3 fg-darker smaller">
</i>
</a>
<span id="titleLarge">Welcome</span><small class="on-right"><span id="titleSmall">[login name]</span>
</small>
</h1>
<hr style="height:3px">
</div>

</div>
<div id="space"></div>
<?php
if(isset($_GET['pageID']))
{
	echo('<script>changeContent($_GET["pageID"]);</script>');
}
?>
<div id="content">

<a href="javascript:void(0);" onClick="changeContent(1);">
<div class="tile bg-cobalt" >
    <div class="tile-content icon">
        <i class="icon-user-2"></i>
    </div>
    <div class="tile-status">
        <span class="name">Clients</span>
    </div>
</div>
</a>
<a href="Jobs/index.html">
<div class="tile bg-lightGreen" >
    <div class="tile-content icon">
        <i class="icon-tools"></i>
    </div>
    <div class="tile-status">
        <span class="name">Jobs</span>
    </div>
</div>
</a>
<a href="#">
<div class="tile bg-violet" >
    <div class="tile-content icon">
        <i class="icon-mail"></i>
    </div>
    <div class="tile-status">
        <span class="name">Email</span>
    </div>
</div>
</a>
<a href="#">
<div class="tile bg-emerald" >
    <div class="tile-content icon">
        <i class="icon-coins"></i>
    </div>
    <div class="tile-status">
        <span class="name">Finance</span>
    </div>
</div>
</a>
<a href="#">
<div class="tile bg-orange" >
    <div class="tile-content icon">
        <i class="icon-history"></i>
    </div>
    <div class="tile-status">
        <span class="name">History</span>
    </div>
</div>
</a>
<a href="#">
<div class="tile bg-crimson" >
    <div class="tile-content icon">
        <i class="icon-basket"></i>
    </div>
    <div class="tile-status">
        <span class="name">Stock</span>
    </div>
</div>
</a>
</div>
</div>
</body>
</html>