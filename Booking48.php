<?php include 'db.php';?>

<?php
session_start();
if(!isset($_SESSION['User']))
{
	header("Location: Login.php");
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//insert username and password into MESSAGE_TABLE
   // $cleaned_message = preg_replace('/[^a-zA-Z0-9.\s]/', '', $_POST["message"]); //remove invalid chars from input.
   // $strsq0 = "INSERT INTO MESSAGES_TABLE ( MESSAGE) VALUES ('" . $cleaned_message . "');"; //query to insert new message
   
   $tableNo = $_POST["table"];
   $bookingDate = $_POST["Bookingdates"];
    
  $checkStartTime = "SELECT
  t.starttime,
  t.endtime
	FROM times t
  JOIN scheduled_availability s ON                                                                           
     t.starttime = s.starttime
    AND t.endtime = s.endtime
	and s.TableID = '" . $tableNo . "'	
  LEFT JOIN booking b ON
    b.TableID = s.TableID 
    AND t.starttime <= b.endtime
    AND t.endtime >= b.starttime
    and b.bookingdate='" . $bookingDate . "'
WHERE b.TableID IS NULL 
";

$checkEndTime = "SELECT
  t.starttime,
  t.endtime
FROM times t
  JOIN scheduled_availability s ON                                                                           
     t.starttime = s.starttime
    AND t.endtime = s.endtime
	and s.TableID = '" . $tableNo . "'
  LEFT JOIN booking b ON
    b.TableID = s.TableID 
    AND t.starttime <= b.endtime
    AND t.endtime >= b.starttime
    and b.bookingdate='" . $bookingDate . "'
WHERE b.TableID IS NULL 
";
     if ($checkResult = $mysqli->query($checkStartTime)) {
       // echo "checkAvailable success!";
    } else {
       // echo "Cannot insert into the data table; check whether the table is created, or the database is active. "  . mysqli_error();
    }
    
    if ($checkResultendtime = $mysqli->query($checkEndTime)) {
      //  echo "checkAvailable success!";
    } else {
      //  echo "Cannot insert into the data table; check whether the table is created, or the database is active. "  . mysqli_error();
    }
    
/* if (empty($_POST["StartTime"])) {
     $nameErr = "Start Time is required";
   }
 if (empty($_POST["EndTime"])) {
     $nameErr = "End Time is required";
   }
   $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
     
     function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}*/
}
?>

<!--<?php
  function runMyFunction() {
   // echo 'I just ran a php function';
      $strsql5 = "SELECT
  t.starttime,
  t.endtime
FROM times t
  JOIN scheduled_availability s ON                                                                           
     t.starttime = s.starttime
    AND t.endtime = s.endtime
	and s.TableID = 1
  LEFT JOIN booking b ON
    b.TableID = s.TableID 
    AND t.starttime <= b.endtime
    AND t.endtime >= b.starttime
    and b.bookingdate='2015-10-31'
WHERE b.TableID IS NULL 
";

if ($result5 = $mysqli->query($strsql5)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
    echo "record found2!";
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name"viewport" content="width-device-width , initial-scale-1.0"/>



<title>Booking 48</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<link href="mainCss.css" rel="stylesheet" type="text/css" />
<link href="quickCheck.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('.handle').click(function(){
	
	$("nav ul").toggleClass('showing');
	
	});
	});
  </script>
<style style="text/css">
  	#avialTime{
  		
  		
  		color:black;
  	
    }
</style>
<script>
function myFunction() {
    document.getElementById("myLocalDate").defaultValue = "2015-01-02T11:42:13.510";
}
</script>

<script>

//var selected_option_text = oForm.elements["country"].options[selected_index].text;
select.onchange = function () { 
    currentStartDate = select.value;
    alert("value: " + currentStartDate); 
}

// for start time and end time
function update(str) {
    if (str == "") {
        document.getElementById("avialEndTime").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("avialEndTime").innerHTML = xmlhttp.responseText;
            }
        }

	
	
	var dateValue = document.getElementById("bDates").value;
	var tableValue = document.getElementById("bTable").value;
	//var dlistStartTime = $('[id*=avialTime]').val(); 
	var dlistStartTime = document.getElementById("avialTime").value;
	
	
	
        xmlhttp.open("GET","getEndTime.php?q="+dlistStartTime+ "&r=" +dateValue+ "&t=" +tableValue,true);
       // xmlhttp.open("GET","getEndTime.php?q="+str,true);
        xmlhttp.send();
    }
}


// for table and start time
function updateStartTime(tableNo) {
    if (tableNo == "") {
        document.getElementById("avialTime").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("avialTime").innerHTML = xmlhttp.responseText;
            }
        }
	var dateValue = document.getElementById("bDates").value;
	var tableValue = document.getElementById("bTable").value;
 
        xmlhttp.open("GET","getStartTime.php?q="+dateValue+  "&t=" +tableValue,true);
      
        xmlhttp.send();
    }
}

// for table and start time
function updateTable(date) {
    if (date == "") {
        document.getElementById("bTable").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("bTable").innerHTML = xmlhttp.responseText;
            }
        }
	
        xmlhttp.open("GET","getTables.php?q="+date,true);
       // xmlhttp.open("GET","getTables.php?q="+str,true);
        xmlhttp.send();
    }
}

// for button book table
function bookTable() {
   // if (date == "") {
   //     document.getElementById("messagebook").innerHTML = "";
   //     return;
   // } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("messagebook").innerHTML = xmlhttp.responseText;
            }
        }
	
	var dateValue1 = document.getElementById("bDates").value;
	var tableValue1 = document.getElementById("bTable").value;
	var avialTime1 = document.getElementById("avialTime").value;
	var avialEndTime1 = document.getElementById("avialEndTime").value;
	var nPeople1 = document.getElementById("nPeople").value;	
	var inPhone1 = document.getElementById("inPhone").value;
	var inEmail1 = document.getElementById("inEmail").value;
	

	xmlhttp.open("GET","bookTable.php?dv="+dateValue1+  "&tv=" +tableValue1+  "&at=" +avialTime1+  "&aet=" +avialEndTime1+  "&np=" +nPeople1+  "&p=" +inPhone1+  "&e=" +inEmail1,true);
       
        xmlhttp.send();

}
</script>


<script>
$(function () {
    var sel_imie = $('select[name="table"]')
    sel_imie.prop('disabled', true);
    $('select[name ="Bookingdates"]').change(function () {
        sel_imie.prop('disabled', false);
    });
});

$(function () {
    var sel_imie = $('select[name="StartTime"]')
    sel_imie.prop('disabled', true);
    $('select[name ="table"]').change(function () {
        sel_imie.prop('disabled', false);
         
    });
});

$(function () {
    var sel_imie = $('select[name="EndTime"]')
    sel_imie.prop('disabled', true);
    $('select[name ="StartTime"]').change(function () {
        sel_imie.prop('disabled', false);
    });
});

$(function () {
    var sel_imie = $('select[name="People"]')
    sel_imie.prop('disabled', true);
    $('select[name ="EndTime"]').change(function () {
        sel_imie.prop('disabled', false);
    });
});

$(function () {
	 $('select[name ="People"]').change(function () {
	 	document.getElementById("inPhone").disabled = false;
    });
});


$(function () {
	 $('select[name ="phoneNo"]').change(function () {
	 	document.getElementById("inEmail").disabled = false;
    });
});
</script>
</head>

<body class="body" onload="myFunction()" >
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
<h2> Building 48</h2>
</header>
<content>


<h2 >
	<span >Book Table Here</span>
</h2>

<?php
if(isset($_SESSION['bookingSuccess']))
{
	?>
	</br>
 <div class="alert alert-success">
  <strong>Table booked Succesfully!</strong> 
</div>

<?php
}
?>
</br>
</br>
<form>
<table width="50%" >

  <tr>
    <td>Booking Date:</td>
    <td>
    <?php $d=0;  
        if(date("G")>'14') $i=2;  
        else $i=1;  
        for($i=0;$i<=7;$i++){  
          $day= date("l",strtotime("+".($i+$d)." day"));  
          if($day=='Saturday'||$day=='Sunday'){  
            $i--;  
            $d++;  
            continue; 
  
          }  
			        $Bdates[] = date("D jS M y",strtotime("+".($i+$d)." day"));
					$BdatesValue[] = date("Y-m-d",strtotime("+".($i+$d)." day"));
					
				$day= implode(" ",$BdatesValue);
      }  
$Bday = explode(" ", $day);

                echo '<select class="dropdown" id ="bDates" onchange="updateTable(this.value)" name = "Bookingdates" required="required">';
                echo '<option value="" disabled selected>Select Date</option>';
         			for($x = 0; $x <  count($Bdates); $x++) {
                    
                    echo '<option value="'.$Bday[$x].'">'.$Bdates[$x].'</option>';
                    }  
echo '</select>';

?></td>
  </tr>
  <tr></tr>
     <tr>
    <td>Select the table:</td>		<td><select class="dropdown" id ="bTable" onchange="updateStartTime(this.value)" name="table" required="required">
    
    								<option ></option>
    								
                                    </select></td>
                                    
  </tr>
  <tr></tr>
  <tr></tr>
 <!-- <td></td> <td><input class="myButton" type="submit" value="Check Table Availability"></td>-->
 <tr></tr>

  <tr>
    <td>Start Time:</td> <td>
    
    <select class="dropdown" id="avialTime" name="StartTime" onchange="update(this.value)" style="width: 150px" required="required">
    
    <option ></option>
     </select>
   <!-- 
    <?php
     echo '<select id="avialTime" name="StartTime" onchange="update(this.value)" style="width: 150px" >';
     
   
     
     if ($checkResult->num_rows > 0) {
    // output data of each row
    
    while($row = $checkResult->fetch_assoc()) {
    	$databaseTime = $row['starttime'] ;
		$dbtime12h = date('h:i a ', strtotime($databaseTime));
		
		$user_timezone_from =  'UTC';
	    $user_timezone_to =  'Pacific/Auckland';
	    $date = new DateTime(null, new DateTimeZone($user_timezone_from)); 
	    $date->setTimezone(new DateTimeZone($user_timezone_to)); 
	    $cur_gmt_time = $date->format('h:i a ');
	    
		$dbtime = new DateTime($dbtime12h);
		$ctime = new DateTime($cur_gmt_time);
		
		$cur_gmt_date = $date->format('Y-m-d');
		$bookDate = $_POST["Bookingdates"];
		
		$cur_gmt_dateTime = new DateTime($cur_gmt_date);
		$bookDateTime = new DateTime($bookDate);
		

    	if($dbtime->getTimestamp() > $ctime->getTimestamp() && $bookDateTime == $cur_gmt_dateTime){
    	
       // echo '<option>'.$row['starttime'].'</option>';
      	 echo '<option>'.$dbtime12h.'</option>';
      	// echo '<option value= '.$dbtime12h.'>'.$dbtime12h.'</option>';
    	}
    	if($bookDateTime != $cur_gmt_dateTime){
    	
       // echo '<option>'.$row['starttime'].'</option>';
      	 echo '<option>'.$dbtime12h.'</option>';
    	}
		
		    }
		} else {
		    echo "0 results";
		}
  
     echo ' </select>';
     ?>-->
     </td>
     
     
  </tr>
  
   <tr>
    <td>End time:</td>		<td>
    
  
    <select class="dropdown" id="avialEndTime" name="EndTime" style="width: 150px" required="required">
     
  		<option></option>
     </select>
                                      
  </td>
  </tr>
 <tr></tr>
  <tr>
    <td>Number of People:</td>		<td><select id="nPeople" class="dropdown" name="People" required="required">
    <option value="" disabled selected>Select No of People</option>
    								<option value="1">1</option>
 									<option value="2">2</option>
									<option value="3">3</option>
 									<option value="4">4</option></select></td>
  </tr>
  <tr></tr>
  <tr>
    <td> Phone No:</td>  <td><input class="dropdown" id="inPhone" type="text" name="phoneNo" disabled="disabled" required="required"></td>
    
  </tr>
<tr></tr> 
  <tr>
    <td> E-mail:</td>  <td><input class="dropdown" id="inEmail"  type="text" name="email" required="required"></td>

  </tr>
  <tr></tr>
  <tr></tr>
 <tr>
    <td>   </td> <td><input class="myButton" type="submit" onclick="bookTable()" value="Book Now"> 
  </tr>

</table>
</form>

   </content> 
   



<footer>
<p class="main-info">
Booking desk in Building 48 Unitec Institue of Technology</p>
</footer>


</article>



</div>
</div>

<footer  class="mainFooter">
<p>All Copyrights &copy;  reserved web developer Likhit Khanna and Riyas Wahid </p>
</footer>

</body>
</html>
