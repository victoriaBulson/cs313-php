
<?php
    echo "php wow";
    session_start();

    $statement = $db->prepare
        (SLECT * FROM account);
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        echo $row[username];
    }
?>

