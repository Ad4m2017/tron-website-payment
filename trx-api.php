<?php
/*
    Tron (TRX) API PHP by Ad4m2017
    Contact: https://t.me/Ad4m2017
*/

$api_url = 'https://api.tronscan.org/api';

/* 
    get all information about a single tron address
*/
function get_account_information( $address )
{
	$result = file_get_contents( @$api_url . '/account/' . $address );
	
	return $result;
}

echo get_account_information("");
?>
