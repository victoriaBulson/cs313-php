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
    
    <form action="rotation.php" method="post">
    Username:<input type="text">
    Password:<input type="text">
    Group Name:<input type="text">
    Comment:<input type="text">
    <div class="add_field" id="couple_fields">
        <div id="couple_btn" onclick="addCouple()">
        <img style="width:1em;" src="img/gift_plus.svg"  alt="Plus Icon Designed by Freepik from www.flaticon.com"/> Add Couple
        </div>
    </div>
    <div class="add_field" id="indiv_fields">
        <div id="indiv_btn" onclick="addIndiv()">
        <img style="width:1em;" src="img/gift_plus.svg"  alt="Plus Icon Designed by Freepik from www.flaticon.com"/> Add Individual
        </div>
    </div>
    <button typ="submit">Create Group</button>
    </form>
    
</body>
</html>