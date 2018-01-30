<?php include 'db.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--<meta http-equiv="refresh" content="2">-->

<!--
<script>

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
//setInterval('checkCurTable1Booking()', 1000);

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
//setInterval('checkCurTable2Booking()', 1000);

var intervalFunctions = [ checkCurTable1Booking, checkCurTable2Booking];
var intervalIndex = 0;
window.setInterval(function(){
  intervalFunctions[intervalIndex++ % intervalFunctions.length]();
}, 1000);

</script>
-->
<body>


<div id="Table1" >
<b>Booking info Table1</b>

</div>
<div id="Table2" >
<b>Booking info Table2</b>

</div>

</body>
</html>