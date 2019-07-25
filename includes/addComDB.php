<?php
if(isset($_POST['submit'])) {
    $DBhost = "mysql:host=localhost;dbname=a&z_gadgets_db";
    $DBusername = "root";
    $DBpassword = "";
    $db = new PDO($DBhost, $DBusername, $DBpassword);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   /* $query = "INSERT INTO `comments` (
        'mainIndex',
        'commentId',
        'comment'
    ) VALUES (".
        $_POST['currententry'].",".
        "'NULL',".
        $_POST['comment'].
    ")";
    */
    $query = "INSERT INTO `comments` (`mainIndex`, `commentId`, `comment`) VALUES ('".$_POST['currententry']."', NULL, '".$_POST['comment']."');";

    $statement = $db -> prepare($query);
    $statement -> execute();
}
$query2 ="
SELECT MAX(commentId)
  FROM comments
 ";

 $statement = $db -> prepare($query2);

 $statement -> execute();
$num = $statement -> fetchAll();
$num = $num[0][0];

$query3 ="
SELECT * FROM comments ORDER BY commentId DESC LIMIT 1,".$num.";";

 $statement = $db -> prepare($query3);

$statement -> execute();
$dvcent = $statement -> fetchAll();
$dvcent = $dvcent[0][0];
$statement -> closeCursor();

$redirect = "Location: ../device.php/" . $dvcent; //navigate to mainIndex of the entry
//var_dump($_POST);
header($redirect); //redirect to that new entry page