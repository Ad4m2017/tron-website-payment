<?php

/*	prepare json output	*/
function json_output( $status, $message, $array = array() )
{
	$json->status = $status;
	$json->message = $message;
	$json->array = $array;
	
	$json = json_encode($json);
	return $json;
}

/*	connect to database	*/
$db = mysqli_connect("localhost","root","","db_tron_pay");

/*	Check connection	*/
if ( mysqli_connect_errno() )
{
    $status		= "error";
	$message	= "Failed to connect to MySQL: " . mysqli_connect_error();
	return json_output( $status, $message );    
}

?>
