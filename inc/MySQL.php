<?php
 
define('DATABASE_HOST', 'localhost:3308');
define('DATABASE_NAME', 'getjob');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', '');
 
$pdo = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 
// $pdo->exec("set names utf8");
 
?>