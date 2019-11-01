<?php
session_start();
require 'db_connect.php';
$db=get_db();

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$query='SELECT * FROM accounts WHERE username=:username;';
$stmt=$db->prepare($query);
$stmt->bindvalue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$saved_password = $stmt->fetchone(PDO::FETCH_ASSOC);

if (empty($saved_password)){
    echo 'EMPTY';
} else{
    echo '! EMPTY';
}




?>