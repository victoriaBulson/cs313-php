<?php
$insert_command = 'INSERT INTO scripture (id, book, chapter, verse, content) VALUES($_POST['id'] , $_POST['book'], $_POST['chapter'], 
$_POST['verse'], $_POST['content'])';
$stmt = $this->pdo->prepare($insert_command);
?>