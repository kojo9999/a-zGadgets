<?php
include 'connection.includes.php';

if(isset($_POST['done'])) {
    $query = "UPDATE `repairs` SET `state` = '1' WHERE `repairs`.`mainIndex` = ".$_POST['currententry'];
    $query2 ="INSERT INTO `comments` (
        `mainIndex`, 
        `commentId`, 
        `comment`,
        `dateCreated`
    ) VALUES ('".
        $_POST['currententry']."',
        NULL,
        'Device repair finished and ready for collection.',
        current_timestamp()".
    ");";
    $statement = $db -> prepare($query2);
    $statement -> execute();
} elseif (isset($_POST['notDone'])) {
    $query = "UPDATE `repairs` SET `state` = '2' WHERE `repairs`.`mainIndex` = ".$_POST['currententry'];
    $query2 ="INSERT INTO `comments` (
        `mainIndex`, 
        `commentId`, 
        `comment`,
        `dateCreated`
    ) VALUES ('".
        $_POST['currententry']."',
        NULL,
        'Repair NOT FINISHED. Ready for collection',
        current_timestamp()".
    ");";
    $statement = $db -> prepare($query2);
    $statement -> execute();
}

if (isset($_POST['collected'])) {
    $query = "UPDATE `repairs` SET `state` = '3' WHERE `repairs`.`mainIndex` = ".$_POST['currententry'];
    $query2 ="INSERT INTO `comments` (
        `mainIndex`, 
        `commentId`, 
        `comment`,
        `dateCreated`
    ) VALUES ('".
        $_POST['currententry']."',
        NULL,
        'Device Collected By Customer',
        current_timestamp()".
    ");";
    $statement = $db -> prepare($query2);
    $statement -> execute();
}

if (isset($_POST['reOpen'])) {
    $query = "UPDATE `repairs` SET `state` = '0' WHERE `repairs`.`mainIndex` = ".$_POST['currententry'];
    $query2 ="INSERT INTO `comments` (
        `mainIndex`, 
        `commentId`, 
        `comment`,
        `dateCreated`
    ) VALUES ('".
        $_POST['currententry']."',
        NULL,
        'Repair re-opened',
        current_timestamp()".
    ");";
    
    $statement = $db -> prepare($query2);
    $statement -> execute();
}


$statement = $db -> prepare($query);
$statement -> execute();
$statement -> closeCursor();

$redirect = "Location: ../device.php/" . $_POST['currententry']; //navigate to mainIndex of the entry
header($redirect); //redirect to that new entry page