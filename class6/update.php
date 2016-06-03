<?php
require_once 'connection.php';

$id = 6;
$username = 'selim';
$email = 'selim@kodeeo.com';

$st = $db->prepare('UPDATE users SET username=:username, email=:email WHERE id=:id');
$st->bindValue('username', $username, PDO::PARAM_STR);
$st->bindValue('email', $email, PDO::PARAM_STR);
$st->bindValue('id', $id, PDO::PARAM_INT);
$res = $st->execute();

var_dump($res);
