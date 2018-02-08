<?php include('config.php');

$venderName = $_POST['vendor_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zipcode = $_POST['zipcode'];
// $cost = $_POST['cost'];
if(!$link){
    	echo "cannot connect to DB";
}else{
	$res = $link->query("SELECT * FROM Supplier WHERE Vendor_name = '$venderName'");
    if(mysqli_num_rows($res)>=1){
        echo "name already exist !";
    }else {
    	if($link->query("INSERT INTO Supplier(Vendor_name, Address,Email,Phone_number,Zipcode) VALUES('$venderName', '$address','$email','$phone','$zipcode')")){
            echo "sucessfully inserted";
			echo "<a href='po.php'>Return to the PO page</a>";
            // header("Location: http://localhost/acc/expense.php");
            // exit;
        }else{
            echo "failed";
        }
    }
    $link->close();	
}
























 ?>
