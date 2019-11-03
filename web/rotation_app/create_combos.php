<?php
    //Query intial_list
    $query='SELECT initial_list FROM initial_lists
            WHERE family=:family
            ORDER BY year_initialized DESC;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
    $stmt->execute();
    $initialized_years = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $initial_list = $initialized_years[0]['initial_list'];
    
    //calculate offset
    $first_year_offset = 2;
    $years_used = $year - $year_initialized;
    $offset = $first_year_offset + $years_used;
    
    //convert initial_list to array
    $initial_list = substr($initial_list, 1, -1);
    $initial_list = explode (",", $initial_list);

    //Insert combos
    $mod = sizeof($initial_list);
    $index = 0;
    foreach($initial_list as $member){
        $reciever_index = ($index + $offset) % $mod;
        $reciever = $initial_list[$reciever_index];
        $query='INSERT INTO combos (giver, reciever, year)
                VALUES (:giver, :reciever, :year);';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':giver', $member, PDO::PARAM_STR);
        $stmt->bindvalue(':reciever', $reciever, PDO::PARAM_STR);
        $stmt->bindvalue(':year', $year, PDO::PARAM_STR);
        $stmt->execute();
        $index++;
    }


?>