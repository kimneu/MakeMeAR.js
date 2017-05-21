<?php
  session_start();
  if(isset($_SESSION['id'])) unset($_SESSION['id']);
  session_destroy();
  // require_once('assets/system/data.php');
?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello World</h1>
    <form class="" action="index.html" method="post">
      <input type="json" name="json" value="json"></input>
    </form>
  </body>
</html>
