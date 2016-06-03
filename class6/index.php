<?php
require_once "connection.php";

$id = 5;
$username = 'mazed';
$password = '123456';
$email = 'mazed@gmail.com';

// non-secured
//$db->exec("INSERT INTO users (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')");

// prepared statement or query
// $query = $db->prepare("INSERT INTO users (`username`, `password`, `email`) VALUES (?,?,?)");
// $query->execute([
//              $username, $password, $email
//              ]);
// echo $db->lastInsertId();

// named placeholders
$PDOstatement = $db->prepare("INSERT INTO users (`username`, `password`, `email`) VALUES (:username,:password,:email)");
// $query->execute([
//              ':username' => $username,
//              ':password' => $password,
//              ':email' => $email,
//              ]);
$PDOstatement->bindValue('username', $username, PDO::PARAM_STR);
$PDOstatement->bindValue('password', $password, PDO::PARAM_STR);
$PDOstatement->bindValue('email', $email, PDO::PARAM_STR);
$PDOstatement->execute();

echo $db->lastInsertId();


