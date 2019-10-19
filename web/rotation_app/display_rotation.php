
<?php
    echo "php wow";
    session_start();

    $statement = $db->prepare
        ("SELECT giver, reciever 
        FROM combos
        WHERE family =". $_SESSION[username]."
        AND year = ".$_GET[year]);
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        echo 'HEY!';

    }
?>

