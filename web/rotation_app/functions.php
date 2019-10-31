<?php
    //require 'get_db.php';
    if($_GET['action'] == 'new_account') {save_account();}

    function save_account(){
        echo $_POST['username'];
        echo $_POST['password'];
        echo $_POST['group_name'];
        echo $_POST['comment'];

?>