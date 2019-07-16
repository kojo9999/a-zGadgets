<?php
    include 'includes/connection.includes.php';
    // connect to the database
    $db = new PDO($DBhost, $DBusername, $DBpassword);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT * FROM repairs";
   
    $statement = $db -> prepare($query);
    
    $statement -> execute();

    $repairs = $statement -> fetchAll();

    $statement -> closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/style/index.css">
        <title>A&Z Gadgets</title>
    </head>
    <body>
        <div>
            <h3><a href="addDevice.php/">Add Device</a></h3>
        </div>
        <div id="tableDiv" style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>Date Crated</th>
                        <th>Repair Number</th>
                        <th>Device Type</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Colour</th>
                        <th>IMEI</th>
                        <th>Fault</th>
                        <th>Cost</th>
                        <th>Due</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Completed on</th>
                        <th>Collected on</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($repairs as $repair) 
                        {
                            echo "<tr>";

                            echo "<td><a href='device.php/" . $repair["mainIndex"] . "'>" . $repair["dateCreated"] . "</a></td>";
                            echo "<td>" . $repair["receiptNumber"] . "</td>";
                            echo "<td>" . $repair["deviceType"] . "</td>";
                            echo "<td>" . $repair["brand"] . "</td>";
                            echo "<td>" . $repair["model"] . "</td>";
                            echo "<td>" . $repair["colour"] . "</td>";
                            echo "<td>" . $repair["IMEI"] . "</td>";
                            echo "<td>" . $repair["fault"] . "</td>";
                            echo "<td>" . $repair["cost"] . "</td>";
                            echo "<td>" . $repair["due"] . "</td>";
                            echo "<td>" . $repair["customerName"] . "</td>";
                            echo "<td>" . $repair["customerContact"] . "</td>";
                            echo "<td>" . $repair["dateComplete"] . "</td>";
                            echo "<td>" . $repair["collectionDate"] . "</td>";

                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>  
        </div>
    </body>
</html>