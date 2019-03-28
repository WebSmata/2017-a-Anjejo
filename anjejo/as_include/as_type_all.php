<?php include AS_THEME."as_header.php";
	$as_db_query = "SELECT * FROM as_type ORDER BY typeid DESC LIMIT 20";
	$database = new As_Dbconn();			
	$results = $database->get_results( $as_db_query );
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
				<h2><?php echo $database->as_num_rows( $as_db_query ) ?> Types
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=type_new">Add New Type</a> </h2> 
          
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th style="width:70px;"></th>
				  <th>Type</th>
				  <th>Description</th>
				  <th>No of Items</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?action=type_view&amp;as_typeid=<?php echo $row['typeid'] ?>'">
				   <td><img class="iconic" src="as_media/<?php echo $row['type_icon'] ?>" /></td>
				   <td><?php echo $row['type_title'] ?></td>
		          <td style="max-width: 300px;"><?php echo $row['type_content'] ?></td>
		          <td>
				  <?php 
					$typeid = $row['typeid'];
					$as_db_qry = "SELECT * FROM as_item WHERE item_type = '$typeid'";
					echo $database->as_num_rows( $as_db_qry )
					?>
				  </td>
		        </tr>
					<?php } ?>
                      </tbody>
                    </table>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>