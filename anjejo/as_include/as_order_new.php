 <?php $database = new As_Dbconn();
	$as_type_query = "SELECT * FROM as_type ORDER BY type_title ASC";			
	$results = $database->get_results($as_type_query  ); 
	
	$as_customer_query = "SELECT * FROM as_customer ORDER BY customer_fullname ASC";
	$results_i = $database->get_results( $as_customer_query );
	include AS_THEME."as_header.php"; 
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2>Add an Item</h2> 
			<?php if ($database->as_num_rows( $as_type_query)<=0) { ?>
				<h2 style="color:#000">You need to fix the following errors before you add an Item</h2>
				<ul>
				<h2><li><a href="index.php?action=type_new">No Type found! Add a Type</a></li><h2>
				<?php if ($database->as_num_rows( $as_customer_query)<=0) { ?>
				<h2><li><a href="index.php?action=customer_new">No Customer found! Add a Customer</a></li><h2>
				<?php } ?>
				</ul>
			<?php } else if ($database->as_num_rows( $as_customer_query)<=0) { ?>
				<h2 style="color:#000">You need to fix the following errors before you add an Item</h2>
				<ul>
				<h2><li><a href="index.php?action=customer_new">No Customer found! Add a Customer</a></li><h2>
				</ul>
			<?php } else { ?>
            <div id="contact_form">
			<form role="form" method="post" name="PostItem" action="index.php?action=item_new" 
			enctype="multipart/form-data" >
                <label for="type">Choose a Type:</label>
				<select name="type" style="padding-left:20px;" required >
					<option value="" > - Choose a Type - </option>
					<?php
						foreach( $results as $row ) { ?>
							<option value="<?php echo $row['typeid'] ?>">  <?php echo $row['type_title'] ?></option>
					<?php } ?>
					</select>
				
				<label for="customer">Choose a Customer:</label>
				<select name="customer" style="padding-left:20px;" required >
					<option value="" > - Choose a Customer - </option>
					<?php
						foreach( $results_i as $row ) { ?>
							<option value="<?php echo $row['customerid'] ?>">  <?php echo $row['customer_fullname'] ?></option>
					<?php } ?>
				</select>
				
				<label for="filename">Item Image:</label>
				<input name="filename" autocomplete="off" type="file" accept="image/*">
				
				<label for="unit">Unit of Item:</label>
					<td><input type="text" autocomplete="off" name="unit" required >
				
				<label for="quantity">Quantity of Items:</label>
				<input type="text" autocomplete="off" name="quantity" required >
				
				<label for="price">Price Per Unit:</label>
				<input type="text" autocomplete="off" name="price" required >
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="AddItem" value="Save and Add Another">
				<input type="submit" class="submit_btn" name="AddClose" value="Save and Close">
				</form>
				</div>
				<?php } ?>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
