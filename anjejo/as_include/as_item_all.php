<?php 
	$database = new As_Dbconn();
	$as_db_query = "SELECT * FROM as_item ORDER BY itemid DESC LIMIT 20";
	$results = $database->get_results( $as_db_query );
	include AS_THEME."as_header.php"; 
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2><?php echo $database->as_num_rows( $as_db_query ) ?> Items
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=item_new">New Item</a> </h2> 
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th style="width:70px;"></th>
				  <th>Type</th>
				  <th>Qty</th>
				  <th>Price @</th>
				  <th></th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?action=item_view&amp;as_itemid=<?php echo $row['itemid'] ?>'">
				   <td><img class="iconic" src="as_media/<?php echo $row['item_img'] ?>" /></td>
				   <td><?php echo as_type_item($row['item_type']) ?></td>
				   <td><?php echo $row['item_quantity'] ?></td>
				  <td><?php echo $row['item_price'] ?>/=</td>
		          <td></td>
		        </tr>
			
				<?php } ?>
				  </tbody>
				</table>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>