<?php include AS_THEME."as_header.php" ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h3>Username Recovery Center</h3>
		  	<?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
				
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<div class="error" id="error"><img class="errimg" src="looks/images/cross.png">',$msg,'</div>'; 
			}
			unset($_SESSION['ERRMSG_ARR']);
			} ?>	
		  <h2>Username recovery was successful as:</h2>
			<h2><?php echo $_SESSION['recover_username'] ?></h2><hr>
			<a href="index.php"><h1>>> Now Login In >></h1></a>
		  </center>
					<div class="cleaner h40"></div>
				</div>
		</div>
		 <?php include AS_THEME."as_sidebar.php" ?>
        <div class="cleaner"></div>
    </div>
</div>
  <?php include AS_THEME."as_footer.php" ?>
    
