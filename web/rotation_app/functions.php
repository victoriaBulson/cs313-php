<?php
    echo "HEY THERE!";
    echo $_POST['action'];
    if($_POST['action'] == 'new_account') {save_account();}

    function save_account(){
        echo $_POST['action']; 
    }
?>