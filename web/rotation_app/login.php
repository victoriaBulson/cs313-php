<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Gift Rotation</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body>
    
    <img id="gift_icon" src="img/gift.svg" alt="Gift Icon Designed by Pixel perfect from www.flaticon.com">
    <button onclick="window.location.href = 'create_group.php';">Sign Up</button>
    
    <hr>
    
    <form action="rotation.php" method="get">
        Username:<input type="text" name="username">
        Password:<input type="text" name="password">
        <button type="submit">Log In</button>
    </form>
  
</body>
</html>
