<?php
session_start();
?>

<?php include 'db.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name"viewport" content="width-device-width , initial-scale-1.0"/>



<title>Building 48</title>
<link href="quickCheck.css" rel="stylesheet" type="text/css" />
<style> 

</style>


</head>
<?php

//TableTimerStatus
$TableTimerOne = "TableOne";

$checkTableTimerStatusOne = "SELECT
  t.Status,
  t.Hour,
  t.Minutes,
  t.Second
FROM TableTimerStatus t
where t.TableID = '".$TableTimerOne."'
";

if ($checkTimerStatusOne = $mysqli->query($checkTableTimerStatusOne)) {
	
	 if ($checkTimerStatusOne->num_rows > 0) {
    
   // echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $checkTimerStatusOne->fetch_assoc()) {
    	//$TableOneTimerStatus = $row['Status'] ;
    	$TableOneTimerHour = $row['Hour'] ;
    	$TableOneTimerMinutes = $row['Minutes'] ;
    	$TableOneTimerSecond = $row['Second'] ;
    	
	}
}
}

//TableTimerStatus
$TableTimerTwo = "TableTwo";

$checkTableTimerStatusTwo = "SELECT
  t.Status,
  t.Hour,
  t.Minutes,
  t.Second
FROM TableTimerStatus t
where t.TableID = '".$TableTimerTwo."'
";

if ($checkTimerStatusTwo = $mysqli->query($checkTableTimerStatusTwo)) {
	
	 if ($checkTimerStatusTwo->num_rows > 0) {
    
   // echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $checkTimerStatusTwo->fetch_assoc()) {
    	//$TableTwoTimerStatus = $row['Status'] ;
    	$TableTwoTimerHour = $row['Hour'] ;
    	$TableTwoTimerMinutes = $row['Minutes'] ;
    	$TableTwoTimerSecond = $row['Second'] ;
    	
	}
}
}


?>
<body class="body"  >

<div id="Statustable1" style="display: none;"></div>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
function autoRefresh_div()
{
      $("#Statustable1").load("http://securereservess.mybluemix.net/list.php #summarytable1");// a function which will load data from other file after x seconds
}

  setInterval('autoRefresh_div()', 1000); // refresh div after 5 secs
</script>

<script>
  function myFunction() {
    
     var x = document.getElementsByTagName("LI");
   
    if( x[0].innerHTML == "Reserved TB1"){    
    document.getElementById("one").style.background = "#DB4D4D";
   //document.getElementById("one").innerHTML = "Reserved!";
    }else if(x[0].innerHTML == "Vaccant TB1"){
       document.getElementById("one").style.background= "#66E066";
       //document.getElementById("one").innerHTML = "Vaccant!";
    }else{
        document.getElementById("one").style.backgroundColor = "White";
            // document.getElementById("one").innerHTML = "No connection!";
    }
}
setInterval('myFunction()', 1000);

function myFunction1() {
    
     var x = document.getElementsByTagName("LI");
    if( x[1].innerHTML == "Reserved TB2"){
    document.getElementById("two").style.background = "#DB4D4D";
    //document.getElementById("one").innerHTML = "Reserved!";
    }else if(x[1].innerHTML == "Vaccant TB2"){
       document.getElementById("two").style.background= "#66E066";
       //document.getElementById("one").innerHTML = "Vaccant!";
    }else{
        document.getElementById("two").style.backgroundColor = "White";
      // document.getElementById("one").innerHTML = "No connection!";
    }
}
setInterval('myFunction1()', 1000);
</script>

<script> //table 1 Timer script

//var noh;
//var nom;
//var nos;
//function listfunction() {
//if(document.getElementById("Statustable1") != null){
//var y = document.getElementsByTagName("LI");
//noh = parseInt(y[3].innerHTML);
//nom = parseInt(y[4].innerHTML);
//nos = parseInt(y[5].innerHTML);
//}

//}
//setInterval('listfunction()', 1000);

var noh1 = <?php echo $TableOneTimerHour; ?>;
var nom1 = <?php echo $TableOneTimerMinutes; ?>;
var nos1 = <?php echo $TableOneTimerSecond; ?>;

//var status = "on";
var countdownTimer1;
var seconds1 = 0;


var newoldtime1 = noh1 + ':' + nom1 + ':' + nos1 ;

var startTimeSeconds1 = (noh1*60*60)+(nom1*60)+nos1;

var d1 = new Date();
var n1 = d1.toISOString();

var newserdate1 = new Date(n1);
var hou1 = newserdate1.getUTCHours();
var min1 = newserdate1.getUTCMinutes();
var sec1 = newserdate1.getUTCSeconds();
var servertime1 = hou1 + ':' + min1 + ':' + sec1 ;

var currentTimeSeconds1 = (hou1*60*60)+(min1*60)+sec1;




var secondsDifferent1 = currentTimeSeconds1 - startTimeSeconds1; // 8 is no idea timer starting 8 seconds more


var defSeconds1 = 1780;   //1800
var feedSeconds1 = 0;
var timer1 = "off";

//if(secondsDifferent<defSeconds)
//{
	 //Timer start here....
seconds1 = defSeconds1 - secondsDifferent1 ;
function secondPassed1() {
	//if(secondsDifferent<defSeconds)
//{
	
	timer1 = "on";
    var minutes1 = Math.round((seconds1 - 30)/60);
    var remainingSeconds1 = seconds1 % 60;
    if (remainingSeconds1 < 10) {
        remainingSeconds1 = "0" + remainingSeconds1;  
    }
    document.getElementById('countdown').innerHTML = minutes1 + ":" + remainingSeconds1;

    if (seconds1 == 0) {
        clearInterval(countdownTimer1);
        document.getElementById('countdown').innerHTML = "00:00";
    } else {
        seconds1--;
    }
   
   //}
}
//countdownTimer = setInterval('secondPassed()', 1000);
//}
 
	
var myVar1 = setInterval('myTimer1()', 1000);
var vaccant1 = "yes";
var reserve1 = "yes";
function myTimer1() {
	var x1 = document.getElementsByTagName("LI");
    if( x1[2].innerHTML == "vaccant" && vaccant1 == "yes"){
    	vaccant1 = "no";
    	reserve1 = "yes";
    	//timer = "off";
    	seconds1 = 0;
  		//clearInterval(countdownTimer);
       // document.getElementById('countdown').innerHTML = "00:00";
    }
    if( x1[2].innerHTML == "reserved" && reserve1 == "yes"){
if(secondsDifferent1<defSeconds1){
    	vaccant1 = "yes";
    	reserve1 = "no";

//clearInterval(countdownTimer);
//var tcountdownTimer = setInterval('tsecondPassed()', 1000);
seconds1 = defSeconds1 - secondsDifferent1 ;
countdownTimer1 = setInterval('secondPassed1()', 1000);
}
}
}
</script>

<script> //table 2 Timer script

//var noh;
//var nom;
//var nos;
//function listfunction() {
//if(document.getElementById("Statustable1") != null){
//var y = document.getElementsByTagName("LI");
//noh = parseInt(y[3].innerHTML);
//nom = parseInt(y[4].innerHTML);
//nos = parseInt(y[5].innerHTML);
//}

//}
//setInterval('listfunction()', 1000);

var noh = <?php echo $TableTwoTimerHour; ?>;
var nom = <?php echo $TableTwoTimerMinutes; ?>;
var nos = <?php echo $TableTwoTimerSecond; ?>;

//var status = "on";
var countdownTimer;
var seconds = 0;


var newoldtime = noh + ':' + nom + ':' + nos ;

var startTimeSeconds = (noh*60*60)+(nom*60)+nos;

var d = new Date();
var n = d.toISOString();

var newserdate = new Date(n);
var hou = newserdate.getUTCHours();
var min = newserdate.getUTCMinutes();
var sec = newserdate.getUTCSeconds();
var servertime = hou + ':' + min + ':' + sec ;

var currentTimeSeconds = (hou*60*60)+(min*60)+sec;




var secondsDifferent = currentTimeSeconds - startTimeSeconds ;


var defSeconds = 1800;
var feedSeconds = 0;
var timer = "off";

//if(secondsDifferent<defSeconds)
//{
	 //Timer start here....
seconds = defSeconds - secondsDifferent ;
function secondPassed() {
	//if(secondsDifferent<defSeconds)
//{
	
	timer = "on";
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown2').innerHTML = minutes + ":" + remainingSeconds;

    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown2').innerHTML = "00:00";
    } else {
        seconds--;
    }
   
   //}
}
//countdownTimer = setInterval('secondPassed()', 1000);
//}
 
	
var myVar = setInterval('myTimer()', 1000);
var vaccant = "yes";
var reserve = "yes";
function myTimer() {
	var x = document.getElementsByTagName("LI");
    if( x[3].innerHTML == "vaccant" && vaccant == "yes"){
    	vaccant = "no";
    	reserve = "yes";
    	//timer = "off";
    	seconds = 0;
  		//clearInterval(countdownTimer);
       // document.getElementById('countdown').innerHTML = "00:00";
    }
    if( x[3].innerHTML == "reserved" && reserve == "yes"){
if(secondsDifferent<defSeconds){
    	vaccant = "yes";
    	reserve = "no";

//clearInterval(countdownTimer);
//var tcountdownTimer = setInterval('tsecondPassed()', 1000);
seconds = defSeconds - secondsDifferent ;
countdownTimer = setInterval('secondPassed()', 1000);
}
}
}
</script>

<script>
// function to get table1 booked time and display 
  function checkCurTable1Booking() {
  	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	document.getElementById("Table1").innerHTML = xmlhttp.responseText;
            }
        }
	
	var checkTableoneBooking = "checkTable1Booking" ;
	

	xmlhttp.open("GET","getTableOne.php?t1="+checkTableoneBooking,true);
       
        xmlhttp.send();

}

// function to get table1 booked time and display 
function checkCurTable2Booking() {
  	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	document.getElementById("Table2").innerHTML = xmlhttp.responseText;
            }
        }
	
	var checkTableTwoBooking = "checkTable2Booking" ;
	

	xmlhttp.open("GET","getTableTwo.php?t2="+checkTableTwoBooking,true);
       
        xmlhttp.send();

}

// function to get today and current time booking from booking and put in CurrentDay_Booking 
/*
function todayBooking() {
  	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	//document.getElementById("Table2").innerHTML = xmlhttp.responseText;
            }
        }
	
	var checktodayBookingnow = "checktodayBooking" ;
	

	xmlhttp.open("GET","putTodayBooking.php?tb="+checktodayBookingnow,true);
       
        xmlhttp.send();

}
*/
//js for run function in interval

var intervalFunctions = [ checkCurTable1Booking, checkCurTable2Booking];
var intervalIndex = 0;
window.setInterval(function(){
  intervalFunctions[intervalIndex++ % intervalFunctions.length]();
}, 1500);

</script>

<header class="mainheader"> 

  <div id="Banner">
     
<div id="Banner"><div class="img" align="center" ></div></div>
  

<div ><nav>
 <ul>
<li><a href="index.php" >Home</a></li>
<li><a class="active" href="Services.php">Quick Check</a></li>
<li><a href="About_us.php">About us</a></li>
<?php
if (isset($_SESSION['User'])) 
{
  echo "<li><a href='logout.php'>Logout</a></li>";
}
?>

</ul>
</nav></div> 
</header>
<div class="mainContent">
<div class="content">

<article class="topContent" >
<header>
<h2> Building 48</h2>
</header>
<content>
<div align="right">
<br/>

<?php
if (isset($_SESSION['User'])) 
{
  echo "<button a onclick='' type='submit' class='btn'  value='Submit'>  <a href='#'>Booking</a></button>";
}
else
{
  echo "<button a onclick='' type='submit' class='btn'  value='Submit'>  <a href='login.php'>Login</a></button>";
}
?>

 
  </div> 
  <p align="center"><img src="images/floor plan.jpg" width="90%" border="0" /></p><br />
  
  
  <table width="100%" height="200px" style="border-style:ridge" border="0" cellpadding="0">
    <tr height="20%">
     <td id="one"><b>Table 1<b><div id="Table1"></div><img src="images/tableType/table1-3.png" width="100%" alt="table 1" /><div id="countdown">00:00</div></td>
     <td id="two"><b>Table 2<b><div id="Table2"></div><img src="images/tableType/table2-4.png" width="100%"alt="table 2" /><div id="countdown2">00:00</div></td>
     <td id="five"><b>Table 5<b><div id="Table5"></div><img src="images/tableType/table5-9.png" width="100%"  alt="table 5" /><div id="countdown5">00:00</div></td>
     <td id="six"><b>Table 6<b><div id="Table6"></div><img src="images/tableType/table6-15.png" width="100%" alt="table 6" /><div id="countdown6">00:00</div></td>
     <td id="seven"><b>Table 7<b><div id="Table7"></div><img src="images/tableType/table6-7-10-15-11.png" width="100%"  alt="table 7" /><div id="countdown7">00:00</div></td>
     <td id="nine"><b>Table 9<b><div id="Table9"></div><img src="images/tableType/table5-9.png" width="100%"  alt="table 9" /><div id="countdown9">00:00</div></td>
     <td id="ten"><b>Table 10<b><div id="Table10"></div><img src="images/tableType/table6-7-10-15-11.png" width="100%"  alt="table 10" /><div id="countdown10">00:00</div></td>
     <td id="eleven"><b>Table 11<b><div id="Table11"></div><img src="images/tableType/table6-7-10-15-11.png" width="100%"  alt="table 11" /><div id="countdown11">00:00</div></td>
         </tr>
   <!-- <tr valign="middle" align="center" height="30%">
      <td></td>
      <td></td>
      <td>Table 5<br/>Timer</td>
      <td>Desk 6<br/>Timer</td>
      <td>Desk 7<br/>Timer</td>
      <td>Table 9<br/>Timer</td>
      <td>Desk 10<br/>Timer</td>
      <td>Desk 11<br/>Timer</td>
    </tr>-->
  <!--  <tr valign="middle" align="center" height="30%">
      <td id="Table1">Table 1<br/></td>
      <td id="Table2">Table 2<br/></td>
      <td>Table 5<br/>Timer</td>
      <td>Desk 6<br/>Timer</td>
      <td>Desk 7<br/>Timer</td>
      <td>Table 9<br/>Timer</td>
      <td>Desk 10<br/>Timer</td>
      <td>Desk 11<br/>Timer</td>
    </tr>-->
<tr height="20%">
    <td id="three"><b>Table 3<b><div id="Table3"></div><img src="images/tableType/table1-3.png" width="100%" alt="table 3" /><div id="countdown3">00:00</div></td>
     <td id="four"><b>Table 4<b><div id="Table4"></div><img src="images/tableType/table2-4.png" width="100%"alt="table 4" /><div id="countdown4">00:00</div></td>
     <td id="eight"><b>Table 8<b><div id="Table8"></div><img src="images/tableType/table8-13.png" width="100%"  alt="table 8" /><div id="countdown8">00:00</div></td>
     <td id="thirteen"><b>Table 13<b><div id="Table13"></div><img src="images/tableType/table8-13.png" width="100%" alt="table 13" /><div id="countdown13">00:00</div></td>
     <td id="fifteen"><b>Table 15<b><div id="Table15"></div><img src="images/tableType/table6-15.png" width="100%"  alt="table 15" /><div id="countdown15">00:00</div></td>
     <td id="sixteen"><b>Table 16<b><div id="Table16"></div><img src="images/tableType/table8-13.png" width="100%"  alt="table 16" /><div id="countdown16">00:00</div></td>
     <td id="twelve"><b>Table 12<b><div id="Table12"></div><img src="images/tableType/table12.png" width="100%"  alt="table 12" /><div id="countdown12">00:00</div></td>
     <td id="fourteen"><b>Table 14<b><div id="Table14"></div><img src="images/tableType/table14.png" width="100%"  alt="table 14" /><div id="countdown14">00:00</div></td>
<!--   
</tr>
    <tr valign="middle" align="center" height="30%">
    <td>Table 3<br/>Timer</td>
      <td>Table 4<br/>Timer</td>
      <td>Table 8<br/>Timer</td>
      <td>Table 13<br/>Timer</td>
      <td>Desk 15<br/>Timer</td>
      <td>Table 16<br/>Timer</td>
      <td>Table 12<br/>Timer</td>
      <td>Table 14<br/>Timer</td>

    </tr>-->
  </table>
  

   </content> 
   



<footer>
<p class="main-info">
Avialablity of desk in Building 48 Unitec Institue of Technology</p>
</footer>


</article>






</div>
</div>

 




<footer  class="mainFooter">
<p>All Copyrights &copy;  reserved web developer Likhit Khanna and Riyas Wahid </p>
</footer>

</body>
</html>
