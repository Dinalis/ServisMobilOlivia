<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$rec_limit = 10;

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('db_service_suzuki');
?>