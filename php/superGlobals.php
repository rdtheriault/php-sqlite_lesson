/*
$_SERVER
$_FILES
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/
<html>
  <head>
    <style>
      #peeps {
        color:red;
      }
    </style>
  </head>
  <body>
    <?php 
      echo "Hello World - from: ".$_SERVER['SERVER_SOFTWARE'];
      echo "<h1 id='peeps'>".$_SERVER['HTTP_HOST']."</h1>";
      
      
    ?>
  </body>
</html>