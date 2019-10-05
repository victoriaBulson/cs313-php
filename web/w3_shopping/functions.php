<?php
    echo "Hello world!";
    if($_GET['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        array_push($_SESSION['cart'],$_GET[item]);
        foreach ($_SESSION['cart'] as $result){
            echo $result['id']."<br>\n";
        }
    }
?>