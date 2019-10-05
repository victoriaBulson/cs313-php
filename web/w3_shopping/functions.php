<?php
    echo "ADDED TO CART!";
    if($_POST['action'] == 'add_to_cart') {addToCart();}

    function addToCart(){
        echo "ADDED TO CART";
    }
?>