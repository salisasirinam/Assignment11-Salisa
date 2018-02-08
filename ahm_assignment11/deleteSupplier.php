<?php include('config.php'); 

$id = $_POST['Vendor_id'];
$mysql ="DELETE FROM Supplier WHERE Vendor_id = $id";
if($link->query($mysql)){
    echo "1";
}else{
    echo "0";
}

$link->close();



?>