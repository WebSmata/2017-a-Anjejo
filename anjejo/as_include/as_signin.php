<?php include AS_THEME."as_header.php" ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
            <h2>Sign In to Continue</h2>
            <div id="contact_form">
                <form method="post" name="contact" action="index.php?action=login">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" class="input_field" required />
						<div class="cleaner_h10"></div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="input_field" required />
						<div class="cleaner_h10"></div>
                    <div class="cleaner"></div>
                    <input type="submit" name="SignMeIn" value="Sign In" class="submit_btn" />
                </form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>