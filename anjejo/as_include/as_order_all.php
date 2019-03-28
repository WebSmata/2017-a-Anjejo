<?php 
	$database = new As_Dbconn();
	$as_db_query = "SELECT * FROM as_order
		LEFT JOIN as_customer ON as_order.order_customer = as_customer.customerid
		ORDER BY as_order.orderid ASC LIMIT 20";
	$results = $database->get_results( $as_db_query );
	include AS_THEME."as_header.php"; 
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2><?php echo $database->as_num_rows( $as_db_query ) ?> orders
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=order_new">New order</a> </h2> 
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th>Type</th>
				  <th>Qty</th>
				  <th>Price</th>
				  <th>Customer</th>
				  <th>Delete</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr>
				   <td><?php echo $row['order_title'] ?></td>
				   <td><?php echo $row['order_qty'] ?></td>
				  <td><?php echo $row['order_price'] ?>/=</td>
				  <td><?php echo $row['customer_name'].', '.$row['customer_mobile'].'<br>'.$row['customer_address'] ?></td>
				  <td><a href="index.php?action=order_delete&&as_orderid=<?php echo $row['orderid'] ?>" onclick="return confirm('Are you sure you want to delete this order from the system? \nBe careful, this action can not be reversed.')"><img src="as_themes/images/delete.png" /></a></td>
		        </tr>
			
				<?php } ?>
				  </tbody>
				</table>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>