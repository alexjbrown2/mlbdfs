<!DOCTYPE html>
<?php include('includes/db_functions.php'); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MLB Players</title>
</head>
<body>
  <?php
  db_connect();
  $sql = "SELECT mlb_name, mlb_pos, bats FROM player_info";
  $result = mysqli_query($GLOBALS['DBLink'], $sql);

  if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
      echo "name: " . $row['mlb_name'] . " - Position: " . $row['mlb_pos'] . " Bats: " . $row['bats'] . "<br />";
    }
  } else {
    echo "0 results";
  }

  db_close($GLOBALS['DBLink']);
  ?>
</body>
</html>
