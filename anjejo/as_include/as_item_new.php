<?php include AS_THEME."as_header.php"; 
	$database = new As_Dbconn();
	$as_type_query = "SELECT * FROM as_type ORDER BY type_title ASC";			
	$results = $database->get_results($as_type_query  ); 
	
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
            <div id="contact_form">
			<form role="form" method="post" name="PostItem" action="index.php?action=item_new" 
			enctype="multipart/form-data" >
                <label for="type">Choose a Type:</label>
				<select name="type" style="padding-left:20px;" required  class="input_field">
					<option value="" > - Choose a Type - </option>
					<?php
						foreach( $results as $row ) { ?>
							<option value="<?php echo $row['typeid'] ?>">  <?php echo $row['type_title'] ?></option>
					<?php } ?>
				</select>
				
				<label for="filename">Item Image:</label>
				<input name="filename" autocomplete="off" type="file" accept="image/*" class="input_field">
				
				<label for="quantity">Quantity of Items:</label>
				<input type="text" autocomplete="off" name="quantity" required  class="input_field">
				
				<label for="price">Price Per Item:</label>
				<input type="text" autocomplete="off" name="price" required  class="input_field">
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="AddItem" value="Save and Add">
				<input type="submit" class="submit_btn" name="AddClose" value="Save and Close">
				</form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
