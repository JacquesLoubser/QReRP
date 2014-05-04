<html !Doctype>
<head>
<title>QReRP</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/metro-bootstrap.min.css" rel="stylesheet">
<link href="css/metro-bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/iconFont.min.css" rel="stylesheet">
<link href="css/mycss.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.widget.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/metro.min.js"></script>
<script src="js/my.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

</head>
<body class="metro" onLoad="resizePlaceholder(); changeContent(0);" onResize="resizePlaceholder()" >
<div class="container">
<div class="placeholder">
<div id="float-container" class="container bar-float" display="inline">
<h1>
<a  href="javascript:void(0)" onClick="historyBack()">
<i id="backArrow" class="icon-arrow-left-3 fg-darker smaller" style="visibility:hidden">
</i>
</a>
<span id="titleLarge"></span><small class="on-right"><span id="titleSmall"></span>
</small>
<div class="align-right">

</div>
</h1>
<nav class="navigation-bar light">
    <nav class="navigation-bar-content">
        <a href="http://jacquesloubser.github.io/QReRP"><item class="element">QReRP</item></a>
        <item class="element-divider"></item>
       <a href="javascript:void(0);" onClick="changeContent(0);"> <item class="element"><span class="icon-home"></span>Home</item></a>
       <a href="javascript:void(0);" onClick="changeContent(0);"> <item class="element"><span class=
       "icon-comments-2"></span>
       Messages  <span class="boot-badge">42</span></item></a>
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

</div>
</div>
</body>
</html>