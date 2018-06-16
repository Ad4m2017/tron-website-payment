<?php
/*
    Tron (TRX) API PHP by Ad4m2017
    Contact: https://t.me/Ad4m2017
*/

$q = @$_REQUEST['q'];

$api_url = 'https://api.tronscan.org/api';

function run_api( $data )
{
	$content = @file_get_contents( $GLOBALS['api_url'] . $data );
	return $content;
}

function balance( $address )
{
	$balance = null;
	$content = run_api( '/account/' . $address );
	$json = json_decode( $content, true );
	if ( $json['balances'][0]['name'] == "TRX" ) { $balance = $json['balances'][0]['balance']; }
	return $balance;
}

echo balance("THSWRh5wW2MbpdZ3B5ajYedYaUDQhGQYej");

?>
