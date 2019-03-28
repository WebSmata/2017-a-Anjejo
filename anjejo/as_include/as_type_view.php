<?php
	$typeid = $results['type'];
	$as_db_query = "SELECT * FROM as_type WHERE typeid = '$typeid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $typeid, $type_slug, $type_title, $type_icon, $type_content) = $database->get_row( $as_db_query );
	}
include AS_THEME."as_header.php";?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2>Edit Type <a style="float:right;" href="index.php?action=type_delete&&as_typeid=<?php echo $typeid ?>" onclick="return confirm('Are you sure you want to delete this type from the system? \nBe careful, this action can not be reversed.')">Delete this type</a></h2> 
			<div id="contact_form">
			<form role="form" method="post" name="PostType" action="index.php?action=type_view&&as_typeid=<?php echo $typeid ?>" enctype="multipart/form-data" >
                <label for="title">Type Title: </label>
				<input type="text" autocomplete="off" name="title" value="<?php echo $type_title ?>" class="input_field" >
				<label for="filename">Type Icon:</label>
					<input type="hidden" name="typeicon" value="<?php echo $type_icon ?>">	
						<table style="width:100%"><tr><td>
						<img src="<?php echo 'as_media/'.$type_icon ?>" style="width:70px;height:70px;" >
						</td><td>
						<input name="filename" autocomplete="off" type="file" accept="image/*"  class="input_field" >
						</td></tr></table>
				<label for="content">Description (500 max):</label>
				<textarea name="content" autocomplete="off" ><?php echo $type_content?></textarea>
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="SaveCart" value="Save Changes">
				<input type="submit" class="submit_btn" name="SaveClose" value="Save & Close">
			</form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
