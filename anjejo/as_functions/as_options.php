<?php
	
	// OPTIONS FUNCTIONS
	// Begin Options Functions
	
	function as_total_cat_story(){
		$as_db_query = "SELECT * FROM my_story";
		$database = new As_Dbconn();
		return $database->as_num_rows( $as_db_query );
	}
	
	function as_type_item($typeid){
		$as_db_query = "SELECT * FROM as_type WHERE typeid = '$typeid'";
		$database = new As_Dbconn();
		if( $database->as_num_rows( $as_db_query ) > 0 ) {
			list( $typeid, $type_slug, $type_title) = $database->get_row( $as_db_query );
			return $type_title;
		} else  {
			return false;
		}
	}
	
	function as_customer_item($customerid){
		$as_db_query = "SELECT * FROM as_customer WHERE customerid = '$customerid'";
		$database = new As_Dbconn();
		if( $database->as_num_rows( $as_db_query ) > 0 ) {
			list( $customerid, $customer_name, $customer_fullname) = $database->get_row( $as_db_query );
			return $customer_fullname;
		} else  {
			return false;
		}
	}
	