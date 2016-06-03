<?php
$dsn = 'mysql:host=localhost;dbname=rrfphp;charset=utf8';
$username = 'homestead';
$password = 'secret';

// connect to database
try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connection established...<br/>';
} catch(PDOException $e) {
    echo $e->getMessage();
}
