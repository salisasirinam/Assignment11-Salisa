<?php include_once('header.php'); ?>

<?php include ('config.php');?>

<?php include ('edit_supplier.php');?>

<style type="text/css">
	.delete_supplier{
		cursor: pointer;
	}
	.edit_supplier{
		cursor: pointer;
	}
</style>
<div class="container">
<div class="jumbotron mt-4">
	<h4>Supplier Page</h4>
	<hr class="my-4">
	<h5>1. General Information</h5>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Supplier_name</th>
	      <th scope="col">Address</th>
	      <th scope="col">Email</th>
	      <th scope="col">Phone_number</th>
	      <th scope="col">Zipcode</th>
	      <th scope="col">Edit</th>
	       <th scope="col">Delete</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	  <?php 
			$sql = 'SELECT * from Supplier order by Vendor_id ASC';
			$retval = mysqli_query($link, $sql);
			while($row = mysqli_fetch_array($retval)) {
				echo "<tr>";
				$id = $row["Vendor_id"];
				$vendor_name = $row["Vendor_name"];
				$address = $row["Address"];
				$email = $row["Email"];
				$phone_number = $row["Phone_number"];
				$zipcode = $row["Zipcode"];

		  		// echo "<th scope='row'>{$row['Vendor_id']}</th>";
		  		echo "<td>{$vendor_name}</td>";
		  		echo "<td>{$address}</td>";
		  		echo "<td>{$email}</td>";
		  		echo "<td>{$phone_number}</td>";
		  		echo "<td>{$zipcode}</td>";
		  		echo "<td><i id='$id' vendor_name='$vendor_name' address='$address' email='$email' phone_number='$phone_number' zipcode='$zipcode' class=' edit_supplier fa fa-pencil fa-1x'></i></td>";
		  		echo "<td><i id='$id' class='delete_supplier fa fa-trash' aria-hidden='true'></i> </td>";

		  	    echo "</tr>";
			}
			mysqli_close($link);
	  ?>
	  </tbody>
	</table>
</div>

<?php include_once('footer.php'); ?>

<script type="text/javascript">
$(function(){
	$(".delete_supplier").on("click", function(){
		var vendor_id = $(this).attr("id");
		$.ajax({
	        type: "POST",
	        url: "deleteSupplier.php", /* PAGE WHERE WE WILL PASS THE DATA */
	        data: {
	        	'Vendor_id': vendor_id
	        }, /* THE DATA WE WILL BE PASSING */
	        success: function(result){ /* GET THE TO BE RETURNED DATA */
	          if(result == 1){
	          	location.reload();
	          }else{
	          	alert("Delete failed!");
	          }
	        }
	    });
	});

	$(".edit_supplier").on("click",function(){
		$("#vendor_id").val($(this).attr("id"));
		$("#vendor_name").val($(this).attr("vendor_name"));
		$("#address").val($(this).attr("address"));
		$("#email").val($(this).attr("email"));
		$("#phone").val($(this).attr("phone_number"));
		$("#zipcode").val($(this).attr("zipcode"));
		$("#edit_supplier_modal").modal("show");
	});

})


</script>






































	