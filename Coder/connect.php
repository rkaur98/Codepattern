<?php
$serverName = "codepattern.database.windows.net";
$connectionOptions = array(
    "Database" => "CodePattern",
    "Uid" => "rupkaur98",
    "PWD" => "gur@6507$"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

?>
