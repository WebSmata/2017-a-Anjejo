<?php include AS_THEME."as_header.php"; ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2>Site Options</h2>
            <div id="contact_form">
				<form action="index.php?action=options" method="post">
					<label for="sitename">Site Name:</label>
					<input type="text" name="sitename" value="<?php echo as_get_option('sitename') ?>" class="input_field">
					
					<label for="siteurl">Site Url:</label>
					<input type="text" name="siteurl" autocomplete="off" value="<?php echo as_get_option('siteurl') ?>" class="input_field" >
					
					<label for="keywords">Keywords:</label>
					<input type="text" name="keywords" autocomplete="off" value="<?php echo as_get_option('keywords') ?>" class="input_field">
					
					<label for="description">Descriptions:</label>
					<textarea name="description"><?php echo as_get_option('description') ?></textarea>
					
					<div class="cleaner"></div>
					<input type="submit" class="submit_btn" name="SaveSite" value="Save Options">
				</form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>