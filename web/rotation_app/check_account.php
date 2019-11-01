<?php
session_start();
require 'db_connect.php';
$db=get_db();

//sanitize input
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

//get stored password
$query='SELECT password FROM accounts WHERE username=:username;';
$stmt=$db->prepare($query);
$stmt->bindvalue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stored_hash = $rows[0]["password"];

if(password_verify($password, $stored_hash)){
    $new_url='rotation.php';
} else{
    $new_url='login.php';
}

header("Location:$new_url");



?>