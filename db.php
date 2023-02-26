<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'learning';

$db_connect = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if ($db_connect->connect_error) {
    echo 'Errno: ' . $db_connect->connect_errno;
    echo '<br>';
    echo 'Error: ' . $db_connect->connect_error;
    exit();
}

//echo 'Success: A proper connection to MySQL was made.';
//echo '<br>';
//echo 'Host information: ' . $db_connect->host_info;
//echo '<br>';
//echo 'Protocol version: ' . $db_connect->protocol_version;