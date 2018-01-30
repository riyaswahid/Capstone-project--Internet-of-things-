<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="mainCss.css" rel="stylesheet" type="text/css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name"viewport" content="width-device-width , initial-scale-1.0"/>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

<title>Home</title>
<link href="Slideshow.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/cycle2.js"></script>
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
<li><a class="active" href="index.php" >Home</a></li>
<li><a href="Services.php">Quick Check</a></li>
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
<div style="width:90%" align="center" >
<div align="center" id="container">
    <div  align="justify" id="slideshow" class="cycle-slideshow"
       data-cycle-fx = "fade"
       data-cycle-speed = "600"
       data-cycle-timeout = "3000"
       data-cycle-pager = "#pager"
       data-cycle-pager-template ="<a herf='#'><img src='{{src}}' height=80% width=20%/>"
       data-cycle-next = "#next"
       data-cycle-prev = "#prev"
       data-cycle-manual-fx = "scrollHorz"
       data-cycle-manual-speed = "400"
       data-cycle-pager-fx = "fade">
        <img src="img/desk 4.jpg" alt="image of building48">
        <img src="img/desk 1.jpg"  alt="image of building48">
        <img src="img/desk 2.jpg"  alt="image of building48">
        <img src="img/desk 3.jpg" alt="image of building48"> 
        
   </div>
    <div id="pager">   

    </div>
    <img id="prev" src="img/prev1.svg"/>
    <img id="next" src="img/next1.svg"/>
</div> 
 </div>  
<br />
<header>
<h2>Easy solutions for workplace</h2>
</header>
<br />
<content>
<p  >
SSRS is the one of the most enhanced tool to optimize workplace utility and providing solution for scheduling desk.
</p>
<br />
<p>
Create a more flexible and collaborative work environment while reducing your real estate costs. Our software is easy to use and can seamlessly integrate with our desk screens and web application. It can be easily installed with no impact on existing IT structure, it can provide accurate real-time information on your workspace 24/7.
</p>
<br />
<p>The system allows the user to remotely check the available workspace in different buildings of Unitec </p>
<br />
</content>

<footer>
<p class="main-info">
 Secure Desk Reservation System by Likhit Khanna and Riyas Wahid
</p>
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
<p> All Copyrights &copy;  reserved web developer Likhit Khanna and Riyas Wahid  </p>
</footer>

</body>
</html>
