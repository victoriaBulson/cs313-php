
<?php
    session_start();
    include "header.php";
    require "get_db.php";

    $statement = $db->prepare
        ("SELECT combos.giver, members.name
        FROM combos
        INNER JOIN members ON combos.giver = members.email");
    $statement->execute();

    echo '<div class="list">';
    echo '<div class="givers">';
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
       $name = $row['name'];
        echo $name. '<br>';
    }
    echo '</div>';

    $statement = $db->prepare
        ("SELECT combos.reciever, members.name
        FROM combos
        INNER JOIN members ON combos.reciever = members.email");
    $statement->execute();

    echo '<div class="recievers">';
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
       $name = $row['name'];
        echo $name. '<br>';
    }
    echo '</div>';
    echo '</div>';
?>

