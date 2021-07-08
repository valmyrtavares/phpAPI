<?php


header("Access-Control-Allow-Oring: * ");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Content-Type: application/json");
echo json_encode($array);
exit;