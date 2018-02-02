<?php
$serverName = "{server name}";
$connectionOptions = array(
    "Database" => "",
    "Uid" => "",
    "PWD" => ""
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

?>
