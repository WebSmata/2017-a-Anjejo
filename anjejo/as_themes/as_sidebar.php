		<div id="tooplate_sidebar">
            <h2>My Account</h2>
            <ul class="tooplate_list">
				<?php if ($myaccount){ ?>
					<li><a href="index.php?action=options">Manage Site</a></li>
					<li><a href="index.php?action=logout">Logout?</a></li> 
				<?php }  else { ?>
					<li><a href="index.php?action=register">Register</a></li>
					<li><a href="index.php?action=forgot_password">Forgot Password</a></li>
					<li><a href="index.php?action=forgot_username">Forgot Username</a></li>
				<?php } ?>
			</ul>
			
            <h2>Our Services</h2>
            <ul class="tooplate_list">
				<li><a href="#">Laptop Computer</a></li>
				<li><a href="#">Desktop Computer</a></li>
				<li><a href="#">Computer Accessories</a></li>
				<li><a href="#">Office Software</a></li>
				<li><a href="#">Antivirus Softwares</a></li>
            </ul>
            <div class="button"><a href="#">View All</a></div>
            <div class="cleaner_h60"></div>
        </div>