<?php
  function db_connect(){
    $conn = mysqli_connect('internal-db.s214596.gridserver.com', 'db214596', 'Childish2!', 'db214596_al3xbrown');
    if (! $conn){
      die ("Could Not Connect:" . mysql_error());
    }
    $GLOBALS['DBLink'] = $conn;
    echo 'it worked!';
  }


  function db_close(){
    mysqli_close($GLOBALS['DBLink']);
  }


?>
