<?php include('config.php');
$vendor_id = $_POST['vendor_id'];
$vendor_name = $_POST['vendor_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zipcode = $_POST['zipcode'];
if(!$link){
    	echo "cannot connect to DB";
}else{
    // echo "$vendor_id $vender_name $address $email $phone $zipcode ";
	$res = $link->query("SELECT * FROM Supplier WHERE Vendor_name = '$vendor_name'");
    if(mysqli_num_rows($res) >= 1){
        echo "Name already exist !";
    }else {
    	if($link->query("UPDATE Supplier SET Vendor_name = '$vendor_name', Address='$address', Email='$email', Phone_number='$phone', Zipcode='$zipcode' WHERE Vendor_id = $vendor_id")){
   //          echo "Sucessfully updated";
			// echo "<a href='supplier_page.php'>Return to the Supplier page</a>";
            header("Location: supplier_page.php");
            exit;
        }else{
            echo "failed";
        }
    }
    $link->close();	
}
























 ?>
