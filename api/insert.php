<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);
if ($method === 'get') {



} else {
    $array['error'] = "Método não permitido ( apenas GET )";  
}
require('../return.php');
