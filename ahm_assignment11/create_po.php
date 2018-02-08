<?php

include_once("config.php");

$supplier = $_POST['supplier'];
$shipping =  $_POST['shipping'];
$date =  $_POST['purchasedate'];
$prod =  $_POST['product'];
$desc =  $_POST['desc'];
$qty = $_POST['qty'];
$cost =  $_POST['cost'];

//insert stuff

for ($i=0; $i < count($prod); $i++) { 
	$sql = "INSERT INTO purchase_orders (supplier,shipping_addr, purchase_order_date, 
               product, description, qty, unit_cost) VALUES('$supplier','$shipping','$date', '$prod[$i]', '$desc[$i]', '$qty[$i]', $cost[$i])";
            $retval = mysqli_query($link, $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($link));
            }
            
}


echo "Entered data successfully\n";
echo "<a href='po.php'>Return to the PO page</a>";


// close the connection

$link->close();




?>