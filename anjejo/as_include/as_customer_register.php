<?php include AS_THEME."as_header.php"; ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
				<h2>Register your account</h2>
            <div id="contact_form">
				<form role="form" method="post" name="PostUser" action="index.php?action=register" enctype="multipart/form-data" >
					<label for="sitename">First  Name:</label>
					<input type="text" autocomplete="off" name="fname">
					<label for="sitename">Second Name:</label>
					<input type="text" autocomplete="off" name="surname">
					<label for="sitename">Upload User Avatar:</label>
					<input name="avatar" autocomplete="off" type="file" accept="image/*">
					<label for="sitename">Email Address:</label>
					<input type="text" autocomplete="off" name="email">
					<label for="sitename">Mobile (Optional):</label>
					<input type="text" autocomplete="off" name="mobile">
					<label for="sitename">Preferred Username:</label>
					<input type="text" autocomplete="off" name="username">
					<label for="sitename">Preferred Password:</label>
					<input type="password" autocomplete="off" name="password">
					<label for="sitename">Confirm Password:</label>
					<input type="password" autocomplete="off" name="passwordcon">
					<input type="submit" class="submit_btn" name="Register" value="Register">
				</form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
