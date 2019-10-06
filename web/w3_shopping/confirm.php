<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Miracle Confirmation</title>
    <meta name="Description" content="Confirmation of Purchase">
    <meta name="Victoria Mears" content="Confirmation of Purchase">

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
    
    <br><br>Will be delivered to:
    <?php
        echo $_POST["street_address"]."<br>".$_POST["city"].", ".$_POST["state"]
    ?>
</body>
    
</html>
