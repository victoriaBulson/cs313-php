
<?php 
    //get family name
    session_start();
    require 'db_connect.php';
    $db=get_db();
    $query='SELECT name FROM accounts WHERE username=:username;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':username', $_SESSION['username'], PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $family_name = $rows[0]['name'];
    
?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Chrsitmas Rotation</title>
    <meta name="Description" content="Gift Rotation">
    <meta name="Victoria Mears" content="Gift Rotation">
    
    <link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="rotation.css">
    <script src="rotation.js"></script>
</head>
<?php include 'header.php';?>
<body onload="populateYear()">
    <?php echo '<h1>'. $family_name .'</h1>'?>
    <form action="display_rotation.php" method="get">
        <select id="year" name="year"></select>
        <button type=submit>Get Rotation!</button>
    </form>
    
    
  
</body>
</html>
