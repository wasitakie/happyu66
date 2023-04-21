<?php

$host = 'localhost';
$username = 'admin_rbru';
$password = 'ipsr5692';
$db = 'admin_rbru';


date_default_timezone_set('Asia/Bangkok');
$con  = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("set names utf8");
