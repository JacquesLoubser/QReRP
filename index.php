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
<div class="align-right">

</div>
</h1>
<nav class="navigation-bar light">
    <nav class="navigation-bar-content">
        <a href="http://jacquesloubser.github.io/QReRP"><item class="element">QReRP</item></a>
        <item class="element-divider"></item>
       <a href="javascript:void(0);" onClick="changeContent(0);"> <item class="element"><span class="icon-home"></span>Home</item></a>
        <div class="element place-right">
            <a class="dropdown-toggle" href="#">
                <span class="icon-cog"></span>
            </a>
            <ul class="dropdown-menu place-right" data-role="dropdown">
                <li><a href="#">Content</a></li>
            </ul>
        </div>
        <span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>
        <span class="element-divider place-right"></span>
        <button class="element image-button image-left place-right">
            [user login]
            <img src="images/qr.jpg"/>
        </button>
    </nav>
</nav>
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
<a href="javascript:void(0);" onClick="changeContent(2);">
<div class="tile bg-lightGreen" >
    <div class="tile-content icon">
        <i class="icon-tools"></i>
    </div>
    <div class="tile-status">
        <span class="name">Jobs</span>
    </div>
</div>
</a>
<a href="javascript:void(0);" onClick="changeContent(3);">
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