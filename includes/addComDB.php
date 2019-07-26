<?php
if(isset($_POST['submit'])) {
    $DBhost = "mysql:host=localhost;dbname=a&z_gadgets_db";
    $DBusername = "root";
    $DBpassword = "";
    $db = new PDO($DBhost, $DBusername, $DBpassword);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `comments` (
        `mainIndex`, 
        `commentId`, 
        `comment`
    ) VALUES ('".
        $_POST['currententry']."',
        NULL,'".
        $_POST['comment']."'
    );";

    $statement = $db -> prepare($query);
    $statement -> execute();
}

$redirect = "Location: ../device.php/" . $_POST['currententry']; //navigate to mainIndex of the entry
header($redirect); //redirect to that new entry page