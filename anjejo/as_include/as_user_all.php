<?php include AS_THEME."as_header.php";
	$as_db_query = "SELECT * FROM as_user ORDER BY userid DESC LIMIT 20";
	$database = new As_Dbconn();			
	$results = $database->get_results( $as_db_query );
?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2><?php echo $database->as_num_rows( $as_db_query ) ?> Site Users
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=user_new">Add New User</a> </h2> 
          
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				<th></th>
				  <th>Full Name</th>
				  <th>Group</th>
				  <th>Mobile</th>
				  <th>Email</th>
				  <th>Registered</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?action=viewuser&amp;as_userid=<?php echo $row['userid'] ?>'">
				  <td><img class="iconic" src="as_media/<?php echo $row['user_avatar'] ?>" /></td>
				   <td><?php echo $row['user_fname'].' '.$row['user_surname'] ?></td>
		          <td><?php echo $row['user_group'] ?></td>
		          <td><?php echo $row['user_mobile'] ?></td>
		          <td><?php echo $row['user_email'] ?></td>
				  <td><?php echo date("j/m/y", strtotime($row['user_joined'])); ?></td>
		        </tr>
			
			<?php } ?>
			  </tbody>
			</table>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>