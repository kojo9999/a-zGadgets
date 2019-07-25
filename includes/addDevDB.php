<?php

$DBhost = "mysql:host=localhost;dbname=a&z_gadgets_db";
$DBusername = "root";
$DBpassword = "";

$db = new PDO($DBhost, $DBusername, $DBpassword);

$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$query = "INSERT INTO `repairs` (
	`mainIndex`, 
	`dateCreated`, 
	`receiptNumber`, 
	`deviceType`, 
	`brand`, 
	`dName`, 
	`model`, 
	`colour`, 
	`IMEI`, 
	`serial`, 
	`pin`, 
	`fault`, 
	`cost`, 
	`paid`, 
	`due`, 
	`customerName`, 
	`customerContact`, 
	`customerEmail`, 
	`dateComplete`, 
	`completeBy`, 
	`collectionDate`, 
	`notified`, 
	`comments`
) VALUES (
	NULL, 
	current_timestamp()," . //timestamp is auto gened
	"'".$_POST['receiptNumber']."',". //rec no
	"'phone',". //dev type
	"'".$_POST['brand']."',". //brand
	"'".$_POST['dName']."',". //dev name
	"'".$_POST['model']."',". //model no
	"'black',". //colour
	"'".$_POST['IMEI']."',". //IMEI
	"'".$_POST['serial']."',". //serial no
	"'".$_POST['pin']."',". //pin 
	"'',". //fault
	"'0',". //cost
	"'0',". //paid
	"'0',". //due
	"'".$_POST['customerName']."',". //cust name
	"'".$_POST['customerContact']."',". //cust phone
	"'".$_POST['customerEmail']."',". //cust email
	"NULL,". //date complete
	"NULL,". //who completed
	"'',". //collection date
	"'',". //notified
	"'this is a test'". //comments
")";

$statement = $db -> prepare($query);

$statement -> execute(); //executes sql query to add entry

//second query to get the entry number of most recent entry
$query2 ="
SELECT MAX(mainIndex)
  FROM repairs
 ";

 $statement = $db -> prepare($query2);

 $statement -> execute();
$num = $statement -> fetchAll();


$statement -> closeCursor();

$redirect = "Location: ../device.php/" . $num[0][0]; //navigate to mainIndex of the entry
header($redirect); //redirect to that new entry page