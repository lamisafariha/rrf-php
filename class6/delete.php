<?php
require_once 'connection.php';
$username = 'selim';

try {
    $st = $db->prepare('DELETE FROM users WHERE username=:username');
    $st->bindValue('username', $username, PDO::PARAM_STR);
    $res = $st->execute();

    var_dump($res);
} catch(PDOEXception $e) {
    echo $e->getMessage();
}

