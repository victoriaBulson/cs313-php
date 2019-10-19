
<?php
    session_start();
    include "header.php";
    require "get_db.php";

    $statement = $db->prepare
        ("SELECT members.name, combos.giver
        FROM members
        INNER JOIN members ON combos.giver = members.email");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        echo 'hello';
       $name = $row['members.name'];
        echo '<div>'. $name. '-----------'. $name. '<br>';
    }
?>

