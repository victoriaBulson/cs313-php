<?php
    session_start();
    if($_GET['action'] == 'add_to_cart') {addToCart();}
    if($_GET['action'] == 'remove_from_cart') {addToCart();}

    function addToCart(){
        array_push($_SESSION['cart'],$_GET[item]);
    }

    function removeItem(){
        $key = array_search($_GET[item], $_SESSION['cart']);
        unset($_SESSION['cart'][$key]);
    }
?>