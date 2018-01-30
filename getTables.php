<?php include 'db.php';?>

<?php

$bookingDate = $_GET['q'];
 
if($bookingDate)
{
 echo '<option value="" disabled selected>Select Table</option>'; 
 echo '<option value="1">Table 1</option>';
 echo '<option value="2">Table 2</option>';
 echo '<option value="3">Table 3</option>';
 

}

?>