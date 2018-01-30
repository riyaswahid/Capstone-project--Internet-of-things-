

<?php include 'db.php';?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//insert username and password into MESSAGE_TABLE
    $cleaned_message = preg_replace('/[^a-zA-Z0-9.\s]/', '', $_POST["message"]); //remove invalid chars from input.
    $strsq0 = "INSERT INTO MESSAGES_TABLE ( MESSAGE) VALUES ('" . $cleaned_message . "');"; //query to insert new message
    
     if ($mysqli->query($strsq0)) {
        //echo "Insert success!";
    } else {
        echo "Cannot insert into the data table; check whether the table is created, or the database is active. "  . mysqli_error();
    }
    
    //insert username and password into LOGIN Table
    $cleaned_message1 = preg_replace('/[^a-zA-Z0-9.\s]/', '', $_POST["username"]); //remove invalid chars from input.
    $cleaned_message2 = preg_replace('/[^a-zA-Z0-9.\s]/', '', $_POST["password"]); //remove invalid chars from input.
    $strsq1 = "INSERT INTO LOGIN_TABLE ( USERNAME, PASSWORD) VALUES ('" . $cleaned_message1 . "', '" . $cleaned_message2 . "');"; //query to insert new message
    
   
    if ($mysqli->query($strsq1)) {
        //echo "Insert success!";
    } else {
        echo "Cannot insert into the USERNAME LOGIN table; check whether the table is created, or the database is active. "  . mysqli_error();
    }
    
    
    
}

//Query the DB for messages
$strsql = "select * from MESSAGES_TABLE ORDER BY ID DESC limit 100";
if ($result = $mysqli->query($strsql)) {
   // printf("<br>Select returned %d rows.\n", $result->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
 
 //Query the DB for username and password
$strsql1 = "select * from LOGIN_TABLE ORDER BY ID DESC limit 100";
if ($result1 = $mysqli->query($strsql1)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
    
    
// Query the DB for times
$strsql2 = "select * from times";
if ($result2 = $mysqli->query($strsql2)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
    
    // Query the DB for scheduled_availability
$strsql3 = "select * from scheduled_availability";
if ($result3 = $mysqli->query($strsql3)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
    
    
    // Query the DB for booking
$strsql4 = "select * from booking";
if ($result4 = $mysqli->query($strsql4)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
    
// Query the DB for nodeRed
$strsql6 = "select * from nodeRed";
if ($result6 = $mysqli->query($strsql6)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the TableInfo database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
  
  
  // Query the DB for TableStatus
$strsql7 = "select * from TableStatus";
if ($result7 = $mysqli->query($strsql7)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the TableStatus database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
    
    // Query the DB for TableTimerStatus
$strsql8 = "select * from TableTimerStatus";
if ($result8 = $mysqli->query($strsql8)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the TableTimerStatus database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
    
        // Query the DB for CurrentDay_Booking
$strsql9 = "select * from CurrentDay_Booking";
if ($result9 = $mysqli->query($strsql9)) {
   // printf("<br>Select returned %d rows.\n", $result1->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the CurrentDay_Booking database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
// check available query here **********

/*
$strsql5 = "SELECT
  t.starttime,
  t.endtime
FROM times t
  JOIN scheduled_availability s ON                                                                           
     t.starttime >= s.starttime
    AND t.endtime <= s.endtime
    and s.tableID = 1;
  LEFT JOIN booking b ON
    b.tableID = s.tableID
    AND t.starttime <= b.endtime
    AND t.endtime >= b.starttime
    and b.bookingdate='2015-10-31'
WHERE b.tableID IS NULL 
";
*/
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
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
?>


<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <title>PHP MySQL Sample Application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="">
   
        <img class="newappIcon" src="images/newapp-icon.png" />
        <h1>
					Welcome to the <span class="blue">PHP MySQL </span> on Bluemix!
				</h1>
        <p class="description"> Insert and Retrieve messages to and from a MySQL database. <br>


            <input type="button" class = "mybutton" onclick="window.location = 'init.php';" class="btn" value="(Re-)Create table"></input></p>
            </br>

    
    <table id='notes' class='records'><tbody>
        
        <?php
        
         // PRINT nodeRed
            /*
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result6)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result6, 0 );
            if($result6->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result6 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result6 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
            
            // PRINT TableStatus
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result7)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result7, 0 );
            if($result7->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result7 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result7 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
            // PRINT TableTimerStatus
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result8)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result8, 0 );
            if($result8->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result8 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result8 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
        /*
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result, 0 );
            if($result->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            */
           /*
            // PRINT USERNAME AND PASSWORD
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result1)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result1, 0 );
            if($result1->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result1 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result1 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            /*
            // PRINT times
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result2)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result2, 0 );
            if($result2->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result2 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result2 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
            // PRINT scheduled_availability
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result3)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result3, 0 );
            if($result3->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result3 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result3 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
            */
           
            // PRINT booking
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result4)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result4, 0 );
            if($result4->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result4 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result4 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
             // PRINT CurrentDay_Booking
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result9)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result9, 0 );
            if($result9->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result9 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result9 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
            /*
            // PRINT Query
            
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result5)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "</tr>\n";

            mysqli_data_seek ( $result5, 0 );
            if($result5->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result5 ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result5 ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            
          /*  
            // data retrieve
          //  $hello = "HELLO";
           // $password = "123";
          // $sql = "SELECT ID, USERNAME, PASSWORD FROM LOGIN_TABLE WHERE (USERNAME = 'HELLO' AND PASSWORD = '123')";
          // $hello = $_POST['username'];
         //  $password = $_POST['password'];
         //   $sql = "SELECT ID, USERNAME, PASSWORD FROM LOGIN_TABLE WHERE (USERNAME = '".$hello."' AND PASSWORD = '".$password."')";
		//	$result = $mysqli->query($sql);

		//	if ($result->num_rows > 0) {
   			 // output data of each row
    	//	 while($row = $result->fetch_assoc()) {
        //		 echo "<br> id: ". $row["ID"]. " - Name: ". $row["USERNAME"]. " " . $row["PASSWORD"] . "<br>";
     	//		}
		//	} else {
    	//	echo "0 results";
		//	}
			*/
			
            $result->close();
            $result1->close();
            $result2->close();
            $result3->close();
            $result4->close();
            $result5->close();
            $result6->close();
            $result7->close();
            $result8->close();
            $result9->close();
            mysqli_close();
        ?>
        <tr>
            <form method = "POST"> <!--FORM: will submit to same page (index.php), and if ($_SERVER["REQUEST_METHOD"] == "POST") will catch it --> 
                <td colspan = "2">
                <input type = "text" style = "width:100%" name = "message" autofocus onchange="saveChange(this)" onkeydown="onKey(event)"></input>
                </br>
                <input type = "text" style = "width:100%" name = "username" autofocus onchange="saveChange(this)" onkeydown="onKey(event)"></input>
                <input type = "text" style = "width:100%" name = "password" autofocus onchange="saveChange(this)" onkeydown="onKey(event)"></input>
                </td>
                <td>
                    <button class = "mybutton" type = "submit">Add New</button></td></tr>
                    <input type="submit" value="Login" name="login" class="submit" />
                </td> 
            </form>
        </tr>
        </tbody>
    </table>
    </div>
</body>

</html>
