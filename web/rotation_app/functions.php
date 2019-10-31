<?php
    require 'db_connect.php';

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
    //*/  

    //Insert Couples
    $couples = 1;
    $get_name1 = 'name1_couple'. $couples;
    while(array_key_exists($get_name1, $_POST)){
        //Get Info
        $name_1 = $_POST[$get_name1];
        $name_2 = $_POST['name2_couple'. $couples];
        $email_1 = $_POST['email1_couple'. $couples];
        $email_2 = $_POST['email2_couple'. $couples];
        //Insert members & partners
        $query='INSERT INTO members(email, family, name) VALUES
                (:email1, :family, :name1),
                (:email2, :family, :name2);';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':email1', $email_1, PDO::PARAM_STR);
        $stmt->bindvalue(':email2', $email_2, PDO::PARAM_STR);
        $stmt->bindvalue(':family', $username, PDO::PARAM_STR);
        $stmt->bindvalue(':name1', $name_1, PDO::PARAM_STR);
        $stmt->bindvalue(':name2', $name_2, PDO::PARAM_STR);
        $stmt->execute();
        
        
        $query='INSERT INTO partners(member1, member2)VALUES
                (:email1, :email2);';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':email1', $email_1, PDO::PARAM_STR);
        $stmt->bindvalue(':email2', $email_2, PDO::PARAM_STR);
        $stmt->execute();
        
        $couples++;
        $get_name1 = 'name1_couple'. $couples;
    }
        
    //Insert Individuals
    $indivs = 1;
    $get_name = 'name_indiv'. $indivs;
    while(array_key_exists($get_name, $_POST)){
        //Get Info
        $name = $_POST[$get_name];
        $email = $_POST['email_indiv'. $indivs];
        //Insert members
        $query='INSERT INTO members(email, family, name) VALUES
                (:email, :family, :name);';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':email', $email, PDO::PARAM_STR);
        $stmt->bindvalue(':family', $username, PDO::PARAM_STR);
        $stmt->bindvalue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
            
        $indivs++;
        $get_name = 'name_indiv'. $indivs;
    }

?>