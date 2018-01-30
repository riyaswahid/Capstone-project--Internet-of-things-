<?php include 'db.php';?>

<?php

$bookingDate = $_GET['q'];
$tableNo = $_GET['t'];

 
if($tableNo)
{
  
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

   if ($checkResult = $mysqli->query($checkStartTime)) {
       
        if ($checkResult->num_rows > 0) {
    echo '<option value="" disabled selected>Select Start Time</option>';
    
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
		//$bookDate = $_POST["Bookingdates"];
		
		$cur_gmt_dateTime = new DateTime($cur_gmt_date);
		$bookDateTime = new DateTime($bookingDate);
		

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
    } else {
       // echo "Cannot insert into the data table; check whether the table is created, or the database is active. "  . mysqli_error();
    }

}


  
?>