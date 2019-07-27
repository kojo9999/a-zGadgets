<?php
if(isset($_POST['submit'])) {
    
    include 'connection.includes.php';

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