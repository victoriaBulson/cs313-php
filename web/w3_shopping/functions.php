<?php
    session_start();
    if($_GET['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        array_push($_SESSION['cart'],$_GET[item]);
    }
?>