<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name"viewport" content="width-device-width , initial-scale-1.0"/>


<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<title>Services</title>
<link href="mainCss.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('.handle').click(function(){
	
	$("nav ul").toggleClass('showing');
	
	});
	});
  </script>


</head>

<body class="body"  >
<header class="mainheader"> 
<div id="Banner"><div class="img" align="center" ></div></div>
  

<div >
<nav>
 <ul>
<li><a href="index.php" >Home</a></li>
<li><a class="active" href="Services.php">Quick Check</a></li>
<li><a href="About_us.php">About us</a></li>
<?php if(!isset($_SESSION['User'])) {?><li><a href="login.php">Login</a></li><?php } else { ?><li><a href="logout.php">Logout</a></li><?php } ?>
</ul>
<div class="handle"><span><img id="menuLogo" src="images/logo-png.png"/>SSRS Menu<img id="expanderImg" src="images/mobile-menu.png"/></span></div>
</nav>
</div> 

</header>
<div class="mainContent">
<div class="content">

<article class="topContent" >
<header>
<h2> Features and services </h2>
</header>
<content>
<p>When an employee enters an open workspace area, the initial tasks of the day starts with looking for desk. SSRS provides automated solution for the problem. Usually upto 25% of booked resources are never uitlised. This can incure high marginal increase in operational cost. Therefore, the Secure Desk Reservation System offers the following features and services so managing office resouscres can never be an issue:
</p>
<ul>
<li>Easy-to-use interface</li>
<li>Allows access to the workspace layout</li>
<li>Secure Reservation of desks</li>
<li>High-quality hardware support for checking desk availability</li>
<li>aqurate occupancy results</li>
</ul>
</content>
<footer>
<p class="main-info">
Features and services of Secure Desk Reservation System </p>
</footer>

<content></content> 
</article>


<article class="middleContent" >
<header>
<h2>Quick Check</h2>
</header>

<footer>
<h3><a href="Building48.php" id="C1">Building 48</a>
</h3>
</footer>
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
<p> All Copyrights &copy;  reserved web developer Likhit Khanna and Riyas Wahid </p>
</footer>

</body>
</html>
