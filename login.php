
<?php
session_start();
if(isset($_SESSION['User']))
{
	header('Location: Booking48.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name"viewport" content="width-device-width , initial-scale-1.0"/>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

<title>Login</title>
<link href="mainCss.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
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



<div ><nav>
 <ul>
<li><a href="index.php" >Home</a></li>
<li><a class="active" href="Services.php">Quick Check</a></li>
<li><a href="About_us.php">About us</a></li>
<li><a href="login.php">Login</a></li>
</ul>
<div class="handle"><span><img id="menuLogo" src="images/logo-png.png"/>SSRS Menu<img id="expanderImg" src="images/mobile-menu.png"/></span></div>

</nav></div> 
</header>
<div class="mainContent">
  <div class="content">
    
  <article class="topContent" >
<header>
<h2> Login </h2>
</header>

    <div class="login">

   <form method="post" action="loginc.php">
      
  <p>User Name<br/>
  <input type="text" name="login" id="Username" value="" placeholder="Username "></p>
      
  <p>Password<br/>
  <input type="password" name="password" id="password" value="" placeholder="Password"></p>

     

 <p><input type='submit' name="submitlogin" class="btn" value='Submit'/></p>
  </form>
    </div>
    <?php
if(isset($_SESSION['wrlogin']))
{
	?>
 <div class="alert alert-danger fade in">
    
    <strong>Sorry!</strong> Wrong Login. Please Try Again!.
  </div>

<?php
}
?>

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
