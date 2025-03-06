<?php

$config = parse_ini_file("./config.ini", true)['database'];

$host = $config['host'];
$dbname = $config['dbname'];
$username = $config['username'];
$password = $config['password'];

$str = "mysql:host={$host};dbname={$dbname}";

$connection = new PDO($str, $username, $password);
