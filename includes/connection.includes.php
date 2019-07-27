<?php

$DBhost = "mysql:host=localhost;dbname=a&z_gadgets_db";
$DBusername = "root";
$DBpassword = "";

$db = new PDO($DBhost, $DBusername, $DBpassword);

$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);