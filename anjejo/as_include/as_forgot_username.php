<?php include AS_THEME."as_header.php" ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
            	<h3>Fill in the form below to get assistance on recovering your username</h3>
                <form method="post" name="contact" action="index.php?action=forgot_username">
                    <label for="email">Enter your email (*required):</label>
                    <input type="email" id="email" name="email" class="input_field" required />

                    <label for="password">Enter your password (*required):</label>
                    <input type="password" id="password" name="password" class="input_field" required />

                    <div class="cleaner"></div>
                    <input type="submit" name="ForgotUsername" value="Forgot Username" class="submit_btn" />
                </form>
				<div class="cleaner h40"></div>
            </div>
		</div>
		 <?php include AS_THEME."as_sidebar.php" ?>
        <div class="cleaner"></div>
    </div>
</div>
 <?php include AS_THEME."as_footer.php" ?>
    
