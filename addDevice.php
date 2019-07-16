<?php

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
        <form action="/includes/addDevDB.php" method="post">
        	<div class="row">
                <div class="col">
                    <div class="dvcEntry">
                        <input type="text" name="brand" placeholder="Device Brand">
                        <br>
                        <input type="text" name="dName" placeholder="Device Name">
                        <br>
                        <input type="text" name="model" placeholder="Device Model">
                        <br><br>
                        <input type="text" name="serial" placeholder="Device Serial No.">
                        <br>
                        <input type="text" name="IMEI" placeholder="Device IMEI">
                        <br>
                        <input type="text" name="pin" placeholder="Device PIN">
                        <br>
                        
                    </div>
                </div>
                <div class="col">
                    <div class="dvcEntry">
                        <input type="text" name="customerName" placeholder="Customer Name">
                        <br>
                        <input type="text" name="customerContact" placeholder="Customer Contact">
                        <br>
                        <input type="text" name="customerEmail" placeholder="Customer Email">
                    </div>
                </div>
                <div class="col" style="float:right;">
                    <div class="dvcEntry">
                        <input type="text" name="date" placeholder=<?php echo '"' . date('Y-m-d') . '"'; ?> readonly>
                        <br>
                        <input type="text" name="receiptNumber" placeholder="Receipt No.">
                    </div>
                </div>
            </div>
            <input type="submit" value="Add Device">
        </form>
    </div>
</body>
</html>
