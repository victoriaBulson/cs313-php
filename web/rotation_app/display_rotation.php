
<?php
    //Get combos from year
    $year = $_GET['year'];
    query='SELECT year, giver, reciever FROM combos WHERE year=:year;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':year', $year, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(empty($rows)){
        //Calculate new combos.
    }
    
    foreach ($rows as $row){
        echo $row['giver'];
    }
    statement


?>
