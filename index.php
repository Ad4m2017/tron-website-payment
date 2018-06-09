<?php
/* index.php */

echo "Hello Tron World!";

$response = file_get_contents('https://api.tronscan.org/api/account/TGxyQ8Z9xK57HDPZe1LWbBXAuQfT92xS5Y');

echo $reponse;

?>
