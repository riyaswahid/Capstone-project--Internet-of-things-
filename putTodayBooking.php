<?php include 'db.php';?>

<?php

$todayBooking = $_GET['tb'];


 
if($todayBooking)
{
 		$user_timezone_from =  'UTC';
	    $user_timezone_to =  'Pacific/Auckland';
	    $date = new DateTime(null, new DateTimeZone($user_timezone_from)); 
	    $date->setTimezone(new DateTimeZone($user_timezone_to)); 
	    
	    $cur_gmt_time24 = $date->format('H:i:s');
	    $cur_gmt_time = $date->format('h:i a ');
	    $cur_gmt_date = $date->format('Y-m-d');
	    
	   /* $currentBooking = "SELECT
	    t.ID,
	    t.bookingdate,
	    t.TableID,
 		t.starttime,
  		t.endtime,
  		t.userID,
  		t.NumberOfPeople,
  		t.phoneNumber,
  		t.EmailID
		FROM booking t
		where t.bookingdate='" . $cur_gmt_date . "'
		and t.starttime < '" . $cur_gmt_time24 . "'
		and t.endtime > '" . $cur_gmt_time24 . "'
		";*/
		
	   /* $currentBooking = "SELECT
	    t.ID,
	    t.bookingdate,
	    t.TableID,
 		t.starttime,
  		t.endtime,
  		t.userID,
  		t.NumberOfPeople,
  		t.phoneNumber,
  		t.EmailID
		FROM booking t
		LEFT JOIN CurrentDay_Booking s 
		ON t.ID = s.ID
		WHERE t.ID != s.ID
		";*/
	   
	   //WHERE s.ID is null
	   //	and t.bookingdate='" . $cur_gmt_date . "'
	 //  and t.starttime <= '" . $cur_gmt_time24 . "'
	//	and t.endtime => '" . $cur_gmt_time24 . "'
	
	//where b.bookingdate ='2015-11-20' 
      // and  b.starttime <'02:51'
        // and  b.endtime >'02:51')";
		
		$currentBooking = "select  
		b.ID,
	    b.bookingdate,
	    b.TableID,
 		b.starttime,
  		b.endtime,
  		b.userID,
  		b.NumberOfPeople,
  		b.phoneNumber,
  		b.EmailID
        FROM booking b
		LEFT JOIN CurrentDay_Booking s ON
		b.ID = s.ID
		WHERE s.ID is null and b.ID in (select b.ID
                                        from Booking b 
                                        where b.bookingdate ='" . $cur_gmt_date . "' 
                                        and  b.starttime <'" . $cur_gmt_time24 . "'
                                       and  b.endtime >'" . $cur_gmt_time24 . "')";
                                       
	   if ($checkAvailResult = $mysqli->query($currentBooking)) {
			if ($checkAvailResult->num_rows > 0) {
   		
	   			 while($row = $checkAvailResult->fetch_assoc()) {
	   			 	$dbID = $row['ID'] ;
		   		 	$dbDate = $row['bookingdate'] ;
		   		 	$dbTableID = $row['TableID'] ;
		   		 	$dbStartTime = $row['starttime'] ;
		   		 	$dbEndTime = $row['endtime'] ;
		   		 	$dbUserID = $row['userID'] ;
		   		 	$dbNumPeople = $row['NumberOfPeople'] ;
		   		 	$dbPNumber = $row['phoneNumber'] ;
		   		 	$dbEmID = $row['EmailID'] ;
	   		
	   		 		
	   		 	$sqlTable="INSERT INTO CurrentDay_Booking (ID, bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES 
				('".$dbID."','".$dbDate."','".$dbTableID."','".$dbStartTime."', '".$dbEndTime."', '".$dbUserID."','".$dbNumPeople."','".$dbPNumber."','".$dbEmID."')";
				
				if ($mysqli->query($sqlTable)) {
				    //echo "data inserted into table CurrentDay_Booking successfully!<br>";
				} else {
					echo "ERROR: Cannot insert into booking table. "  . mysqli_error();
					die();
					}
			//	}

				}
			}

			}


/*	   
	   
		//(1,'2015-11-19', 1,'06:50','06:59', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')";
	
		$availableBooking = "SELECT
	   		 t.ID
			FROM CurrentDay_Booking t
			";
		$checkAvailResult = $mysqli->query($availableBooking);
		
		if ($checkResult = $mysqli->query($currentBooking)) {	
			if ($checkResult->num_rows > 0) {
   		
   		 while($row = $checkResult->fetch_assoc()) {
   		 	$dbID = $row['ID'] ;
   		 	$dbDate = $row['bookingdate'] ;
   		 	$dbTableID = $row['TableID'] ;
   		 	$dbStartTime = $row['starttime'] ;
   		 	$dbEndTime = $row['endtime'] ;
   		 	$dbUserID = $row['userID'] ;
   		 	$dbNumPeople = $row['NumberOfPeople'] ;
   		 	$dbPNumber = $row['phoneNumber'] ;
   		 	$dbEmID = $row['EmailID'] ;
   		 	
   		 	
			
   		 	//if ($checkAvailResult = $mysqli->query($availableBooking)) {
			//	if ($checkAvailResult->num_rows > 0) {
   		
	   			 while($row = $checkAvailResult->fetch_assoc()) {
	   		 	$dbAvailaID = $row['ID'] ;
	   		 	if($dbID != $dbAvailaID){
	   		 		
	   		 	$sqlTable="INSERT INTO CurrentDay_Booking (ID, bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES 
				('".$dbID."','".$dbDate."','".$dbTableID."','".$dbStartTime."', '".$dbEndTime."', '".$dbUserID."','".$dbNumPeople."','".$dbPNumber."','".$dbEmID."')";
				
				if ($mysqli->query($sqlTable)) {
				    //echo "data inserted into table CurrentDay_Booking successfully!<br>";
				} else {
					echo "ERROR: Cannot insert into booking table. "  . mysqli_error();
					die();
					}
				}

				}
				//}
				/*else{
					$sqlTable="INSERT INTO CurrentDay_Booking (ID, bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES 
				('".$dbID."','".$dbDate."','".$dbTableID."','".$dbStartTime."', '".$dbEndTime."', '".$dbUserID."','".$dbNumPeople."','".$dbPNumber."','".$dbEmID."')";
				
				if ($mysqli->query($sqlTable)) {
				    //echo "data inserted into table CurrentDay_Booking successfully!<br>";
				} else {
					echo "ERROR: Cannot insert into booking table. "  . mysqli_error();
					die();
					}
					
				}
				//}

   		 	
   		 }
	
}
}
*/
}

  
//*****************************************************/////////
/*  
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

*/
  
?>