
<?php
    session_start();
    require 'db_connect.php';
    $db=get_db();

    $family = $_SESSION['username'];
    $year = $_GET['year'];

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
    
    echo 'queried';

    if(empty($rows)){
        //Calculate new combos.
        echo 'empty';
    }

    foreach ($giver_rows as $row){
        //get recievers name
        echo $row['reciever'];

    }


?>
