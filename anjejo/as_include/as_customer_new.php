<?php include AS_THEME."as_header.php"; ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2>Add a Customer</h2>
            <div id="contact_form">
			<form role="form" method="post" name="PostCustomer" action="index.php?action=customer_new" enctype="multipart/form-data" >
                <label for="sitename">Full Name:</label>
				<input type="text" autocomplete="off" name="fullname" class="input_field">
				
				<label for="sitename">Customer Avatar:</label>
				<input name="avatar" autocomplete="off" type="file" accept="image/*" class="input_field">
				
				<label for="sitename">Email Address:</label>
				<input type="text" autocomplete="off" name="email" class="input_field">
				
				<label for="sitename">Mobile (Optional):</label>
				<input type="text" autocomplete="off" name="mobile" class="input_field">
				
				<label for="sitename">Physical Address</label>
				<input type="text" autocomplete="off" name="address" class="input_field">
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="AddSupp" value="Save and Add">
				<input type="submit" class="submit_btn" name="AddClose" value="Save and Close">
				</form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
