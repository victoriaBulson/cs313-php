
<?php
    session_start();
    include "header.php";
    require "get_db.php";

    $statement = $db->prepare
        ("SELECT combos.giver, members.name
        FROM combos
        INNER JOIN members ON combos.giver = members.email");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        echo 'hello';

    }
?>

