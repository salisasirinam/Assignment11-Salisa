<?php include_once('header.php'); ?>

<?php include('config.php'); ?>

<?php include('addSuppliers.php');?>
<div class="container">
	<div class="jumbotron mt-4">
	  <h4>Create Purchase Order</h4>
	  <hr class="my-4">
	  <h5>1. General Information</h5>
	  <form action="create_po.php" method="post">
	  <button id="creater_suppliers" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> +Add new Vender</button>
	  <div class="form-row">
		  <div class="form-group col-md-4">
		    <label for="supplier-select">Choose a supplier</label>
		    <select name="supplier" class="form-control" id="supplier-select">
			<option selected="true" disabled="disabled">Choose Supplier</option>

			<?php 
  				$sql = 'SELECT * from Supplier order by Vendor_id ASC';
   				$retval = mysqli_query($link, $sql);
   				while($row = mysqli_fetch_array($retval)) {
   					echo "<option>{$row['Vendor_name']}</option>";
   				}
  			?>  
		    </select>
		  </div>
		  <div class="form-group col-md-4">
		    <label for="shipping">Shipping Address</label>
		    <textarea name="shipping" class="form-control" id="shipping" rows="3"></textarea>
		  </div>
		  <div class="form-group col-md-4">
		    <label for="purchasedate">Purchase Order Date</label>
		    <input name="purchasedate" type="date" class="form-control" id="purchasedate" placeholder="dd/mm/yy">
		  </div>
	  </div>
	  <hr>
	  <h5>2. Item Details</h5>
	  <div id="ratana">
		  <div class="form-row">
			  <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Product</label>
			    <input name="product[]" type="text" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-7">
			    <label for="exampleFormControlInput1">Description</label>
			    <input name="desc[]" type="text" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-1">
			    <label for="exampleFormControlInput1">QTY</label>
			    <input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Cost/Unit (taka)</label>
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
		  </div>
	  </div>
	  <button id="more" type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
Add more items</button>
	  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Send</button>
	</div>
	<h4>Purchase Order</h4>

	<table class="table table-striped tablesorter" id="purchase_order_table">
  <thead>
    <tr>
      <th scope="col">PID</th>
      <th scope="col">Supplier</th>
      <th scope="col">Purchase Order Date</th>
      <th scope="col">Product</th>
      <th scope="col">Description</th>
      <th scope="col">QTY</th>
      <th scope="col">Cost/Unit (taka)</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  		$sql = 'SELECT * from purchase_orders order by id ASC';
   		$retval = mysqli_query($link, $sql);
   		while($row = mysqli_fetch_array($retval)) {
   			echo "<tr>";
      		echo "<th scope='row'>{$row['id']}</th>";
      		echo "<td>{$row['supplier']}</td>";
      		echo "<td>{$row['purchase_order_date']}</td>";
      		echo "<td>{$row['product']}</td>";
      		echo "<td>{$row['description']}</td>";
      		echo "<td>{$row['qty']}</td>";
      	    echo "<td>{$row['unit_cost']}</td>";
      	    echo "</tr>";
   		}
   		mysqli_close($link);
  ?>
  </tbody>
</table>
</div>

<?php include_once('footer.php'); ?>

<script type="text/javascript">
	$(document).ready(function() { 
        $("#purchase_order_table").tablesorter(); 
    }); 
    

</script>
