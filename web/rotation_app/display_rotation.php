
<?php
    echo "php";
    session_start();

    require "get_db.php";

    $statement = $db->prepare
        ("SELECT giver, reciever 
        FROM combos
        WHERE family =". $_SESSION[username]."
        AND year = ".$_GET[year]);
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
       $giver = $row['giver'];
	   $reciever = $row['reciever'];
        echo "<p>$giver. -> $reciever:<p>";
    }
?>

