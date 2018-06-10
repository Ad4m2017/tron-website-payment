<?php
/*index.php*/

/* show all error/notice */
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


echo "Hello Tron World!";

$response = file_get_contents('https://api.tronscan.org/api/account/TGxyQ8Z9xK57HDPZe1LWbBXAuQfT92xS5Y');

echo $response;

//var_dump($response);

?>
