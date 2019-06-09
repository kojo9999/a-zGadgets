<?php
    // for CA2 change marvel to your database name
    $DBhost = "mysql:host=localhost;dbname=a&zgadgets";
    $DBusername = "root";
    $DBpassword = "";
    // connect to the database
    $db = new PDO($DBhost, $DBusername, $DBpassword);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $link = "$_SERVER[REQUEST_URI]";
    $linkExp = explode('/', $link);
    $dvcID = end($linkExp);
    
    $query = "SELECT * FROM repairs WHERE mainIndex = " . $dvcID;
   
    $statement = $db -> prepare($query);
    
    $statement -> execute();

    $dvcInfo = $statement -> fetchAll();

    $statement -> closeCursor();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/index.css">
    <title>A&Z Gadgets</title>
</head>
<body>
	<p>
		<?php //echo var_dump($dvcID); ?>
		<?php echo var_dump($dvcInfo); ?>
	</p>
</body>
</html>