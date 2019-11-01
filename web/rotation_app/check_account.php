<?php
session_start();
require 'db_connect.php';
$db=get_db();

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$query='SELECT * FROM accounts;';
$stmt=$db->prepare($query);
//$stmt->bindvalue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$saved_password = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($saved_password)){
    echo 'EMPTY';
} else{
    echo '! EMPTY';
    echo $saved_password[0][0];
}




?>