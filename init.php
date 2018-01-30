

<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Sample Application</title>
    <link rel="stylesheet" href="style.css" />
</head>

<?php


//*****************************************
// Drop and create For table nodeRed **
//*****************************************
/*
$sqlTable="DROP TABLE IF EXISTS nodeRed";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}


echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE nodeRed (
 TableID bigint(20) NOT NULL,
 MESSAGE varchar(255) DEFAULT NULL
) DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "Table nodeRed created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}

$sqlTable="INSERT INTO nodeRed (TableID, MESSAGE) VALUES (1,'wahid')";

if ($mysqli->query($sqlTable)) {
    echo "Table nodeRed data inserted successfully!<br>";
} else {
	echo "Table nodeRed data not inserted "  . mysqli_error();
	die();
}
*/
//*****************************************
// Drop and create For table TableStatus **
//*****************************************
/*
$sqlTable="DROP TABLE IF EXISTS TableStatus";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}


echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE TableStatus (
 TableID varchar(255) DEFAULT NULL,
 Status varchar(255) DEFAULT NULL
) DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "Table TableStatus created successfully!<br>";
} else {
	echo "ERROR: Cannot create TableStatus. "  . mysqli_error();
	die();
}

$sqlTable="INSERT INTO TableStatus (TableID, Status) VALUES ('TableOne','Reserved TB1')
,('TableTwo','Reserved TB2')";
if ($mysqli->query($sqlTable)) {
    echo "Table TableStatus data inserted successfully!<br>";
} else {
	echo "Table TableStatus data not inserted "  . mysqli_error();
	die();
}
*/

//*****************************************
// Drop and create For table TableTimerStatus **
//*****************************************
/*
$sqlTable="DROP TABLE IF EXISTS TableTimerStatus";
if ($mysqli->query($sqlTable)) {
    echo "Table TableTimerStatus dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}


echo "Executing CREATE TABLE TableTimerStatus Query...<br>";
$sqlTable="
CREATE TABLE TableTimerStatus (
 TableID varchar(255) DEFAULT NULL,
 Hour bigint(20) NOT NULL,
 Minutes bigint(20) NOT NULL,
 Second bigint(20) NOT NULL,
 Date DATETIME  default NULL,
 Status varchar(255) DEFAULT NULL
) DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "Table TableTimerStatus created successfully!<br>";
} else {
	echo "ERROR: Cannot create TableTimerStatus. "  . mysqli_error();
	die();
}

$sqlTable="INSERT INTO TableTimerStatus (TableID, Hour, Minutes, Second, Date, Status) VALUES ('TableOne',0,0,0,0,'reserved')
,('TableTwo',0,0,0,0,'reserved')";
if ($mysqli->query($sqlTable)) {
    echo "Table TableTimerStatus data inserted successfully!<br>";
} else {
	echo "Table TableTimerStatus data not inserted "  . mysqli_error();
	die();
}
*/
//*******************************************
// Drop and create For table MESSAGE_TABLE **
//*******************************************
/*
$sqlTable="DROP TABLE IF EXISTS MESSAGES_TABLE";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}


echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE MESSAGES_TABLE (
 ID bigint(20) NOT NULL AUTO_INCREMENT,
 TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
 MESSAGE varchar(255) DEFAULT NULL,
 PRIMARY KEY (ID)
) DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}
*/
//*****************************************
// Drop and create For table LOGIN_TABLE **
//*****************************************
/*
$sqlTable="DROP TABLE IF EXISTS LOGIN_TABLE";
if ($mysqli->query($sqlTable)) {
    echo "LOGIN Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}


echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE LOGIN_TABLE (
 ID bigint(20) NOT NULL AUTO_INCREMENT,
 USERNAME varchar(255) DEFAULT NULL,
 PASSWORD varchar(255) DEFAULT NULL,
 PRIMARY KEY (ID)
) DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "LOGIN Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create LOGIN table. "  . mysqli_error();
	die();
}
*/
/*
//*****************************************************
// Drop and create For table scheduled_availability  **
//*****************************************************
$sqlTable="DROP TABLE IF EXISTS scheduled_availability";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}

echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE scheduled_availability (
  TableID int NOT NULL default '0',
  starttime time default NULL,
  endtime time default NULL
)DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "scheduled_availability Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create scheduled_availability  table. "  . mysqli_error();
	die();
}


echo "Executing INSERT data Query into scheduled_availability table<br>";

$sqlTable="INSERT INTO scheduled_availability (TableID, starttime, endtime) VALUES (1,'07:40','07:55')
,(1,'07:45','08:00')
,(1,'07:50','08:05')
,(1,'07:55','08:10')
,(1,'08:00','08:15')
,(1,'08:05','08:20')
,(1,'08:10','08:25')
,(1,'08:15','08:30')
,(1,'08:20','08:35')
,(1,'08:25','08:40')
,(1,'08:30','08:45')
,(1,'08:35','08:50')
,(1,'08:40','08:55')
,(1,'08:45','09:00')
,(1,'08:50','09:05')
,(1,'08:55','09:10')
,(1,'09:00','09:15')
,(1,'09:05','09:20')
,(1,'09:10','09:25')
,(1,'09:15','09:30')
,(1,'09:20','09:35')
,(1,'09:25','09:40')
,(1,'09:30','09:45')
,(1,'09:35','09:50')
,(1,'09:40','09:55')
,(1,'09:45','10:00')
,(1,'09:50','10:05')
,(1,'09:55','10:10')
,(1,'10:00','10:15')
,(1,'10:05','10:20')
,(1,'10:10','10:25')
,(1,'10:15','10:30')
,(1,'10:20','10:35')
,(1,'10:25','10:40')
,(1,'10:30','10:45')
,(1,'10:35','10:50')
,(1,'10:40','10:55')
,(1,'10:45','11:00')
,(1,'10:50','11:05')
,(1,'10:55','11:10')
,(1,'11:00','11:15')
,(1,'11:05','11:20')
,(1,'11:10','11:25')
,(1,'11:15','11:30')
,(1,'11:20','11:35')
,(1,'11:25','11:40')
,(1,'11:30','11:45')
,(1,'11:35','11:50')
,(1,'11:40','11:55')
,(1,'11:45','12:00')
,(1,'11:50','12:05')
,(1,'11:55','12:10')
,(1,'12:00','12:15')
,(1,'12:05','12:20')
,(1,'12:10','12:25')
,(1,'12:15','12:30')
,(1,'12:20','12:35')
,(1,'12:25','12:40')
,(1,'12:30','12:45')
,(1,'12:35','12:50')
,(1,'12:40','12:55')
,(1,'12:45','13:00')
,(1,'12:50','13:05')
,(1,'12:55','13:10')
,(1,'13:00','13:15')
,(1,'13:05','13:20')
,(1,'13:10','13:25')
,(1,'13:15','13:30')
,(1,'13:20','13:35')
,(1,'13:25','13:40')
,(1,'13:30','13:45')
,(1,'13:35','13:50')
,(1,'13:40','13:55')
,(1,'13:45','14:00')
,(1,'13:50','14:05')
,(1,'13:55','14:10')
,(1,'14:00','14:15')
,(1,'14:05','14:20')
,(1,'14:10','14:25')
,(1,'14:15','14:30')
,(1,'14:20','14:35')
,(1,'14:25','14:40')
,(1,'14:30','14:45')
,(1,'14:35','14:50')
,(1,'14:40','14:55')
,(1,'14:45','15:00')
,(1,'14:50','15:05')
,(1,'14:55','15:10')
,(1,'15:00','15:15')
,(1,'15:05','15:20')
,(1,'15:10','15:25')
,(1,'15:15','15:30')
,(1,'15:20','15:35')
,(1,'15:25','15:40')
,(1,'15:30','15:45')
,(1,'15:35','15:50')
,(1,'15:40','15:55')
,(1,'15:45','15:00')
,(1,'15:50','16:05')
,(1,'15:55','16:10')
,(1,'16:00','16:15')
,(1,'16:05','16:20')
,(1,'16:10','16:25')
,(1,'16:15','16:30')
,(1,'16:20','16:35')
,(1,'16:25','16:40')
,(1,'16:30','16:45')
,(1,'16:35','16:50')
,(1,'16:40','16:55')
,(1,'16:45','17:00')
,(1,'16:50','17:05')
,(1,'16:55','17:10')
,(1,'17:00','17:15')
,(1,'17:05','17:20')
,(1,'17:10','17:25')
,(1,'17:15','17:30')
,(1,'17:20','17:35')
,(1,'17:25','17:40')
,(1,'17:30','17:45')
,(1,'17:35','17:50')
,(1,'17:40','17:55')
,(1,'17:45','18:00')
,(2,'07:40','07:55')
,(2,'07:45','08:00')
,(2,'07:50','08:05')
,(2,'07:55','08:10')
,(2,'08:00','08:15')
,(2,'08:05','08:20')
,(2,'08:10','08:25')
,(2,'08:15','08:30')
,(2,'08:20','08:35')
,(2,'08:25','08:40')
,(2,'08:30','08:45')
,(2,'08:35','08:50')
,(2,'08:40','08:55')
,(2,'08:45','09:00')
,(2,'08:50','09:05')
,(2,'08:55','09:10')
,(2,'09:00','09:15')
,(2,'09:05','09:20')
,(2,'09:10','09:25')
,(2,'09:15','09:30')
,(2,'09:20','09:35')
,(2,'09:25','09:40')
,(2,'09:30','09:45')
,(2,'09:35','09:50')
,(2,'09:40','09:55')
,(2,'09:45','10:00')
,(2,'09:50','10:05')
,(2,'09:55','10:10')
,(2,'10:00','10:15')
,(2,'10:05','10:20')
,(2,'10:10','10:25')
,(2,'10:15','10:30')
,(2,'10:20','10:35')
,(2,'10:25','10:40')
,(2,'10:30','10:45')
,(2,'10:35','10:50')
,(2,'10:40','10:55')
,(2,'10:45','11:00')
,(2,'10:50','11:05')
,(2,'10:55','11:10')
,(2,'11:00','11:15')
,(2,'11:05','11:20')
,(2,'11:10','11:25')
,(2,'11:15','11:30')
,(2,'11:20','11:35')
,(2,'11:25','11:40')
,(2,'11:30','11:45')
,(2,'11:35','11:50')
,(2,'11:40','11:55')
,(2,'11:45','12:00')
,(2,'11:50','12:05')
,(2,'11:55','12:10')
,(2,'12:00','12:15')
,(2,'12:05','12:20')
,(2,'12:10','12:25')
,(2,'12:15','12:30')
,(2,'12:20','12:35')
,(2,'12:25','12:40')
,(2,'12:30','12:45')
,(2,'12:35','12:50')
,(2,'12:40','12:55')
,(2,'12:45','13:00')
,(2,'12:50','13:05')
,(2,'12:55','13:10')
,(2,'13:00','13:15')
,(2,'13:05','13:20')
,(2,'13:10','13:25')
,(2,'13:15','13:30')
,(2,'13:20','13:35')
,(2,'13:25','13:40')
,(2,'13:30','13:45')
,(2,'13:35','13:50')
,(2,'13:40','13:55')
,(2,'13:45','14:00')
,(2,'13:50','14:05')
,(2,'13:55','14:10')
,(2,'14:00','14:15')
,(2,'14:05','14:20')
,(2,'14:10','14:25')
,(2,'14:15','14:30')
,(2,'14:20','14:35')
,(2,'14:25','14:40')
,(2,'14:30','14:45')
,(2,'14:35','14:50')
,(2,'14:40','14:55')
,(2,'14:45','15:00')
,(2,'14:50','15:05')
,(2,'14:55','15:10')
,(2,'15:00','15:15')
,(2,'15:05','15:20')
,(2,'15:10','15:25')
,(2,'15:15','15:30')
,(2,'15:20','15:35')
,(2,'15:25','15:40')
,(2,'15:30','15:45')
,(2,'15:35','15:50')
,(2,'15:40','15:55')
,(2,'15:45','15:00')
,(2,'15:50','16:05')
,(2,'15:55','16:10')
,(2,'16:00','16:15')
,(2,'16:05','16:20')
,(2,'16:10','16:25')
,(2,'16:15','16:30')
,(2,'16:20','16:35')
,(2,'16:25','16:40')
,(2,'16:30','16:45')
,(2,'16:35','16:50')
,(2,'16:40','16:55')
,(2,'16:45','17:00')
,(2,'16:50','17:05')
,(2,'16:55','17:10')
,(2,'17:00','17:15')
,(2,'17:05','17:20')
,(2,'17:10','17:25')
,(2,'17:15','17:30')
,(2,'17:20','17:35')
,(2,'17:25','17:40')
,(2,'17:30','17:45')
,(2,'17:35','17:50')
,(2,'17:40','17:55')
,(2,'17:45','18:00')";


if ($mysqli->query($sqlTable)) {
    echo "data inserted into table scheduled_availability successfully!<br>";
} else {
	echo "ERROR: Cannot insert into scheduled_availability table. "  . mysqli_error();
	die();
}
*/

//*************************************************************
// Drop, create and insert data For table CurrentDay_Booking ** 
//*************************************************************

$sqlTable="DROP TABLE IF EXISTS CurrentDay_Booking";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}

echo "Executing CREATE TABLE Query...<br>";
/*$sqlTable="
CREATE TABLE CurrentDay_Booking (

  ID bigint(20) NOT NULL,
  bookingdate date default null,
  TableID int NOT NULL default '0',
  starttime time default NULL,
  endtime time default NULL,
  userID varchar(15) not null,
  NumberOfPeople int(1) not null,
  phoneNumber	int(15) null,
  EmailID VARCHAR(320) null
)DEFAULT CHARSET=utf8
";*/
$sqlTable="
CREATE TABLE CurrentDay_Booking (

  ID int,
  bookingdate date default null,
  TableID int   default '0',
  starttime time  ,
  endtime time  ,
  userID varchar(15) not null,
  NumberOfPeople int  ,
  phoneNumber	int ,
  EmailID VARCHAR(320) 
 )";

if ($mysqli->query($sqlTable)) {
    echo "CurrentDay_Booking Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create CurrentDay_Booking table. "  . mysqli_error();
	die();
}


echo "Executing INSERT data Query into CurrentDay_Booking table<br>";

$sqlTable="INSERT INTO CurrentDay_Booking (ID, bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES
(1,'2015-11-17', 1,'22:30','22:45', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')";


if ($mysqli->query($sqlTable)) {
    echo "data inserted into table CurrentDay_Booking successfully!<br>";
} else {
	echo "ERROR: Cannot insert into CurrentDay_Booking table. "  . mysqli_error();
	die();
}

//**************************************************
// Drop, create and insert data For table booking ** 
//**************************************************

$sqlTable="DROP TABLE IF EXISTS booking";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}

echo "Executing CREATE TABLE Query...<br>";
/*$sqlTable="
CREATE TABLE booking (
  ID bigint(20) NOT NULL AUTO_INCREMENT,
  bookingdate date default null,
  TableID int NOT NULL default '0',
  starttime time default NULL,
  endtime time default NULL,
  userID varchar(15) not null,
  NumberOfPeople int(1) not null,
  phoneNumber	int(15) null,
  EmailID VARCHAR(320) null,
  PRIMARY KEY (ID)
)DEFAULT CHARSET=utf8
";*/
$sqlTable="
CREATE TABLE booking (
ID int NOT NULL AUTO_INCREMENT,
  bookingdate date default null,
  TableID int ,
  starttime time default NULL,
  endtime time default NULL,
  userID varchar(15) not null,
  NumberOfPeople int  ,
  phoneNumber	int ,
  EmailID VARCHAR(320) null,
PRIMARY KEY (ID)
)";
if ($mysqli->query($sqlTable)) {
    echo "booking Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create booking table. "  . mysqli_error();
	die();
}


echo "Executing INSERT data Query into booking table<br>";

$sqlTable="INSERT INTO booking (bookingdate, TableID, starttime, endtime, userID, NumberOfPeople, phoneNumber, EmailID) VALUES 
('2015-11-23', 1,'06:40','09:00', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')
,('2015-11-21', 2,'00:30','01:58', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')
,('2015-11-21', 2,'19:05','19:58', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')
,('2015-11-17', 1,'22:30','22:45', 'riyas', 2, 021029917, 'abdulm09@wairaka.com')";


if ($mysqli->query($sqlTable)) {
    echo "data inserted into table booking successfully!<br>";
} else {
	echo "ERROR: Cannot insert into booking table. "  . mysqli_error();
	die();
}

/*
//*******************************************
// Drop, create and insert For table times ** 
//*******************************************

$sqlTable="DROP TABLE IF EXISTS times";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}

echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE times (
  starttime time default NULL,
  endtime time default NULL
)DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "times Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create times table. "  . mysqli_error();
	die();
}


echo "Executing INSER data Query into times table<br>";
$sqlTable="INSERT INTO times (starttime, endtime) VALUES ('23:50','01:05')
 ,('23:55','01:10')
 ,('01:00','01:15')
 ,('01:05','01:20')
 ,('01:10','01:25')
 ,('01:15','01:30')
 ,('01:20','01:35')
 ,('01:25','01:40')
 ,('01:30','01:45')
 ,('01:35','01:50')
 ,('01:40','01:55')
 ,('01:45','02:00')
 ,('01:50','02:05')
 ,('01:55','02:10')
 ,('02:00','02:15')
 ,('02:05','02:20')
 ,('02:10','02:25')
 ,('02:15','02:30')
 ,('02:20','02:35')
 ,('02:25','02:40')
 ,('02:30','02:45')
 ,('02:35','02:50')
 ,('02:40','02:55')
 ,('02:45','03:00')
 ,('02:50','03:05')
 ,('02:55','03:10')
 ,('03:00','03:15')
 ,('03:05','03:20')
 ,('03:10','03:25')
 ,('03:15','03:30')
 ,('03:20','03:35')
 ,('03:25','03:40')
 ,('03:30','03:45')
 ,('03:35','03:50')
 ,('03:40','03:55')
 ,('03:45','04:00')
 ,('03:50','04:05')
 ,('03:55','04:10')
 ,('04:00','04:15')
 ,('04:05','04:20')
 ,('04:10','04:25')
 ,('04:15','04:30')
 ,('04:20','04:35')
 ,('04:25','04:40')
 ,('04:30','04:45')
 ,('04:35','04:50')
 ,('04:40','04:55')
 ,('04:45','05:00')
 ,('04:50','05:05')
 ,('04:55','05:10')
 ,('05:00','05:15')
 ,('05:05','05:20')
 ,('05:10','05:25')
 ,('05:15','05:30')
 ,('05:20','05:35')
 ,('05:25','05:40')
 ,('05:30','05:45')
 ,('05:35','05:50')
 ,('05:40','05:55')
 ,('05:45','06:00')
 ,('05:50','06:05')
 ,('05:55','06:10')
 ,('06:00','06:15')
 ,('06:05','06:20')
 ,('06:10','06:25')
 ,('06:15','06:30')
 ,('06:20','06:35')
 ,('06:25','06:40')
 ,('06:30','06:45')
 ,('06:35','06:50')
 ,('06:40','06:55')
 ,('06:45','07:00')
 ,('06:50','07:05')
 ,('06:55','07:10')
 ,('07:00','07:15')
 ,('07:05','07:20')
 ,('07:10','07:25')
 ,('07:15','07:30')
 ,('07:20','07:35')
 ,('07:25','07:40')
 ,('07:30','07:45')
 ,('07:35','07:50')
 ,('07:40','07:55')
 ,('07:45','08:00')
 ,('07:50','08:05')
 ,('07:55','08:10')
 ,('08:00','08:15')
 ,('08:05','08:20')
 ,('08:10','08:25')
 ,('08:15','08:30')
 ,('08:20','08:35')
 ,('08:25','08:40')
 ,('08:30','08:45')
 ,('08:35','08:50')
 ,('08:40','08:55')
 ,('08:45','09:00')
 ,('08:50','09:05')
 ,('08:55','09:10')
 ,('09:00','09:15')
 ,('09:05','09:20')
 ,('09:10','09:25')
 ,('09:15','09:30')
 ,('09:20','09:35')
 ,('09:25','09:40')
 ,('09:30','09:45')
 ,('09:35','09:50')
 ,('09:40','09:55')
 ,('09:45','10:00')
 ,('09:50','10:05')
 ,('09:55','10:10')
 ,('10:00','10:15')
 ,('10:05','10:20')
 ,('10:10','10:25')
 ,('10:15','10:30')
 ,('10:20','10:35')
 ,('10:25','10:40')
 ,('10:30','10:45')
 ,('10:35','10:50')
 ,('10:40','10:55')
 ,('10:45','11:00')
 ,('10:50','11:05')
 ,('10:55','11:10')
 ,('11:00','11:15')
 ,('11:05','11:20')
 ,('11:10','11:25')
 ,('11:15','11:30')
 ,('11:20','11:35')
 ,('11:25','11:40')
 ,('11:30','11:45')
 ,('11:35','11:50')
 ,('11:40','11:55')
 ,('11:45','12:00')
 ,('11:50','12:05')
 ,('11:55','12:10')
 ,('12:00','12:15')
 ,('12:05','12:20')
 ,('12:10','12:25')
 ,('12:15','12:30')
 ,('12:20','12:35')
 ,('12:25','12:40')
 ,('12:30','12:45')
 ,('12:35','12:50')
 ,('12:40','12:55')
 ,('12:45','13:00')
 ,('12:50','13:05')
 ,('12:55','13:10')
 ,('13:00','13:15')
 ,('13:05','13:20')
 ,('13:10','13:25')
 ,('13:15','13:30')
 ,('13:20','13:35')
 ,('13:25','13:40')
 ,('13:30','13:45')
 ,('13:35','13:50')
 ,('13:40','13:55')
 ,('13:45','14:00')
 ,('13:50','14:05')
 ,('13:55','14:10')
 ,('14:00','14:15')
 ,('14:05','14:20')
 ,('14:10','14:25')
 ,('14:15','14:30')
 ,('14:20','14:35')
 ,('14:25','14:40')
 ,('14:30','14:45')
 ,('14:35','14:50')
 ,('14:40','14:55')
 ,('14:45','15:00')
 ,('14:50','15:05')
 ,('14:55','15:10')
 ,('15:00','15:15')
 ,('15:05','15:20')
 ,('15:10','15:25')
 ,('15:15','15:30')
 ,('15:20','15:35')
 ,('15:25','15:40')
 ,('15:30','15:45')
 ,('15:35','15:50')
 ,('15:40','15:55')
 ,('15:45','15:00')
 ,('15:50','16:05')
 ,('15:55','16:10')
 ,('16:00','16:15')
 ,('16:05','16:20')
 ,('16:10','16:25')
 ,('16:15','16:30')
 ,('16:20','16:35')
 ,('16:25','16:40')
 ,('16:30','16:45')
 ,('16:35','16:50')
 ,('16:40','16:55')
 ,('16:45','17:00')
 ,('16:50','17:05')
 ,('16:55','17:10')
 ,('17:00','17:15')
 ,('17:05','17:20')
 ,('17:10','17:25')
 ,('17:15','17:30')
 ,('17:20','17:35')
 ,('17:25','17:40')
 ,('17:30','17:45')
 ,('17:35','17:50')
 ,('17:40','17:55')
 ,('17:45','18:00')
 ,('17:50','18:05')
 ,('17:55','18:10')
 ,('18:00','18:15')
 ,('18:05','18:20')
 ,('18:10','18:25')
 ,('18:15','18:30')
 ,('18:20','18:35')
 ,('18:25','18:40')
 ,('18:30','18:45')
 ,('18:35','18:50')
 ,('18:40','18:55')
 ,('18:45','19:00')
 ,('18:50','19:05')
 ,('18:55','19:10')
 ,('19:00','19:15')
 ,('19:05','19:20')
 ,('19:10','19:25')
 ,('19:15','19:30')
 ,('19:20','19:35')
 ,('19:25','19:40')
 ,('19:30','19:45')
 ,('19:35','19:50')
 ,('19:40','19:55')
 ,('19:45','20:00')
 ,('19:50','20:05')
 ,('19:55','20:10')
 ,('20:00','20:15')
 ,('20:05','20:20')
 ,('20:10','20:25')
 ,('20:15','20:30')
 ,('20:20','20:35')
 ,('20:25','20:40')
 ,('20:30','20:45')
 ,('20:35','20:50')
 ,('20:40','20:55')
 ,('20:45','21:00')
 ,('20:50','21:05')
 ,('20:55','21:10')
 ,('21:00','21:15')
 ,('21:05','21:20')
 ,('21:10','21:25')
 ,('21:15','21:30')
 ,('21:20','21:35')
 ,('21:25','21:40')
 ,('21:30','21:45')
 ,('21:35','21:50')
 ,('21:40','21:55')
 ,('21:45','22:00')
 ,('21:50','22:05')
 ,('21:55','22:10')
 ,('21:00','22:15')
 ,('22:05','22:20')
 ,('22:10','22:25')
 ,('22:15','22:30')
 ,('22:20','22:35')
 ,('22:25','22:40')
 ,('22:30','22:45')
 ,('22:35','22:50')
 ,('22:40','22:55')
 ,('22:45','23:00')
 ,('22:50','23:05')
 ,('22:55','23:10')
 ,('23:00','23:15')
 ,('23:05','23:20')
 ,('23:10','23:25')
 ,('23:15','23:30')
 ,('23:20','23:35')
 ,('23:25','23:40')
 ,('23:30','23:45')
 ,('23:35','23:50')
 ,('23:40','23:55')
 ,('23:45','01:00')";

if ($mysqli->query($sqlTable)) {
    echo "data inserted into table times successfully!<br>";
} else {
	echo "ERROR: Cannot insert into times table. "  . mysqli_error();
	die();
}

*/

?>


<button class = "mybutton" onclick="window.location = 'admin.php';">Back</button>

</html>