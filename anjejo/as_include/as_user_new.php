<?php include AS_THEME."as_header.php"; ?>
    <div id="tooplate_main">
    	<div id="tooplate_content">
			<h2>Add a Site User</h2> 
            <div id="contact_form">
				<form role="form" method="post" name="PostUser" action="index.php?action=newuser" enctype="multipart/form-data" >
                <label for="group">Choose a Category:</label>
				<select name="group" style="padding-left:20px;" class="input_field">
					<option value="" > - Choose a Category - </option>
					<option value="super-admin" > Super Admin </option>
					<option value="admin" > Admin </option>
					<option value="manager" > Manager </option>
					<option value="editor" > Editor </option>
					<option value="xplorer" > Explorer </option>		
				</select>
					
				<label for="fname">First  Name:</label>
				<input type="text" autocomplete="off" name="fname" class="input_field">
				
				<label for="surname">Second Name:</label>
				<input type="text" autocomplete="off" name="surname">
					
				<label for="avatar">Upload User Avatar:</label>
				<input name="avatar" autocomplete="off" type="file" accept="image/*" class="input_field">
                
				<label for="email">Email Address:</label>
				<input type="email" autocomplete="off" name="email" class="input_field">
				
				<label for="mobile">Mobile (Optional):</label>
				<input type="text" autocomplete="off" name="mobile" class="input_field">
				
				<label for="username">Preferred Username:</label>
				<input type="text" autocomplete="off" name="username" class="input_field">
				
				<label for="password">Preferred Password:</label>
				<input type="password" autocomplete="off" name="password" class="input_field">
				
				<label for="passwordcon">Confirm Password:</label>
				<input type="password" autocomplete="off" name="passwordcon" class="input_field">
				
				<div class="cleaner"></div>
				<input type="submit" class="submit_btn" name="AddUser" value="Save & Add">
				<input type="submit" class="submit_btn" name="AddClose" value="Save & Close">
			  </form>
				<div class="cleaner h40"></div>
            </div>
        </div>
<?php include AS_THEME."as_sidebar.php";
	include AS_THEME."as_footer.php" ?>
    
