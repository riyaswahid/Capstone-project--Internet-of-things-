<?php include 'db.php';?>

<?php
session_start();


 
$dateValue1 = $_GET['dv'];
$tableValue1 = $_GET['tv'];
$avialTime1 = $_GET['at'];
$avialEndTime1 = $_GET['aet'];

$userID = $_SESSION['User'];

$nPeople1 = $_GET['np'];
$inPhone1 = $_GET['p'];
$inEmail1 = $_GET['e'];

$startTime = date("G:i", strtotime($avialTime1));
$endTime = date("G:i", strtotime($avialEndTime1));

//echo '<option>'.$dateValue1.'</option>';

 if($dateValue1 && $userID)
{
  $sqlTable="INSERT INTO booking (bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES 
			('".$dateValue1."', '".$tableValue1."', '".$startTime."', '".$endTime."', '".$userID."', '".$nPeople1."', '".$inPhone1."', '".$inEmail1."')";


/*$sqlTable="INSERT INTO booking (bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES 
('2015-11-14', 3,'9:00','9:30', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')
,('2015-11-14', 3,'11:00','12:00', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')";*/


   if ($mysqli->query($sqlTable)) {
       $_SESSION['bookingSuccess']= "Booking success!";
    	header('Location: Booking48.php');
       
    } else {
       echo "Cannot insert into the Bookin table!";
    }

}

?>