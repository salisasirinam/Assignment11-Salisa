<?php

include_once("config.php");

if(!empty($_POST["supplier"])){

  $supplier = $_POST['supplier'];

  $sql = "SELECT * from Supplier where Vendor_name = '$supplier'";
  $retval = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($retval);
  echo $row['Address'];
}

mysqli_close($link);


?>