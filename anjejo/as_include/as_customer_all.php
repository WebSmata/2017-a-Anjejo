<?php include AS_THEME."as_header.php";
	$as_db_query = "SELECT * FROM as_customer ORDER BY customerid DESC LIMIT 20";
	$database = new As_Dbconn();			
	$results = $database->get_results( $as_db_query );
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2><?php echo $database->as_num_rows( $as_db_query ) ?> Customers</h2> 
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th>Full Name</th>
				  <th>Mobile</th>
				  <th>Email</th>
				  <th>Address</th>
				  <th>Registered</th>
				  <th>Delete</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr>
				   <td><?php echo $row['customer_name'] ?></td>
		          <td><?php echo $row['customer_mobile'] ?></td>
		          <td><?php echo $row['customer_email'] ?></td>
		          <td><?php echo $row['customer_address'] ?></td>
				  <td><?php echo date("j/m/y", strtotime($row['customer_joined'])); ?></td>
				  <td><a href="index.php?action=customer_delete&&as_customerid=<?php echo $row['customerid'] ?>" onclick="return confirm('Are you sure you want to delete this customer from the system? \nBe careful, this action can not be reversed.')"><img src="as_themes/images/delete.png" /></a></td>
		        </tr>
			
			<?php } ?>
			  </tbody>
			</table>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
