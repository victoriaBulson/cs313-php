<?php session_start();?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Miracle Cart</title>
    <meta name="Description" content="Items In Cart">
    <meta name="Victoria Mears" content="Items In Cart">
    
    <link rel="stylesheet" type="text/css" href="shopping.css">
    <script src="shopping.js"></script>

</head>
    
<?php include 'header.php';?>
    
<body id="cart_page" onload="loadCart()">
    
    <div id="cart"> Items In Your Cart: <br><br>
    <?php 
        foreach ($_SESSION['cart'] as $result){
            echo 
                '<div class="cart_item" id="'.$result.'_div">
                <img src="pics/remove.png" alt="remove icon" id="'.$result.'" style="width:50px; height:50px;" onclick="remove(this)"/>';
            echo "      ".$result."<br>\n</div>";
        }
    ?>
        <a href="browse.php"><button>Return To Shop</button></a>
    
    </div>
    
</body>
    
</html>
