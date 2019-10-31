<?php
    require 'db_connect.php';
    if($_GET['action'] == 'new_account') {save_account();}

    function save_account(){
       /* 
        //Get Account Info
        $db=get_db();
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $group_name = htmlspecialchars($_POST['group_name']);
        $comment = htmlspecialchars($_POST['comment']);
        //Update Account Info;
        $query='INSERT INTO accounts(username, password, name, comment)
                VALUES(:username, :password, :group_name, :comment);';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':username', $username, PDO::PARAM_STR);
        $stmt->bindvalue(':password', $password, PDO::PARAM_STR);
        $stmt->bindvalue(':group_name', $group_name, PDO::PARAM_STR);
        $stmt->bindvalue(':comment', $comment, PDO::PARAM_STR);
        $stmt->execute();
      */  

        //Insert Couples
        $couples = 1;
        $name_1 = 'name1_couple'. $couples;
        
        while(array_key_exists($name_1, $_POST)){
            //Get Values
            $key_email_1 = 'email_1_couple'. $couples;
            $email_1 = $_POST[$key_email_1];
            echo $email_1;
            //Insert first member
            /*$query='INSERT INTO members(email, family, name)
                    VALUES (:email, :family, :name);'
            $stmt=$db->prepare($query);*/
            break; 
        }
        
    }

?>