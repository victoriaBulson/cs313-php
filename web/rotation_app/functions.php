<?php
    echo "HEY THERE!";
    if($_GET['action'] == 'new_account') {save_account();}

    function save_account(){
        echo $_GET['action'];
        echo $_POST[username];
        
    }
?>







<?php
    session_start();
    if($_GET['action'] == 'add_to_cart') {addToCart();}
    if($_GET['action'] == 'remove_from_cart') {addToCart();}

    function addToCart(){
        array_push($_SESSION['cart'],$_GET[item]);
        echo "added!";
    }

?>