<?php include 'db.php';?>

<?php


$checkTableTwoBooking = $_GET['t2'];
 


if($checkTableTwoBooking)
{
	
//$TableTimerOne = "TableOne";

$checkTableBooking = "SELECT
  t.bookingdate,
  t.starttime,
  t.endtime,
  t.userID,
  t.TableID
FROM booking t
";

if ($tableBooking = $mysqli->query($checkTableBooking)) {
	
	 if ($tableBooking->num_rows > 0) {
    
   // echo '<option value="" disabled selected>Select End Time</option>';
   // echo '<option>'.$startTime.'</option>';
    while($row = $tableBooking->fetch_assoc()) {
    	$bookingDate = $row['bookingdate'] ;
    	$userID = $row['userID'] ;
    	$tableID = $row['TableID'] ;
    	
    	$sTime = $row['starttime'] ;
		$startTime12h = date('h:i a ', strtotime($sTime));
		
		$eTime = $row['endtime'] ;
		$endTime12h = date('h:i a ', strtotime($eTime));
		
		$user_timezone_from =  'UTC';
	    $user_timezone_to =  'Pacific/Auckland';
	    $date = new DateTime(null, new DateTimeZone($user_timezone_from)); 
	    $date->setTimezone(new DateTimeZone($user_timezone_to)); 
	    $cur_gmt_time = $date->format('h:i a ');
	    $cur_gmt_date = $date->format("Y-m-d");
	    
		$ctime = new DateTime($cur_gmt_time);
		$sTime12h = new DateTime($startTime12h);
		$eTime12h = new DateTime($endTime12h);
		
		if($tableID == 2 && $bookingDate == $cur_gmt_date){
			if($ctime->getTimestamp() > $sTime12h->getTimestamp() && $ctime->getTimestamp() < $eTime12h->getTimestamp()){
				
			?>
				<p font-size="4" text-align: center;>Reserved! User: <?php echo $userID; ?><br><?php echo $startTime12h; ?> <br>To: <?php echo $endTime12h; ?></p>
				<?php
			
			}
		}
    	
	}
}
}	


}


?>