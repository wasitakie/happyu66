<?php

$host = 'localhost';
$username = 'admin_mcru';
$password = 'ipsr5692';
$db = 'admin_mcru';


date_default_timezone_set('Asia/Bangkok');
$con  = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("set names utf8");
