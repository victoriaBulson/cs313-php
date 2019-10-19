<?php
    $statement = $db->prepare
        ("SELECT giver, reciever 
        FROM combos
        WHERE family =". $_POST[username]."
        AND year = ".$_POST[year]);
$statement->execute();
/>
    
