<?php

$db_host = "localhost";
$db_name = "devnotes";
$db_user = "root";
$db_pass = "Amanda@230406";

$pdo = new PDO("mysql:db_name=$db_name;host=$db_host",$db_user, $db_pass);

$array = [];