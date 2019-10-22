<?php

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


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