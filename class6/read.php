<?php
require_once "connection.php";

$st = $db->query("SELECT * FROM users");
$data = $st->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $row)
   echo $row['username'];


// conditional query
// $username = 'mazed';
// $password = '123456';

// $st = $db->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
// $st->bindValue('username', $username, PDO::PARAM_STR);
// $st->bindValue('password', $password, PDO::PARAM_STR);
// $res = $st->execute();

// var_dump($res);
