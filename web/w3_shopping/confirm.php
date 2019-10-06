<?php session_start();?>
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
    Your Items:<br><br>
    <?php 
        foreach ($_SESSION['cart'] as $result){
            echo $result."<br>\n";
        }
    ?>
    
    Will be delivered to:
    <?php
        echo $_POST["street_address"]."<br>".$_POST["city"].", ".$_POST["state"]
    ?>
</body>
    
</html>
