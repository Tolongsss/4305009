<?php

$dsn = "mysql:host=192.168.32.90;dbname=dbname01";
$db = new PDO($dsn, "dbname01" , "dbname@pwd");

$rs = $db->query("SELECT * FROM users WHERE account = 'user'");

$result = $rs->fetch();
print_r($result);