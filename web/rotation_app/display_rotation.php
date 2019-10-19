
<?php
    echo "php wow";
    session_start();

foreach ($db->query('SELECT username FROM accounts') as $row)
{
  echo $row['username'];
  echo '<br/>';
}
?>

