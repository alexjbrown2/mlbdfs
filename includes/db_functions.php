<?php
  function db_connect(){
    $conn = mysqli_connect('internal-db.s214596.gridserver.com', 'db214596', 'Childish2!', 'db214596_al3xbrown');
    if (!$conn){
      die ("Could Not Connect:" . mysqli_error());
    }
    $GLOBALS['DBLink'] = $conn;

  }


  function db_close(){
    mysqli_close($GLOBALS['DBLink']);
  }

  function db_query($Query){


		if(function_exists('mysqli_connect')){
			$Result = mysqli_query($GLOBALS['DBLink'], $Query);
		}else{
			$Result = mysql_query($Query, $GLOBALS['DBLink']);
		}

		if(!$Result){
      echo 'Failed.';
		} else {
			return $Result;
		}
	}

  function row_fetch_assoc($Result){
  if(function_exists('mysqli_connect')){
    $FetchRow = mysqli_fetch_assoc($Result);
  }else{
    $FetchRow = mysql_fetch_assoc($Result);
  }

  return $FetchRow;
}
?>
