<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Gift Rotation</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">
    
    <link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body>
    
    
    <form action="rotation.php" method="get">
        Username<br><input type="text" name="username"><br>
        Password<br><input type="text" name="password"><br>
        <button type="submit">Log In</button>
    </form>
  
    <button onclick="window.location.href = 'create_group.php' ">Sign Up</button>
    
</body>
</html>
