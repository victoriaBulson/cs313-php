
<?php
    echo 'FIRST!<br>';
    //Get combos from year
    $year = $_GET['year'];
    echo $year;
    $query='SELECT giver, reciever FROM combos WHERE year=:year;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':year', $year, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $rows[0]['giver'];
    if(empty($rows)){
        //Calculate new combos.
        echo 'empty';
    }
    echo 'HERE!';
    foreach ($rows as $row){
        echo '! Empty';
        echo $row['giver'];
    }
    statement


?>
