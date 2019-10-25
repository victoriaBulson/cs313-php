<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Add Group</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">
    
    <link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body>
    
    <form method="post" onsubmit="saveAccount()">
    Username:<input type="text" name="username"><br>
    Password:<input type="text" name="password"><br>
    Group Name:<input type="text" name="group_name"><br>
    Comment:<input type="text"><br>
    <div id="couple_fields">
        <div class="add_field" id="couple_btn" onclick="addCouple()">
        <img style="width:1em;" src="img/gift_plus.svg"  alt="Plus Icon Designed by Freepik from www.flaticon.com"/> Add Couple
        </div>
    </div>
    <div id="indiv_fields">
        <div class="add_field" id="indiv_btn" onclick="addIndiv()">
        <img style="width:1em;" src="img/gift_plus.svg"  alt="Plus Icon Designed by Freepik from www.flaticon.com"/> Add Individual
        </div>
    </div>
    <button type="submit" class="new_field">Create Group</button>
    </form>
    
</body>
</html>