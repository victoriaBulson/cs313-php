<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Hello World</title>
    <meta name="Description" content="Hello WOrld">
    <meta name="Victoria Mears" content="Hello World">

    <link rel="stylesheet" type="text/css" href="shopping.css">
    <script src="shopping.js"></script>
</head>

<?php include 'header.php';?>
<body>
    <?php 
        foreach ($_SESSION['cart'] as $result){
            echo "You have Purchased: <br>".$result."<br>\n";
        }
    ?>
</body>
    
</html>
