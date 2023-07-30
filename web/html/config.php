<?php
session_start();
$dbhost = "db";
$dbuser = "user";
$dbpasswd = "password";
$dbname = "login";
$dbport = 3306;

$con = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
