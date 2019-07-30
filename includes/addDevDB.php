<?php

include 'connection.includes.php';

$broughtIn = $_POST['dateAdded'];

if (1 == 0) {
	$broughtIn = date('m/d/Y h:i:s a', time());
} else {
	$broughtIn = "current_timestamp()";
}

$query1 = "INSERT INTO `repairs` (
	`mainIndex`,
	`dateCreated`,
	`dateAdded`,
	`receiptNumber`,
	`deviceType`,
	`brand`,
	`dName`,
	`model`,
	`colour`,
	`IMEI`,
	`serial`,
	`pin`,
	`customerName`, 
	`customerContact`, 
	`customerEmail`
) VALUES (
	NULL, 
	current_timestamp()," . //timestamp is auto gened
	"current_timestamp(),".
	"'".$_POST['receiptNumber']."',". //rec no
	"'phone',". //dev type
	"'".$_POST['brand']."',". //brand
	"'".$_POST['dName']."',". //dev name
	"'".$_POST['model']."',". //model no
	"'".$_POST['colour']."',". //colour
	"'".$_POST['IMEI']."',". //IMEI
	"'".$_POST['serial']."',". //serial no
	"'".$_POST['pin']."',". //pin 
	"'".$_POST['customerName']."',". //cust name
	"'".$_POST['customerContact']."',". //cust phone
	"'".$_POST['customerEmail']."'". //cust email
")";

$statement = $db -> prepare($query1);

$statement -> execute(); //executes sql query to add entry

//second query to get the entry number of most recent entry
$query2 ="
SELECT MAX(mainIndex)
  FROM repairs
 ";

$statement = $db -> prepare($query2);

$statement -> execute();
$num = $statement -> fetchAll();
$num = $num[0][0];

$query3 = "INSERT INTO `comments` (
        `mainIndex`, 
        `commentId`, 
        `comment`
    ) VALUES ('".
        $num."',
        NULL,'".
        $_POST['fault']."'
    );";

$statement = $db -> prepare($query3);

$statement -> execute();


$statement -> closeCursor();

$redirect = "Location: ../device.php/" . $num; //navigate to mainIndex of the entry
header($redirect); //redirect to that new entry page