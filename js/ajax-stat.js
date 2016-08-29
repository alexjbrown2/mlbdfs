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
          var p = json.data[a];
          var namelink = $('<li><a class="name' + p.playerName +' ">'+ p.playerName + '</a></li>');
          $('.result-box').append(namelink);
          }
        }
   });
 }
