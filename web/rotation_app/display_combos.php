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
    echo '<h1>'.$family.' gift rotation for '.$year.'</h1>';
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
    echo '<button onclick="window.location.href = \'rotation.php\' ">Back</button>';
?>