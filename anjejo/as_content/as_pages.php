<?php

	
function user_all() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Users";  
	require( AS_INC . "as_user_all.php" );
}

function user_new() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Newuser"; 
	
	if ( isset( $_POST['AddUser'] ) ) {
		as_add_new_user();
		header( "Location: index.php?action=user_new");						
	}  else if ( isset( $_POST['AddClose'] ) ) {
		as_add_new_user();
		header( "Location: index.php?action=user_all");						
	}  else {
		require( AS_INC . "as_user_new.php" );
	}	
	
}
function user_view() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Viewuser"; 
	$as_userid = isset( $_GET['as_userid'] ) ? $_GET['as_userid'] : "";
	
	$as_db_query = "SELECT * FROM as_user WHERE userid = '$as_userid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $userid, $user_name) = $database->get_row( $as_db_query );
		$results['user'] = $userid;
	} else  {
		return false;
		header( "Location: index.php?action=user_all");	
	}
	
	require( AS_INC . "as_user_view.php" );
		
}

function user_delete() {
	$as_userid = isset( $_GET['as_userid'] ) ? $_GET['as_userid'] : "";
	
	$database = new As_Dbconn();
	$as_db_query = "DELETE * FROM as_user WHERE userid = '$as_userid'";
	$delete = array(
		'userid' => $as_userid,
	);
	$deleted = $database->delete( 'as_user', $delete, 1 );
	if( $deleted )	{
		header( "Location: index.php?action=user_all");	
	}
}
	
function profile() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Profile"; 
	$as_username = $_SESSION['siteuser_user'];
	
	$as_db_query = "SELECT * FROM as_user WHERE user_name = '$as_username'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $userid, $user_name) = $database->get_row( $as_db_query );
		$results['user'] = $userid;
	} else  {
		return false;
		header( "Location: index.php?action=users");	
	}
	
	require( AS_INC . "as_viewuser.php" );
		
}


function forgot_username() {
	$results = array();
	$results['pageTitle'] = "Doctors Appointment";
	$results['pageAction'] = "ForgotUsername"; 
	
	if ( isset( $_POST['ForgotUsername'] ) ) {
		$email = $_POST['username'];
		$password = md5($_POST['password']);
		as_recover_username($email, $password);
		header( "Location: index.php?action=recovered_username");		
	}  else {
		require( AS_INC . "as_forgot_username.php" );
	}	
	
}

function forgot_password() {
	$results = array();
	$results['pageTitle'] = "Doctors Appointment";
	$results['pageAction'] = "ForgotPassword"; 
	
	if ( isset( $_POST['ForgotPassword'] ) ) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		as_recover_password($username, $email);
		header( "Location: index.php?action=recover_password");		
	}  else {
		require( AS_INC . "as_forgot_password.php" );
	}	
	
}

function recover_username() {
	$results = array();
	$results['pageTitle'] = "Doctors Appointment";
	$results['pageAction'] = "RecoveredUsername"; 
	require( AS_INC . "as_recover_username.php" );
	
}

function recover_password() {
	$results = array();
	$results['pageTitle'] = "Doctors Appointment";
	$results['pageAction'] = "RecoveredPassword"; 
	
	if ( isset( $_POST['RecoverPassword'] ) ) {
		$username = $_POST['username'];
		$password = md5($_POST['passwordcon']);
		as_change_password($username);
		header( "Location: index.php");		
	}  else {
		require( AS_INC . "as_recover_password.php" );
	}
}

	
function customer_all() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Supps";  
	require( AS_INC . "as_customer_all.php" );
}

function customer_new() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Newsupp"; 
	
	if ( isset( $_POST['AddSupp'] ) ) {
		as_add_new_supp();
		header( "Location: index.php?action=customer_new");						
	}  else if ( isset( $_POST['AddClose'] ) ) {
		as_add_new_supp();
		header( "Location: index.php?action=customer_all");						
	}  else {
		require( AS_INC . "as_customer_new.php" );
	}	
	
}
function customer_view() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Viewsupp"; 
	$as_customerid = isset( $_GET['as_customerid'] ) ? $_GET['as_customerid'] : "";
	
	$as_db_query = "SELECT * FROM as_supp WHERE customerid = '$as_customerid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $customerid, $customer_name) = $database->get_row( $as_db_query );
		$results['supp'] = $customerid;
	} else  {
		return false;
		header( "Location: index.php?action=customer_all");	
	}
	
	require( AS_INC . "as_customer_view.php" );
		
}

function customer_profile() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Profile"; 
	$as_suppname = $_SESSION['suppname_loggedin'];
	
	$as_db_query = "SELECT * FROM as_supp WHERE customer_name = '$as_suppname'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $customerid, $customer_name) = $database->get_row( $as_db_query );
		$results['supp'] = $customerid;
	} else  {
		return false;
		header( "Location: index.php?action=supps");	
	}
	
	require( AS_INC . "as_viewsupp.php" );
		
}


function customer_delete() {
	$as_customerid = isset( $_GET['as_customerid'] ) ? $_GET['as_customerid'] : "";
	
	$database = new As_Dbconn();
	$as_db_query = "DELETE * FROM as_customer WHERE customerid = '$as_customerid'";
	$delete = array(
		'customerid' => $as_customerid,
	);
	$deleted = $database->delete( 'as_customer', $delete, 1 );
	if( $deleted )	{
		header( "Location: index.php?action=customer_all");	
	}
}
	  
function item_all() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "All Items"; 
	
	if ( isset( $_POST['SearchThis'] ) ) {
		$as_search = $_POST['as_search'];
		$as_typeid = $_POST['as_typeid'];
		
		header( "Location: index.php?action=as_search&&as_search=".$as_search."&&as_typeid=".$as_typeid);
								
	}  else {	
		require( AS_INC . "as_item_all.php" );
	}
}

function item_search() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Search"; 
	$results['search'] = isset( $_GET['as_itemid'] ) ? $_GET['as_itemid'] : "";
	$results['searchtype'] = isset( $_GET['as_typeid'] ) ? $_GET['as_typeid'] : "";
	
	if ( isset( $_POST['SearchThis'] ) ) {
		$as_search = $_POST['as_search'];
		$as_typeid = $_POST['as_typeid'];
		
		header( "Location: index.php?action=as_search&&as_search=".$as_search."&&as_typeid=".$as_typeid);
														
	}  else {	
		require( AS_INC . "as_search.php" );
	}
}
function item_new() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Newitem"; 
	
	if ( isset( $_POST['AddItem'] ) ) {
		as_add_new_item();
		header( "Location: index.php?action=item_new");						
	}  else if ( isset( $_POST['AddClose'] ) ) {
		as_add_new_item();
		header( "Location: index.php?action=item_all");						
	}  else {
		require( AS_INC . "as_item_new.php" );
	}	
	
}

function item_view() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Viewitem"; 
	$as_itemid = isset( $_GET['as_itemid'] ) ? $_GET['as_itemid'] : "";
	
	$as_db_query = "SELECT * FROM as_item WHERE itemid = '$as_itemid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $itemid, $user_name) = $database->get_row( $as_db_query );
		$results['item'] = $itemid;
	} else  {
		return false;
		header( "Location: index.php?action=item_all");	
	}
	
	if ( isset( $_POST['OrderNow'] ) ) {
		as_add_new_order();
		header( "Location: index.php?action=order_all");				
	}  else {
		require( AS_INC . "as_item_view.php" );
	}	
	
}

function item_edit() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Edititem"; 
	$as_itemid = isset( $_GET['as_itemid'] ) ? $_GET['as_itemid'] : "";
	
	$as_db_query = "SELECT * FROM as_item WHERE itemid = '$as_itemid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $itemid) = $database->get_row( $as_db_query );
		$results['item'] = $itemid;
	} else  {
		return false;
		header( "Location: index.php?action=elibrary");	
	}
	
	if ( isset( $_POST['SaveItem'] ) ) {
		as_edit_item($as_itemid);
		header( "Location: index.php?action=item_edit&&as_itemid=".$as_itemid);						
	}  else if ( isset( $_POST['SaveClose'] ) ) {
		as_edit_item($as_itemid);
		header( "Location: index.php?action=item_view&&as_itemid=".$as_itemid);					
	}  else {
		require( AS_INC . "as_item_edit.php" );
	}	
	
}

function item_delete() {
	$as_itemid = isset( $_GET['as_itemid'] ) ? $_GET['as_itemid'] : "";
	
	$database = new As_Dbconn();
	$as_db_query = "DELETE * FROM as_item WHERE itemid = '$as_itemid'";
	$delete = array(
		'itemid' => $as_itemid,
	);
	$deleted = $database->delete( 'as_item', $delete, 1 );
	if( $deleted )	{
		header( "Location: index.php?action=item_all");	
	}
}


function type_all() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Types";  
	require( AS_INC . "as_type_all.php" );
}

function type_new() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Add a New Type"; 
	
	if ( isset( $_POST['AddType'] ) ) {
		as_add_new_type();
		header( "Location: index.php?action=type_new");						
	}  else if ( isset( $_POST['AddClose'] ) ) {
		as_add_new_type();
		header( "Location: index.php?action=type_all");						
	}  else {
		require( AS_INC . "as_type_new.php" );
	}	
	
}

function type_view() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Customers";
	$results['pageAction'] = "Viewtype"; 
	$as_typeid = isset( $_GET['as_typeid'] ) ? $_GET['as_typeid'] : "";
	
	$as_db_query = "SELECT * FROM as_type WHERE typeid = '$as_typeid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $typeid, $type_slug) = $database->get_row( $as_db_query );
		$results['type'] = $typeid;
	} else  {
		return false;
		header( "Location: index.php?action=type_all");	
	}
	
	if ( isset( $_POST['SaveCart'] ) ) {
		as_edit_type($as_typeid);
		header( "Location: index.php?action=type_view&&as_typeid=".$as_typeid);						
	}  else if ( isset( $_POST['SaveClose'] ) ) {
		as_edit_type($as_typeid);
		header( "Location: index.php?action=type_all");						
	}  else {
		require( AS_INC . "as_type_view.php" );
	}	
	
}


function type_delete() {
	$as_typeid = isset( $_GET['as_typeid'] ) ? $_GET['as_typeid'] : "";
	
	$database = new As_Dbconn();
	$as_db_query = "DELETE * FROM as_type WHERE typeid = '$as_typeid'";
	$delete = array(
		'typeid' => $as_typeid,
	);
	$deleted = $database->delete( 'as_type', $delete, 1 );
	if( $deleted )	{
		header( "Location: index.php?action=type_all");	
	}
}

	  
function order_all() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Orders";
	$results['pageAction'] = "All Items"; 
	
	if ( isset( $_POST['SearchThis'] ) ) {
		$as_search = $_POST['as_search'];
		$as_typeid = $_POST['as_typeid'];
		
		header( "Location: index.php?action=as_search&&as_search=".$as_search."&&as_typeid=".$as_typeid);
								
	}  else {	
		require( AS_INC . "as_order_all.php" );
	}
}

function order_search() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Orders";
	$results['pageAction'] = "Search"; 
	$results['search'] = isset( $_GET['as_orderid'] ) ? $_GET['as_orderid'] : "";
	$results['searchtype'] = isset( $_GET['as_typeid'] ) ? $_GET['as_typeid'] : "";
	
	if ( isset( $_POST['SearchThis'] ) ) {
		$as_search = $_POST['as_search'];
		$as_typeid = $_POST['as_typeid'];
		
		header( "Location: index.php?action=as_search&&as_search=".$as_search."&&as_typeid=".$as_typeid);
														
	}  else {	
		require( AS_INC . "as_search.php" );
	}
}
function order_new() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Orders";
	$results['pageAction'] = "Neworder"; 
	
	if ( isset( $_POST['AddItem'] ) ) {
		as_add_new_order();
		header( "Location: index.php?action=order_new");						
	}  else if ( isset( $_POST['AddClose'] ) ) {
		as_add_new_order();
		header( "Location: index.php?action=order_all");						
	}  else {
		require( AS_INC . "as_order_new.php" );
	}	
	
}

function order_view() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Orders";
	$results['pageAction'] = "Vieworder"; 
	$as_orderid = isset( $_GET['as_orderid'] ) ? $_GET['as_orderid'] : "";
	
	$as_db_query = "SELECT * FROM as_order WHERE orderid = '$as_orderid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $orderid, $user_name) = $database->get_row( $as_db_query );
		$results['order'] = $orderid;
	} else  {
		return false;
		header( "Location: index.php?action=order_all");	
	}
	
	if ( isset( $_POST['OrderNow'] ) ) {
		as_add_new_order();
		header( "Location: index.php?action=order_all");				
	}  else {
		require( AS_INC . "as_order_view.php" );
	}	
	
}

function order_edit() {
	$results = array();
	$results['pageTitle'] = "Mazao Items Orders";
	$results['pageAction'] = "Editorder"; 
	$as_orderid = isset( $_GET['as_orderid'] ) ? $_GET['as_orderid'] : "";
	
	$as_db_query = "SELECT * FROM as_order WHERE orderid = '$as_orderid'";
	$database = new As_Dbconn();
	if( $database->as_num_rows( $as_db_query ) > 0 ) {
		list( $orderid) = $database->get_row( $as_db_query );
		$results['order'] = $orderid;
	} else  {
		return false;
		header( "Location: index.php?action=elibrary");	
	}
	
	if ( isset( $_POST['SaveItem'] ) ) {
		as_edit_order($as_orderid);
		header( "Location: index.php?action=order_edit&&as_orderid=".$as_orderid);						
	}  else if ( isset( $_POST['SaveClose'] ) ) {
		as_edit_order($as_orderid);
		header( "Location: index.php?action=order_view&&as_orderid=".$as_orderid);					
	}  else {
		require( AS_INC . "as_order_edit.php" );
	}	
	
}

function order_delete() {
	$as_orderid = isset( $_GET['as_orderid'] ) ? $_GET['as_orderid'] : "";
	
	$database = new As_Dbconn();
	$delete = array(
		'orderid' => $as_orderid,
	);
	$deleted = $database->delete( 'as_order', $delete, 1 );
	if( $deleted )	{
		header( "Location: index.php?action=order_all");	
	}
}


?>