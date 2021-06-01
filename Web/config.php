<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ec2-54-152-185-191.compute-1.amazonaws.com');
define('DB_USERNAME', 'zwkuejqunqscnu');
define('DB_PASSWORD', '6f099a8d7eb7ded73e6188f700ed32bec813e127840809300e3a5f307f4f46a4');
define('DB_NAME', 'd7k6ilbd621ucp');
define('DB_PORT', '5432');
 
/* Attempt to connect to MySQL database */

$link = pg_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
    echo 'Connect seuccesfully';
?>