<?php
/*
    database-mysql.php return only in json format
*/


$json->status = "0";
$json->text = "";

$json = json_encode($json);

echo $json;


$db = mysqli_connect("localhost","root","","db_tron_pay");

/*
    Check connection
*/
if ( mysqli_connect_errno() )
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
}
?>
