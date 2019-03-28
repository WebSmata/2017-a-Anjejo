<?php 
	$myaccount = isset( $_SESSION['siteuser_account'] ) ? $_SESSION['siteuser_account'] : "";
	$sitename = as_get_option('sitename');
	$description = as_get_option('description');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sitename ?></title> 
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2033 Business
http://www.tooplate.com/view/2033-business
-->
<link href="as_themes/tooplate_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="tooplate_header_wrapper">
    <div id="tooplate_header">
        <div id="site_title">
        	<h1><a href="index.php"><img src="as_themes/images/tooplate_logo.png" alt="<?php echo $sitename ?>" /><span><?php echo $sitename ?></span></a></h1>
        </div>
        <div id="header_phone_no">Call Now: <span>0714 605 120</span>
        
        </div>
        
        <div class="cleaner_h10"></div>
        
        <div id="tooplate_menu">
        	
            <div id="home_menu"><a href="index.php"></a></div>
                
            <ul>
                <?php if ($myaccount){ ?>
				<li><a href="index.php?action=type_all">Types</a></li>
				<li><a href="index.php?action=item_all">Items</a></li>
				<li><a href="index.php?action=customer_all">Customers</a></li>
				<li><a href="index.php?action=order_all">Orders</a></li>
				<li><a href="index.php?action=user_all">Users</a></li>
				<?php }  else { ?>
				<li><a href="index.php" class="current">Home</a></li>
				<li><a href="index.php?action=register">Register</a></li>
				<?php } ?>
            </ul>    	
        
        </div> <!-- end of tooplate_menu -->
        
    </div>	  
</div> <!-- end of header_wrapper -->

<div id="tooplate_middle_wrapper1">
	<div id="tooplate_middle_wrapper2">
		<div id="tooplate_middle">

			<h1>BE DIGITAL<span>with <?php echo $sitename ?></span></h1>
			<p><?php echo $description ?></p>
			<a href="#"><span>+</span> More</a>
			
		</div>
	</div>
</div>