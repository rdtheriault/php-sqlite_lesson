<html>
  <head>
    <style>
      #peeps {
        color:red;
      }
	    .color{
		    color:green
	    }
    </style>
  </head>
  <body>
    <?php 
	    $myFirstVar = "Hello World";
      echo $myFirstVar;
      echo "<h1 id='peeps'>".$myFirstVar."</h1>";
	  
	    $testArray = array('test1','test2');
	    echo "<ol>";
	    foreach($testArray as $test){
	      echo "<li class='color'>".$test."</li>";
	    } 
	    echo "</ol>";
	  
    ?>
  </body>
</html>
