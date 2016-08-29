<?php
function header_start($Title){
  echo  "<!DOCTYPE html>";
  echo  "<html lang='en'>";
  echo  "<head>";
  echo  "<meta charset='UTF-8'>";
  echo  "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
  echo  "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
  echo  "<title>$Title</title>";
  echo  "<link rel='stylesheet' href='css/style.css' />";
  echo  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>";

}

function load_bootstrap(){
  echo "<link href='css/bootstrap/css/bootstrap.min.css' rel='stylesheet' />";
  echo "<link href='css/bootstrap/css/bootstrap-theme.min.css' rel='stylesheet' />";
  echo "<script type='text/javascript' src='js/bootstrap.min.js'></script>";
}

function body_start(){
  echo  "</head>";
  echo  "<body>";
}

function footer_start(){
  echo "</body>";
  echo "</html>";
}
?>
