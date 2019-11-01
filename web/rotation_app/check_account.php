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
$saved_password = $stmt->fetchone();
echo $saved_password[0];





?>