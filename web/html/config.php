<?php
session_start();
$host = "db"; /* Host name */
$user = "user"; /* User */
$password = "password"; /* Password */
$dbname = "login"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error()); //
}
