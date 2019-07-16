<?php

$DBhost = "mysql:host=localhost;dbname=a&z_gadgets_db";
$DBusername = "root";
$DBpassword = "";

$db = new PDO($DBhost, $DBusername, $DBpassword);

$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$query = 
"INSERT INTO repairs (
'receiptNumber', 
'deviceType', 
'brand', 
'dName', 
'model', 
'colour', 
'IMEI', 
'serial', 
'pin', 
'customerName', 
'customerContact', 
'customerEmail'
)
VALUES (
'$_POST[receiptNumber]',
'phone',
'$_POST[brand]',
'$_POST[dName]',
'$_POST[model]',
'cyan',
'$_POST[IMEI]',
'$_POST[serial]',
'$_POST[pin]',
'$_POST[customerName]',
'$_POST[customerContact]',
'$_POST[customerEmail]'
)";

$statement = $db -> prepare($query);

$statement -> execute();

$statement -> closeCursor();
