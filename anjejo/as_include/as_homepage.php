<?php include AS_THEME."as_header.php";
	$database = new As_Dbconn();			
?>
	<div id="tooplate_main">
		<div id="tooplate_content">
       
		<div class="services_section horizon_divider">
			<?php 
				$as_types = "SELECT * FROM as_type ORDER BY typeid DESC LIMIT 5";
				$results_i = $database->get_results( $as_types );
				?>
			<h2><?php echo $database->as_num_rows( $as_types ) ?> Types</h2>
			<div class="ss_left">
				<img src="as_themes/images/sitemap.png" alt="Image" />
			</div>
                    
			<div class="ss_right">
			<ul class="tooplate_list"><?php foreach( $results_i as $row ) { ?>
				<li><?php echo $row['type_title'] ?></li>			
			<?php } ?></ul>
			<div class="button"><a href="index.php?action=type_new" class="more float_r">Add a Type</a></div>
			</div>
			<div class="cleaner"></div>
		</div>
		
		<div class="services_section horizon_divider">
			<?php 
				$as_customers = "SELECT * FROM as_customer ORDER BY customerid DESC LIMIT 5";
				$results_ii = $database->get_results( $as_customers );
			?>
			<h2><?php echo $database->as_num_rows( $as_customers ) ?> Customers</h2>
			<div class="ss_left">
				<img src="as_themes/images/sitemap.png" alt="Image" />
			</div>
                    
			<div class="ss_right">
			<ul class="tooplate_list"><?php foreach( $results_ii as $row ) { ?>
				<li><?php echo $row['customer_name'].' '.$row['customer_mobile'].' from '.$row['customer_address']?></li>			
			<?php } ?></ul>
			</div>
			<div class="cleaner"></div>
		</div>
		
		<div class="services_section horizon_divider">
			<?php 
				$as_items = "SELECT * FROM as_item ORDER BY itemid DESC LIMIT 5";
				$results_iii = $database->get_results( $as_items );
			?>
			<h2><?php echo $database->as_num_rows( $as_items ) ?> Items</h2>
			<div class="ss_left">
				<img src="as_themes/images/sitemap.png" alt="Image" />
			</div>
                    
			<div class="ss_right">
			<ul class="tooplate_list"><?php foreach( $results_iii as $row ) { ?>
				<li><?php echo $row['item_quantity']." of ".as_type_item($row['item_type']).", @ ".$row['item_price']."/= " ?></li>			
			<?php } ?></ul>
			<div class="button"><a href="index.php?action=item_new" class="more float_r">Add an Item</a></div>
			</div>
			<div class="cleaner"></div>
		</div>
		
		<div class="services_section horizon_divider">
			<?php 
				$as_orders = "SELECT * FROM as_order
					LEFT JOIN as_customer ON as_order.order_customer = as_customer.customerid
					ORDER BY as_order.orderid ASC LIMIT 5";
				$results_iv = $database->get_results( $as_orders );
			?>
			<h2><?php echo $database->as_num_rows( $as_orders ) ?> Orders</h2>
			<div class="ss_left">
				<img src="as_themes/images/sitemap.png" alt="Image" />
			</div>
                    
			<div class="ss_right">
			<ul class="tooplate_list"><?php foreach( $results_iv as $row ) { ?>
				<li><?php echo $row['order_qty'].' '.$row['order_title'].' '.$row['order_price'] ?>/= ordered by <?php echo $row['customer_name'] ?></li>			
			<?php } ?></ul>
			<div class="button"><a href="index.php?action=order_new" class="more float_r">Add an Order</a></div>
			</div>
			<div class="cleaner"></div>
		</div>
		
		<div class="services_section horizon_divider">
			<?php 
				$as_users = "SELECT * FROM as_user ORDER BY userid DESC LIMIT 5";
				$results_v = $database->get_results( $as_users );
			?>
			<h2><?php echo $database->as_num_rows( $as_users ) ?> Site Users</h2>
			<div class="ss_left">
				<img src="as_themes/images/sitemap.png" alt="Image" />
			</div>
                    
			<div class="ss_right">
			<ul class="tooplate_list"><?php foreach( $results_v as $row ) { ?>
				<li><?php echo $row['user_fname'].' '.$row['user_surname'] ?></li>			
			<?php } ?></ul>
			<div class="button"><a href="index.php?action=user_new" class="more float_r">Add a User</a></div>
			</div>
			<div class="cleaner"></div>
		</div>
	</div>			
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
