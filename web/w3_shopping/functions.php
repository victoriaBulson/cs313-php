<?php

    if($_GET['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        echo $_SESSION['cart'][1];
        array_push($_SESSION['cart'],$_GET[item]);
        for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
     echo '<td>'.$_SESSION['cart'][$i].'</td>';
     }
    }
?>