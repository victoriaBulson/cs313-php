<?php
    require 'get_db.php';
    if($_GET['action'] == 'new_account') {save_account();}

    function save_account(){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $group_name = htmlspecialchars($_POST['group_name']);
        $comment = htmlspecialchars($_POST['comment']);
        
        $query="INSERT INTO accounts(username, password, name, comment)VALUES(:username, :password, :group_name, :comment)";
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':username', $username, PDO::PARAM_STR);
        $stmt->bindvalue(':password', $password, PDO::PARAM_STR);
        $stmt->bindvalue(':group_name', $group_name, PDO::PARAM_STR);
        $stmt->bindvalue(':comment', $comment, PDO::PARAM_STR);
        $stmt->execute();
    }

?>