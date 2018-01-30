<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="mainCss.css" rel="stylesheet" type="text/css" />
<head>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name"viewport" content="width-device-width , initial-scale-1.0"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('.handle').click(function(){
	
	$("nav ul").toggleClass('showing');
	
	});
	});
  </script>


<title>About us</title>



</head>

<body class="body">
<header class="mainheader"> 
 <div id="Banner"><div class="img" align="center" ></div></div>
  
<div ><nav>
 <ul>
<li><a href="index.php" >Home</a></li>
<li><a  href="Services.php">Quick Check</a></li>
<li><a class="active" href="About_us.php">About us</a></li>
<?php if(!isset($_SESSION['User'])) {?><li><a href="login.php">Login</a></li><?php } else { ?><li><a href="logout.php">Logout</a></li><?php } ?>
</ul>

<div class="handle"><span><img id="menuLogo" src="images/logo-png.png"/>SSRS Menu<img id="expanderImg" src="images/mobile-menu.png"/></span></div>
</nav></div> 
</header>
<div class="mainContent">
<div class="content">

<article class="topContent" >
<h2> About us </h2>
<p class="main-info">
Profile of Developers
</p>
<content>
</content> 
</article>






</div>
</div>

<aside class="top-sidebar">
<article>
<h2>Quick link</h2>
<ul>
<li><a href="Building48.php">Building 48</a></li>
<li><a href="http://studyroombookings.unitec.ac.nz/day.php">Library Room</a></li>
<li><a href="https://moodle.unitec.ac.nz/">Moodle</a></li>
</ul>
</article>
</aside>




<footer  class="mainFooter">
<p> All Copyrights&copy;  reserved web developer Likhit khanna </p>
</footer>

</body>
</html>
