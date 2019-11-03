<?php
//get givers name
    $query='SELECT c.reciever, m.name
            FROM combos c JOIN members m
            ON c.giver=m.email
            WHERE c.year=:year
            AND m.family=:family;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':year', $year, PDO::PARAM_INT);
    $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
    $stmt->execute();
    $giver_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Get family Name
    $query='SELECT name from accounts
            WHERE username=:family;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
    $stmt->execute();
    $name_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
    <?php
    echo '<h1>'.$name_rows[0]['name'].' gift rotation for '.$year.'</h1>';
    foreach ($giver_rows as $giver_row){
        //get recievers name
        $reciever = $giver_row['reciever'];
        $query='SELECT m.name FROM combos c JOIN members m
                ON c.reciever=m.email
                WHERE m.email=:reciever;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':reciever', $reciever, PDO::PARAM_STR);
        $stmt->execute();
        $reciever_row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //display combo
        echo $giver_row['name']. '......'. $reciever_row[0]['name']. '<br>';
    }
    echo '<button class=\'welcome_btn\' onclick="window.location.href = \'rotation.php\' ">Back</button>';
    ?>
    
</body>
</html>