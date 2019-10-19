<?php
    $statement = $db->prepare
        ("SELECT giver, reciever 
        FROM combos
        WHERE family =". $_POST[username]."
        AND year = ".$_POST[year]);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    $giver = $row['giver']
	$reciever = $row['reciever'];
	echo "<p>$giver -> $reciever:<p>";
}

/>
    
