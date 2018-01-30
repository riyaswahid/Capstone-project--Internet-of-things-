<?php include 'db.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="refresh" content="2">


<?php

//TableStatus
$TableOne = "TableOne";

$checkTableStatusOne = "SELECT
  t.Status
FROM TableStatus t
where t.TableID = '".$TableOne."'
";

if ($checkStatusOne = $mysqli->query($checkTableStatusOne)) {
	
	 if ($checkStatusOne->num_rows > 0) {
    
   // echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $checkStatusOne->fetch_assoc()) {
    	$TableOneStatus = $row['Status'] ;
    	
	}
}
}

//TableStatus
$TableTwo = "TableTwo";

$checkTableStatusTwo = "SELECT
  t.Status
FROM TableStatus t
where t.TableID = '".$TableTwo."'
";

if ($checkStatusOne = $mysqli->query($checkTableStatusTwo)) {
	
	 if ($checkStatusOne->num_rows > 0) {
    
   // echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $checkStatusOne->fetch_assoc()) {
    	$TableTwoStatus = $row['Status'] ;
    	
	}
}
}

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
    	$TableOneTimerStatus = $row['Status'] ;
    	$TableOneTimerHour = $row['Hour'] ;
    	$TableOneTimerMinutes = $row['Minutes'] ;
    	$TableOneTimerSecond = $row['Second'] ;
    	
	}
}
}

//TableTimerStatus
$TableTimerTwo = "TableTwo";

$checkTableTimerStatusTwo = "SELECT
  t.Status
FROM TableTimerStatus t
where t.TableID = '".$TableTimerTwo."'
";

if ($checkTimerStatusTwo = $mysqli->query($checkTableTimerStatusTwo)) {
	
	 if ($checkTimerStatusTwo->num_rows > 0) {
    
   // echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $checkTimerStatusTwo->fetch_assoc()) {
    	$TableTwoTimerStatus = $row['Status'] ;
    	
	}
}
}



?>

<body>

<div id="summarytable1" >
<LI id="t1cs"><?php echo $TableOneStatus; ?></LI>

<LI id="t2cs"><?php echo $TableTwoStatus; ?></LI>

<LI id="t1ts"><?php echo $TableOneTimerStatus; ?></LI>
<LI id="t2ts"><?php echo $TableTwoTimerStatus; ?></LI>

<LI id="t1h"><?php echo $TableOneTimerHour; ?></LI>
<LI id="t1m"><?php echo $TableOneTimerMinutes; ?></LI>
<LI id="t1s"><?php echo $TableOneTimerSecond; ?></LI>

</div>

</body>
</html>