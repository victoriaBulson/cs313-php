<?php
    echo $_GET[action];
    if($_GET['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        array_push($_SESSION['cart'],$_GET[item]);
        foreach ($_SESSION['cart'] as $result){
            echo $result."<br>\n";
        }
    }
?>