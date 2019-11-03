<?php
    session_start();
    $family= $_SESSION['username'];

    //Get family Name
    $query='SELECT name from accounts
            WHERE username=:family;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
    $stmt->execute();
    $name_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $family= $name_rows[0]['name'];
?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Edit Group</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">
    
    <link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body>
    <p>
        <?php echo 'Edit members of'. $family?>
    </p>
    
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