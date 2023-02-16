<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'cometh_db';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die('Could not Connect MySql Server:' . mysql_error());
}
