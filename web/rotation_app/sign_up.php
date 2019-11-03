<?php
    session_start();
    if (isset($_SESSION['unique_username'])){
        if ($_SESSION['invalidLogin'] == FALSE){
            echo 'This username is already in use. Please ';
        }
    }
?>
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
    <form method="post" action="save_new_account.php?action=new_account">
    Username:<input type="text" name="username" required><br>
    Password:<input type="text" name="password" required><br>
    Group Name:<input type="text" name="group_name" required><br>
    Comment:<input type="text" name="comment"><br>
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
    <button type="submit" class="new_field login_btn">Create Group</button>
    </form>
    <p style='color:red;'>
    <?php
    if (isset($_SESSION['unique_username'])){
        if ($_SESSION['invalidLogin'] == FALSE){
            echo 'This username is already in use. Please try again';
        }
    }
    ?>
    </p>
</body>
</html>