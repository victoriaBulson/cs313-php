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

$insert_scripture = 'INSERT INTO scriptures (id, book, chapter, verse, content) VALUES($_POST[id] , $_POST[book], $_POST[chapter], 
$_POST[verse], $_POST[content])';
$stmt = $this->pdo->prepare($insert_scripture);


if(isset($_POST['topic'])) {
    foreach($_POST['topic'] as $topic) {
    		if (isset($topic)) {
    			$topic_id = 'SELECT id FROM topic WHERE name=' . $topic;
        	$insert_tg = 'INSERT INTO topicalguide (scripture_id) VALUES($_POST['id'])';
        	$stmt = $this->pdo->prepare($insert_tg);
        }
    }
}

?>