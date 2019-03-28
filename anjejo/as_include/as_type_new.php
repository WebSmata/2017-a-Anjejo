<?php include AS_THEME."as_header.php"; ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
				<h2>Add a Type</h2>
            <div id="contact_form">
				<form role="form" method="post" name="PostType" action="index.php?action=type_new" enctype="multipart/form-data" >
                <label for="title">Type Title:</label>
				<input type="text" autocomplete="off" name="title" class="input_field">
				<label for="filename">Type Icon:</label>
				<input name="filename" autocomplete="off" type="file" accept="image/*" class="input_field">
				<label for="content">Description (500 max):</label>
				<textarea name="content" autocomplete="off" ></textarea>
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="AddType" value="Save and Add">
				<input type="submit" class="submit_btn" name="AddClose" value="Save and Close">
			  </form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
