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
	    $name = $_GET["name"];
      $email = $_GET["email"];
	    echo "Your name is ".$name." and your email is ".$email;
    ?>
  </body>
</html>
