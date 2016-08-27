<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MLB Players</title>
  <link rel='stylesheet' href='css/style.css' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>

    function get_info(pos){
      $.ajax({
        method:'POST',
        url:'/mlbdfs/includes/getinfo/infobyposition.php',
        data: {position:pos},

        dataType: 'text',
        success:function(data){
         var json = $.parseJSON(data);
         console.log(json);
         $('.result-box').html('');
         for(a=0;a<=json.data.length;a++){
           var namelink = $('<li><a class="name'+a+' ">'+json.data[a].playerName+'</a></li>');

           $('.result-box').append(namelink);
         }
        }
      })
    }

  </script>

</head>
<body>
<div class='container'>
  <select type="select" id="position" class="position-select" onchange='get_info(this.value)'>
    <option label="Select.." disabled="true">Select..</option>
    <option value="C">Catcher</option>
    <option value="1B">First Base</option>
    <option value="2B">Second Base</option>
    <option value="SS">Shortstop</option>
    <option value="3B">Third Base</option>
    <option value="OF">Outfield</option>

  </select>
  <div class='result-box'></div>
</div>
</body>
</html>
