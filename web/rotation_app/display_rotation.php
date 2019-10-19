
<?php
    echo "php";
    session_start();

    require "get_db.php";

    $statement = $db->prepare
        ("SELECT giver, reciever FROM combos");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
       $giver = $row['giver'];
	   $reciever = $row['reciever'];
        echo $giver;
    }
?>

