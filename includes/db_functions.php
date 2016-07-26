<?php
  function db_connect(){
    $conn = mysql_connect('internal-db.s214596.gridserver.com', 'db214596', 'Childish2!');
    if (! $conn){
      die ("Could Not Connect:" . mysql_error());
    }
    echo('it worked!')
  }
  function db_close(){
    mysql_close($conn);
  }
  function initial(){
    phpinfo();
  }
?>
