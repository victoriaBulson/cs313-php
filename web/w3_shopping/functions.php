<?php

    if($_GET['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        echo $_GET[action];
        array_push($_SESSION['cart'],$_GET[item]);
        foreach ($_SESSION['cart'] as $result){
            echo $result."<br>\n";
        }
    }
?>