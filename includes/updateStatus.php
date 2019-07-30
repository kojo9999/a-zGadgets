<?php
include 'connection.includes.php';

if(isset($_POST['done'])) {
    $query = "UPDATE `repairs` SET `state` = '1' WHERE `repairs`.`mainIndex` = ".$_POST['currententry'];
} elseif (isset($_POST['notDone'])) {
    $query = "UPDATE `repairs` SET `state` = '2' WHERE `repairs`.`mainIndex` = ".$_POST['currententry'];
}

$statement = $db -> prepare($query);
$statement -> execute();
$statement -> closeCursor();

$redirect = "Location: ../device.php/" . $_POST['currententry']; //navigate to mainIndex of the entry
header($redirect); //redirect to that new entry page