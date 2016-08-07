<?php
include('includes/db_functions.php');

// Connect to the Database
db_connect();

$position = $_POST['position'];

$info_query = "SELECT pi.mlb_name, pi.mlb_pos, pi.bats FROM player_info pi WHERE pi.mlb_pos = $position";



$info_result = db_query($info_query);
?>
