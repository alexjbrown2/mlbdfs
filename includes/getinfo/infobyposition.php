<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . "/mlbdfs/includes.php";

// Connect to the Database
db_connect();

$position = "'" . $_POST['position'] . "'";

$concat_string = '';

if ($position === '1B'){
  $concat_string = 'info.mlb_pos = "1B"';
}
if ($position === '2B'){
  $concat_string = 'info.mlb_pos = "2B"';
}
if ($position === 'SS'){
  $concat_string = 'info.mlb_pos = "SS"';
}
if ($position === '3B'){
  $concat_string = 'info.mlb_pos = "3B"';
}
if ($position === 'OF'){
  $concat_string = 'info.mlb_pos = "LF" OR info.mlb_pos = "CF" OR info.mlb_pos = "RF" OR info.mlb_pos = "OF"';

}
/*$info_query = "SELECT pi.mlb_name, pi.mlb_pos, pi.bats FROM player_info pi WHERE pi.mlb_pos = $position";

$playerName = null;
$playerPosition = null;
$playerBats = null;
$playerTeam = null;
$playerTeamLong = null;
$playerThrows = null;
$playerFGID = null;
$playerstat = array();

$info_result = db_query($info_query);

$stat_query = "SELECT stat.id From two_week stat WHERE stat.id = $playerFGID";

$stat_result = db_query($stat_query);

if(!$stat_result) return_error_message('nope.');

while ($row = row_fetch_assoc($stat_result)){
  $statGames = $row['G'];
  $statPlate = $row['PA'];
  $statHR = $row['HR'];
  $statRuns = $row['R'];
  $statRBI = $row['RBI'];
  $statSB = $row['SB'];
  $statWalkPct = $row['BB%'];
  $statStrikeoutPct = $row['K%'];
  $statISO = $row['ISO'];
  $statBABIP = $row['BABIP'];
  $statAVG = $row['AVG'];
  $statOBP = $row['OBP'];
  $statSLG = $row['SLG'];
  $statWOBA = $row['wOBA'];
  $statWRCPlus = $row['wRC+'];
  $statWAR = $row['WAR'];
}
*/

$sql = "SELECT info.mlb_name, info.mlb_pos, info.throws, info.mlb_team, info.mlb_team_long, info.fg_name, stat.playerid, stat.G, stat.PA, stat.HR, stat.R, stat.RBI, stat.SB, stat.ISO, stat.BABIP, stat.AVG, stat.wOBA, stat.OBP, stat.SLG, stat.WAR
              FROM player_info info
              LEFT JOIN two_week stat
              ON info.fg_id = stat.playerid
              WHERE . $concat_string . 
              ";
//Global variables for results
$results = array();
$playerName =null;
$playerPos =null;
$playerThrows =null;
$playerTeamShort =null;
$playerTeamLong =null;
$playerFGID = null;
$statGames = null;
$statPlate = null;
$statHR = null;
$statRuns =null;
$statRBI = null;
$statSB = null;
$statWalkPct = null;
$statStrikeoutPct = null;
$statISO =null;
$statBABIP = null;
$statAVG = null;
$statOBP = null;
$statSLG =null;
$statWOBA = null;
$statWRCPlus = null;
$statWAR = null;

$res = db_query($sql);
echo $sql;
if(!$res) echo $position;

while ($row = row_fetch_assoc($res)){
  $playerName = $row['mlb_name'];
  $playerPos = $row['mlb_pos'];
  $playerThrows = $row['throws'];
  $playerTeamShort = $row['mlb_team'];
  $playerTeamLong = $row['mlb_team_long'];
  $playerFGID = $row['fg_id'];
  $statGames = $row['G'];
  $statPlate = $row['PA'];
  $statHR = $row['HR'];
  $statRuns = $row['R'];
  $statRBI = $row['RBI'];
  $statSB = $row['SB'];
  $statISO = $row['ISO'];
  $statBABIP = $row['BABIP'];
  $statAVG = $row['AVG'];
  $statOBP = $row['OBP'];
  $statSLG = $row['SLG'];
  $statWOBA = $row['wOBA'];
  $statWAR = $row['WAR'];
  $tempArray = array(
  'playerName'  => $playerName,
  'playerPos'  => $playerPos,
  'playerThrows'  => $playerThrows,
  'playerTeam'  => $playerTeamShort,
  'playerTeamLong'  => $playerTeamLong,
  'playerFGID'  => $playerFGID,
  'statGames'  => $statGames,
  'statPlate'  => $statPlate,
  'statHR'  => $statHR,
  'statRuns'  => $statRuns,
  'statRBI'  => $statRBI,
  'statSB'  => $statSB,
  'statISO'  => $statISO,
  'statBABIP'  => $statBABIP,
  'statAVG'  => $statAVG,
  'statOBP'  => $statOBP,
  'statSLG'  => $statSLG,
  'statWOBA'  => $statWOBA,
  'statWAR'  => $statWAR
  );
  array_push($results, $tempArray);
}

//Form json-response
echo json_encode($results);
?>
