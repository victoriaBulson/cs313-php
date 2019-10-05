<?php

    if($_GET['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        array_push($_SESSION['cart'],$_GET[item]);
        for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
     echo "hello loop!";
     }
    }
?>