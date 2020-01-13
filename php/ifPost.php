<html>
  <head>
    <style>
      #peeps {
        color:red;
      }
    </style>
  </head>
  <body>
		<form action="ifPost.php" method="post">
		Num1 <input type="text" name="num1"><br>
		Num2 <input type="text" name="num2"><br>
		<select name="type">
		  <option>Add</option>
		  <option>Subtract</option>
		</select>
		<input type="submit" value="Calculate">
	  </form>
  
  
    <?php 
	  function doSomething() {
		  echo "Hello World";
		  echo "<br>";
		  echo "<img src ='' width='500px' height='500px'>";
	  }
	  
	  if($_SERVER["REQUEST_METHOD"] == 'POST'){
			if (is_numeric($_POST["num1"])  && is_numeric($_POST["num2"]) ){
				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				echo $num1+$num2;
			}
			else
			{
				echo "Dude, that is not a number";
			}
	  }
	  
	  
    ?>
  </body>
</html>