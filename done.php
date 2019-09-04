<?php
    include 'includes/connection.includes.php';
    include 'header.php';


    $query = "SELECT * FROM repairs ORDER BY dateCreated DESC";
   
    $statement = $db -> prepare($query);
    $statement -> execute();
    $repairs = $statement -> fetchAll();
    $statement -> closeCursor();
?>

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
                    if ($repair['state'] == 1) {
                        $rowCol = "#ee82ee"; //device is repaired and ready for collection
                    } elseif ($repair['state'] == 2) {
                        $rowCol = "#DC143C"; //device is not repaired and ready for collection
                    } elseif ($repair['state'] == 3) {
                        $rowCol = "#ADFF2F"; //device has been collected
                    } else {
                        $rowCol = "#ddd"; //device is awaiting repairs or tests
                    }

                    if ($repair['state'] == 3) {
                        echo "<tr style='background-color: ".$rowCol.";'>";

                        echo "<td><a href='../device.php/" . $repair["mainIndex"] . "'>" . $repair["dateCreated"] . "</a></td>";
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
                }
            ?>
        </tbody>
    </table>  
</div>

<?php
include 'footer.php';
