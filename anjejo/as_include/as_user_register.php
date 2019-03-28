<?php include AS_THEME."as_header.php" ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
            <h2>Register your account now</h2>
            <div id="contact_form">
                <form method="post" name="contact" action="index.php?action=register">
                    <label for="fname">First  Name:</label>
					<input type="text" autocomplete="off" name="fname" class="input_field" required >
					<div class="cleaner_h10"></div>
					<label for="surname">Second Name:</label>
					<input type="text" autocomplete="off" name="surname" class="input_field" required >
					<div class="cleaner_h10"></div>	
					<label for="avatar">Upload User Avatar:</label>
					<input name="avatar" autocomplete="off" type="file" accept="image/*" class="input_field" >
					<div class="cleaner_h10"></div>
					<label for="email">Email Address:</label>
					<input type="email" autocomplete="off" name="email" class="input_field" required >
					<div class="cleaner_h10"></div>
					<label for="mobile">Mobile (Optional):</label>
					<input type="text" autocomplete="off" name="mobile" class="input_field" required >
					<div class="cleaner_h10"></div>
					<label for="username">Preferred Username:</label>
					<input type="text" autocomplete="off" name="username" class="input_field" required >
					<div class="cleaner_h10"></div>
					<label for="password">Preferred Password:</label>
					<input type="password" autocomplete="off" name="password" class="input_field" required >
					<div class="cleaner_h10"></div>
					<label for="passwordcon">Confirm Password:</label>
					<input type="password" autocomplete="off" name="passwordcon" class="input_field" required >
					<div class="cleaner_h10"></div>
                    <div class="cleaner"></div>
                    <input type="submit" name="Register" value="Register" class="submit_btn" />
                </form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>