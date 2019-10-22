<?php
echo '<form action=/ta06b.php method=post>';
echo 'ID: <input type=text name=id><br>';
echo 'Book: <input type=text name=book><br>';
echo 'Chapter: <input type=text name=chapter><br>';
echo 'Verse: <input type=text name=verse><br>';
echo 'Content: <input type=textarea name=content><br>';

foreach ($db->query('SELECT name FROM topic') as $row)
{
	$topic = $row[name];
  echo '<input type=checkbox name=topic[] value='. $topic .'>' . $topic .'<br>';
}

echo '<input type=submit value=Submit>';
echo '</form>';
?>