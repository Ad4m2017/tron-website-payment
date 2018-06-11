<?php
/*
    all queryoutput in json for
*/

$db = mysqli_connect("localhost","root","","db_tron_pay");

/*
    Check connection
*/
if ( mysqli_connect_errno() )
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
}
?>
