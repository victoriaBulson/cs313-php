
<?php
    echo "php";
    session_start();

    $statement = $db->prepare
        ("SELECT giver, reciever 
        FROM combos
        WHERE family =". $_GET[username]."
        AND year = ".$_GET[year]);
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {

    }
?>

