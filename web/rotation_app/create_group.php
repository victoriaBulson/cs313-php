<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Add Group</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body>
    <form action="create_group.php" method="post">
        Username:<input type="text">
        Password:<input type="text">
        Group Name:<input type="text">
        Comment:<input type="text">
        <div id="couple_fields">
        <input type="image" name="add_couple_btn" style="width:1em;" src="img/gift_plus.svg"  alt="Plus Icon Designed by Freepik from www.flaticon.com" onclick="addCouple()"> Add Couple
        </div>
        
    </form>
</body>
</html>


Name 1:<input type="text" name="name1_couple">
Name 2:<input type="text" name="name2_couple">