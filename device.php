<?php
    include 'includes/connection.includes.php';
    include 'header.php';

    $link = "$_SERVER[REQUEST_URI]";
    $linkExp = explode('/', $link);
    $dvcID = end($linkExp);
    
    $query = "SELECT * FROM repairs WHERE mainIndex = " . $dvcID;
   
    $statement = $db -> prepare($query);
    $statement -> execute();
    $dvcInfo = $statement -> fetchAll();
    $statement -> closeCursor();

    if ($dvcInfo == NULL) {
        echo "not found";
    } else {
        $dvcInfo = $dvcInfo[0];
    }

    $currententry = $dvcInfo[0];
    //$_POST['currententry'] = $currententry;
?>

<div>
    <div>

    </div>
	<div class="row">
        <div class="col">
            <div class="dvcEntry">
                <?php echo "<p>Device Type : " . $dvcInfo['deviceType'] . "</p>"; ?>
                <br>
                <?php echo "<p>Brand: " . $dvcInfo['brand'] . "</p>"; ?>
                <br>
                <?php echo "<p>Name: " . $dvcInfo['dName'] . "</p>"; ?>
                <br>
                <?php echo "<p>Model: " . $dvcInfo['model'] . "</p>"; ?>
                <br>
                <br>
                
                <br>
                
            </div>
        </div>
        <div class="col">
            <div class="dvcEntry">
                <?php echo "<p>Customer: " . $dvcInfo['customerName'] . "</p>"; ?>
                <br>
                <?php echo "<p>Telephone: " . $dvcInfo['customerContact'] . "</p>"; ?>
                <br>
                <?php echo "<p>Email: " . $dvcInfo['customerEmail'] . "</p>"; ?>
                <br>
                <?php echo "<p>Colour: " . $dvcInfo['colour'] . "</p>"; ?>
                <br>
                <?php echo "<p>S/N: " . $dvcInfo['serial'] . "</p>"; ?>
                <br>
                <?php echo "<p>IMEI: " . $dvcInfo['IMEI'] . "</p>"; ?>
                <br>

                <?php echo "<p>Passcode: " . $dvcInfo['pin'] . "</p>"; ?>
            </div>
        </div>
        <div class="col" style="float:right;">
            <div class="dvcEntry">
                <?php echo "<p>Created: " . $dvcInfo['dateCreated'] . "</p>"; ?>
                <br>
                <?php echo "<p>Created: " . $dvcInfo['dateAdded'] . "</p>"; ?>
                <br>
                <?php echo "<p>Receipt No.: " . $dvcInfo['receiptNumber'] . "</p>"; ?>
                <br>
                <br>
                <?php echo "<p>Status: " . $dvcInfo['state'] . "</p>"; ?>
                <form action="/includes/updateStatus.php" method="post" >
                    <?php
                        echo "<input type='hidden' name='currententry' readonly='TRUE' value=".$currententry.">";

                        if ($dvcInfo['state'] == 1 || $dvcInfo['state'] == 2 || $dvcInfo['state'] == 3) {
                    ?>
                    <style type="text/css">
                        #donebtn{display:none;}
                        #nodonebtn{display:none;}
                        #collbtn{display:none;}
                    </style>
                    <?php
                    } else {
                        ?>
                        <style type="text/css">
                            #reopbtn{display:none;}
                        </style>
                    <?php
                    }

                    ?>
                    <br>
                    <input id="donebtn" type="submit" value="Repair Done" name="done">
                    <input id="nodonebtn" type="submit" value="No Repair" name="notDone">
                    <br>
                    <br>
                    <input id="collbtn" type="submit" value="Device Collected" name="collected">
                    <input id="reopbtn" type="submit" value="Re-open repair" name="reOpen">
                </form>
                
            </div>
        </div>
    </div>
    <div class="events">
        <?php
            $query = "SELECT * FROM comments WHERE mainIndex = " . $currententry;
            $statement = $db -> prepare($query);
            $statement -> execute();
            $comments = $statement -> fetchAll();
            $statement -> closeCursor();

            //next load all the comments
            $eventNum = 1;
            foreach ($comments as $comment) {
                echo "<div class='event'>
                <br>".//comment id needs to be replaced with a timestamp
                "<h5>Created: ".$comment['dateCreated']."</h4>".
                "<p>".$comment['comment']."</p>".
                "</div>";
                $eventNum ++;
            }
        ?>
        <div class="event">
            <form action="/includes/addComDB.php" method="post" >
                <h3>Add an event</h3>
                <br>
                <?php
                    echo "<input type='hidden' name='currententry' readonly='TRUE' value=".$currententry.">";
                ?>
                <input type="text" name="comment" placeholder="Event Summary">
                <input type="submit" value="Add Event" name="submit">
            </form>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
