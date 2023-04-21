<?php

$host = 'localhost';
$username = 'admin_tru';
$password = 'ipsr5692';
$db = 'admin_tru';


date_default_timezone_set('Asia/Bangkok');
$con  = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("set names utf8");
