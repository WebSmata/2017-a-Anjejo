<?php include AS_THEME."as_header.php" ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h3>Password Recovery Center</h3>
		  	
		  <h2>Reset Your Password</h2>
			<form action="index.php?action=recover_password" method="post" >
			<input type="hidden" name="username" value="<?php echo $_SESSION['recover_password'] ?>" />
			<label for="password">New Password (*required)</label>
			<input type="password" name="password" id="password" autocomplete="off" required autofocus  maxlength="20"/>
			<label for="passwordcon">Confirm Password (*required)</label>
			<input type="password" name="passwordcon" id="passwordcon" autocomplete="off" required autofocus maxlength="20" />
			
			<div class="cleaner"></div>
			<input type="submit" id="aalogin-button" name="RecoverPassword" value="Reset Password" />
        
			</form>
					<div class="cleaner h40"></div>
				</div>
		</div>
		 <?php include AS_THEME."as_sidebar.php" ?>
        <div class="cleaner"></div>
    </div>
</div>
  <?php include AS_THEME."as_footer.php" ?>
    
