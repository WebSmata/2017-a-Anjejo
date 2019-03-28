<?php 
	$itemid = $results['item'];
	$as_db_query = "SELECT * FROM as_item WHERE itemid = '$itemid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
	list( $itemid, $item_type, $item_quantity, $item_postedby, $item_posted, $item_price, $item_img, $item_updated, $item_updatedby) = $database->get_row( $as_db_query );
}
include AS_THEME."as_header.php"; ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
            <div class="services_section horizon_divider">
				<table>
				<tr><td>
				<center><img src="<?php echo "as_media/".$item_img ?>" class="iconic_big_i"/></center>
				</td><td>
				<h3>Item: <?php echo as_type_item($item_type) ?></h3>
				<h3>Quantity: <?php echo $item_quantity ?></h3>
				<h3>Price: Kshs. <?php echo $item_price.' each' ?></h3>
				<h3><a href="index.php?action=item_delete&&as_itemid=<?php echo $itemid ?>" onclick="return confirm('Are you sure you want to delete this item from the system? \nBe careful, this action can not be reversed.')">Delete this Item</a></h3>
				</td></tr>
				</table>
				 
			</div>
			<div class="services_section horizon_divider">
			  <div id="contact_form">
				<form role="form" method="post" name="PlaceOrder" 
				 action="index.php?action=item_view&&as_itemid=<?php echo $itemid ?>" >
				<input type="hidden" name="itemid" value="<?php echo $itemid ?>" />
				<input type="hidden" name="itemprice" value="<?php echo $item_price ?>" />
				<input type="hidden" name="itemtitle" value="<?php echo as_type_item($item_type) ?>" />
				<h2>Place an Order for this Item</h2> 
				<label for="quantity">Choose Quantity:</label>
				<input type="text" autocomplete="off" name="quantity" value="<?php echo $item_quantity ?>" required class="input_field" >
				
				<label for="fullname">Customer's Full Name</label>
				<input type="text" autocomplete="off" name="fullname" required class="input_field" >
				
				<label for="mobile">Customer's Mobile No.</label>
				<input type="text" autocomplete="off" name="mobile" required class="input_field" >
				
				<label for="email">Customer's Email</label>
				<input type="text" autocomplete="off" name="email" required class="input_field" >
				
				<label for="address">Physical Address:</label>
				<textarea name="address" autocomplete="off" ></textarea>
				
				<label for="content">Additional Notes (Options):</label>
				<textarea name="content" autocomplete="off" ></textarea>
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="OrderNow" value="Order this Item">
				</form>
				</div>
				<div class="cleaner h40"></div>
            </div>
		</div>
		 <?php include AS_THEME."as_sidebar.php" ?>
        <div class="cleaner"></div>
    </div>
</div>
<?php include AS_THEME."as_footer.php" ?>
    
