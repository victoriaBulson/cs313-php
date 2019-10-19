
<?php
    echo "php";
    session_start();
    echo $_SESSION[username];
    echo $_GET[year];

    $statement = $db->prepare
        ("SELECT giver, reciever 
        FROM combos
        WHERE family =". $_GET[username]."
        AND year = ".$_GET[year]);

?>

