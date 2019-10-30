<?php
    echo "HEY THERE!";
    if($_POST['func'] == 'new_account') {save_account();}

    function save_account(){
        echo $_POST['func']; 
    }
?>