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
	    $name = $_POST["name"];
      $email = $_POST["email"];
	    echo "Your name is ".$name." and your email is ".$email;
    ?>
  </body>
</html>
