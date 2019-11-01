<?php
session_start();
require 'db_connect.php';
$db=get_db();

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$query='SELECT password FROM accounts WHERE username=:username;';
$stmt=$db->prepare($query);
$stmt->bindvalue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$saved_password = fetchAll(PDO:FETCH_ASSOC);
echo $saved_password;
echo $saved_password[0];




?/>