<h3>System User Profile</h3>
<div id="form-block">
<form method="POST" action="processes/process.customer.php?action=update">
        <div id="form-block-half">
        <input type="text" id="cust_fname" class="text" name="cust_id" value="<?php echo $customer->get_cust_id($id);?>">
            <label for="cust_fname">First Name: </label>
			      <input type="text" id="cust_fname" class="text" name="cust_fname" value="<?php echo $customer->get_cust_fname($id);?>" placeholder="Enter First Name..." required>
            <br><br>
            <label for="cust_mname">Middle Name: </label>
		        <input type="text" id="cust_mname" class="text" name="cust_mname" value="<?php echo $customer->get_cust_mname($id);?>" placeholder="Enter Middle Name..." required>
            <br><br>
            <label for="cust_lname">Last Name: </label>
		        <input type="text" id="cust_lname" class="text" name="cust_lname" value="<?php echo $customer->get_cust_lname($id);?>" placeholder="Enter Last Name..." required>
            <br><br>
            <label for="cust_email">Email Address: </label>
		        <input type="text" id="cust_email" class="text" name="cust_email" value="<?php echo $customer->get_cust_email($id);?>" placeholder="Enter Email Address..." required>
            <br><br>
            <label for="cust_address">Home Address: </label>
		        <input type="text" id="cust_address" class="text" name="cust_address" value="<?php echo $customer->get_cust_address($id);?>" placeholder="Enter Home Address..." required>
            <br><br>
            <label for="cust_cnumber">Contact No.: </label>
		        <input type="text" id="cust_cnumber" class="text" name="cust_cnumber" value="<?php echo $customer->get_cust_cnumber($id);?>" placeholder="Enter Contact No. ..." required>
        </div>
        <div id="button-block">
        <input type="submit" value="Update">
        </div>
        </form>
</div>

