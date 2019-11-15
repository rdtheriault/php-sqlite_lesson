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
	    $myFirstVar = "Hello World";
      echo $myFirstVar;
      echo "<h1 id='peeps'>".$myFirstVar."</h1>";
	  
	    $testArray[] = array('test1','test2');
	      foreach($testArray as $test){
	      echo $test;
	    } 

    ?>
  </body>
</html>
