<?php

$host = 'localhost';
$username = 'admin_kru';
$password = 'ipsr5692';
$db = 'admin_kru';


date_default_timezone_set('Asia/Bangkok');
$con  = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("set names utf8");
