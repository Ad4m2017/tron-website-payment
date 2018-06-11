<?php
/*
tron function's
*/

$tron_api_server_url = 'https://api.tronscan.org/api';

/* get all information about a tron address */
function get_account_information( $address )
{
	$result = file_get_contents( $tron_api_server_url . '/account/' . $address );
	
	return $result;
}

?>
