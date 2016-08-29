<?php
  require_once("includes.php");
  header_start('MLB DFS App');
  load_bootstrap();
  body_start();
?>
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
<?php
footer_start();
?>
