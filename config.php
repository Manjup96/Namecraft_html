<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'namecraft_html_db');


// define('DB_SERVER','localhost');
// define('DB_USER','u406176785_nc_mdt_user');
// define('DB_PASS' ,'');
// define('DB_NAME', 'u406176785_nc_mdt_db');



$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>