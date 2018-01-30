<?php
session_start();
//include 'config.php';
include 'db.php';
//$con= mysqli_connect($host,$user,$pass) or die("Could not connect to the database");
//mysqli_select_db($con,$db_name) or die("Could not find the database");

$username= $_POST['login'];
$password = $_POST['password'];
$sql = "SELECT ID, USERNAME, PASSWORD FROM LOGIN_TABLE WHERE (USERNAME = '".$username."' AND PASSWORD = '".$password."')";
$result = $mysqli->query($sql);

//$query= "Select * from login where user='$username' AND password='$password'";


//$result= mysqli_query($con, $query) or die(mysqli_error($con));
//if(mysqli_num_rows($result)==1)

if($result->num_rows==1)
{
 	$_SESSION['User']= $username;
 	header("Location: Booking48.php");
}
else
{
	
	$_SESSION['wrlogin']= "Wrong Login. Try Again";
    header('Location: login.php');
}

$result->close();
            
mysqli_close()
?>