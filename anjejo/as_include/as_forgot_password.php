<?php include AS_THEME."as_header.php" ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
            	<h3>Fill in the form below to get assistance on recovering your password</h3>
                <form method="post" name="contact" action="index.php?action=forgot_password">
                    <label for="username">Enter your username (*required):</label>
                    <input type="text" id="username" name="username" class="input_field" required />

                    <label for="email">Enter your email (*required):</label>
                    <input type="email" id="email" name="email" class="input_field" required />

                    <div class="cleaner"></div>
                    <input type="submit" name="ForgotPassword" value="Forgot Password" class="submit_btn" />
                </form>
				<div class="cleaner h40"></div>
            </div>
		</div>
		 <?php include AS_THEME."as_sidebar.php" ?>
        <div class="cleaner"></div>
    </div>
</div>
 <?php include AS_THEME."as_footer.php" ?>
    
