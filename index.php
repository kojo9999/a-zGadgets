<?php
    include 'includes/connection.includes.php';
    include 'header.php';


    $query = "SELECT * FROM repairs ORDER BY dateCreated DESC";
   
    $statement = $db -> prepare($query);
    $statement -> execute();
    $repairs = $statement -> fetchAll();
    $statement -> closeCursor();
?>

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
                <th>Name</th>
                <th>Contact</th>
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
                    echo "<td>" . $repair["customerName"] . "</td>";
                    echo "<td>" . $repair["customerContact"] . "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>  
</div>

<?php
include 'footer.php';
