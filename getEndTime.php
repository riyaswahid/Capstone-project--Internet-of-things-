<?php include 'db.php';?>

<?php

$startTime = $_GET['q'];
$bookingDate = $_GET['r'];
$tableNo = $_GET['t'];
 
if($startTime)
{
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

$checkBookingTime = "SELECT
  t.starttime,
  t.endtime
FROM booking t
where t.bookingdate='" . $bookingDate . "'
and t.TableID = '" . $tableNo . "'
";

if ($checkResultendtime = $mysqli->query($checkEndTime)) {
      
      if ($checkResultendtime->num_rows > 0) {
    // output data of each row
    echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $checkResultendtime->fetch_assoc()) {
    	$databaseTime = $row['endtime'] ;
		$dbtime12h = date('h:i a ', strtotime($databaseTime));
		
		$dbtimeplusTwoHours = date('h:i a ', strtotime($startTime)+7200);
		

		 $dbtime = new DateTime($dbtime12h);
		 $dbtimeplTwoh = new DateTime($dbtimeplusTwoHours);
		 $bookStartTime = new DateTime($startTime);
		 
		 if($dbtime->getTimestamp() >  $bookStartTime->getTimestamp() && $dbtime->getTimestamp() <  $dbtimeplTwoh->getTimestamp()){
		 //if($dbtime->getTimestamp() <  $dbtimeplTwoh->getTimestamp()){
		 	
		 	if ($checkResulBookStarttime = $mysqli->query($checkBookingTime)) {
		 		if ($checkResulBookStarttime->num_rows > 0) {
	 				 while($row = $checkResulBookStarttime->fetch_assoc()) {
	 				 	$databaseStartTime = $row['starttime'] ;
						$dbStarttime12h = date('h:i a ', strtotime($databaseStartTime));
						$dbNewStartTime = new DateTime($dbStarttime12h);
						
						$bookStartTime1 = new DateTime($startTime);
						echo '<option>'.$dbtime12h.'</option>';
					//	 if($bookStartTime1->getTimestamp() < $dbNewStartTime->getTimestamp()) && $dbtime->getTimestamp() <  $dbNewStartTime->getTimestamp()){
						//	 echo '<option>'.$dbtime12h.'</option>'; 	
					 	//}else if($bookStartTime1->getTimestamp() > $dbNewStartTime->getTimestamp()) && $dbtime->getTimestamp() >  $dbNewStartTime->getTimestamp()){
					 	//	echo '<option>'.$dbtime12h.'</option>'; 
					 	//}

 				 	}
	 			
	 			}else{
	 				echo '<option>'.$dbtime12h.'</option>'; 
	 			}					 		
	 		}
	 	}		
	  }
	}
        
  }     

}

/*
  switch($opt)
  {
    case 0:
    default:
      echo '
            <option>Select an Option...</option>
           ';
        break;
    case 1:
      echo '
            <option value="opt1_1">Option1_Test1</option>
            <option value="opt1_2">Option1_Test2</option>
            <option value="opt1_3">Option1_Test3</option>
           ';
        break;
    case 2:
      echo '
            <option value="opt2_1">Option2_Test1</option>
            <option value="opt2_2">Option2_Test2</option>
            <option value="opt2_3">Option2_Test3</option>
           ';
        break;
  }
  
  */
  /* 
 
 
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

if ($checkResultendtime = $mysqli->query($checkEndTime)) {
      //  echo "checkAvailable success!";
        
         echo '
            <option value="opt1_1">Option1_Test1</option>
            <option value="opt1_2">Option1_Test2</option>
            <option value="opt1_3">Option1_Test3</option>
           ';
    } else {
      //  echo "Cannot insert into the data table; check whether the table is created, or the database is active. "  . mysqli_error();
      
       echo '
            <option value="opt2_1">Option2_Test1</option>
            <option value="opt2_2">Option2_Test2</option>
            <option value="opt2_3">Option2_Test3</option>
           ';
    }
    
    
   */ 
    
  
?>