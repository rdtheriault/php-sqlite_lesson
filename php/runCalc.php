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
	    $num1 = $_GET["num1"];
      $num2 = $_GET["num2"];
	    $type = $_GET["type"];
	    $answer = 0;
	    if ($type == "Add"){
		    $answer = $num1+$num2;
	    }
	    else {
		    $answer = $num1-$num2;
	    }
	    echo "Your total is ".$answer;
    ?>
  </body>
</html>
