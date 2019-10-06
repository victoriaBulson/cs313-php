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
    
    <div id="cart"> Items In Your Cart: <br>
    <?php 
        foreach ($_SESSION['cart'] as $result){
            echo '<div class="cart_item"> <img src="pics/remove.png" alt="remove icon" style="width:50px; height:50px;"/>';
            echo "      ".$result."<br>\n</div>";
        }
    ?>
    
    </div>
    
</body>
    
</html>
