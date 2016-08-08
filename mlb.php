<!DOCTYPE html>
<?php include('includes/db_functions.php'); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MLB Players</title>
  <link rel='stylesheet' href='css/style.css' />
  <script>
  $(function(){
    $(function get_info(){
      $.ajax({
        method:'POST',
        url:'includes/getinfo/infobyposition.php',
        data: {position='3B'},

        dataType: 'text',
        success:function(data){
         var json = $.parseJSON(data);
         console.log(json);
        }
      })
    })
  }

  )
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <?php
  db_connect();
?>
<div class='container'>
  <div class='resultBox'></div>
</div>
<?php
  db_close($GLOBALS['DBLink']);
  ?>
</body>
</html>
