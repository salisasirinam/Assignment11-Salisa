<?php include('config.php'); ?>


<div class="modal fade" id="edit_supplier_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<form action="edit_supplier_controller.php" method="post" autocomplete="on">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit vendor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="vendor_id" name="vendor_id">
        <div class="form-group">
            <label for="usr">Vendor Name</label>
            <input type="text" class="form-control" id="vendor_name" name="vendor_name">
        </div>
        <div class="form-group">
            <label for="usr">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="usr">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="usr">Zipcode:</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
 </form>
 </div>
