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
    $dvcInfo = $dvcInfo[0];

    $statement -> closeCursor();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/style/dvc_view_style.css">
    <title>A&Z Gadgets</title>
</head>
<body>
    <div>
        <div>

        </div>
    	<div class="row">
            <div class="col">
                <div class="dvcEntry">
                    <?php echo "<p>Brand: " . $dvcInfo['brand'] . "</p>"; ?><br>
                    <?php echo "<p>Name: " . $dvcInfo['dName'] . "</p>"; ?><br>
                    <?php echo "<p>Model: " . $dvcInfo['model'] . "</p>"; ?><br><br>
                    <?php echo "<p>S/N: " . $dvcInfo['IMEI'] . "</p>"; ?><br>
                    <?php echo "<p>IMEI: " . $dvcInfo['IMEI'] . "</p>"; ?><br>
                    <?php echo "<p>Passcode: " . $dvcInfo['pin'] . "</p>"; ?><br>
                    <?php echo "<p>Customer: " . $dvcInfo['customerName'] . "</p>"; ?><br>
                    <?php echo "<p>Telephone: " . $dvcInfo['customerContact'] . "</p>"; ?><br>
                    <?php echo "<p>Email: " . $dvcInfo['customerContact'] . "</p>"; ?>
                </div>
            </div>
            <div class="col">
                
            </div>
            <div class="col" style="float:right;">
                <div class="dvcEntry">
                    <?php echo "<p>Created: " . $dvcInfo['dateCreated'] . "</p>"; ?><br>
                    <?php echo "<p>Receipt No.: " . $dvcInfo['receiptNumber'] . "</p>"; ?>
                </div>
            </div>
        </div>
    </div>
    <?php var_dump($dvcInfo); ?>
</body>
</html>
