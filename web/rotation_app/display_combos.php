<?php
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
?>