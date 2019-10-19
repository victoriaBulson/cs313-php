
<?php require "get_db.php";
session_start();
$_SESSION["username"] = $_GET[username];
echo ?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Chrsitmas Rotation</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body onload="populateYear()">
    <form action="display_rotation.php" method="get">
        <select id="year" name="year"></select>
        <button type=submit>Get Rotation!</button>
    </form>
    
    <?php include "display_rotation.php";?>
  
</body>
</html>
