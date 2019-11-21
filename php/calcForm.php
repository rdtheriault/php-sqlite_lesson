<html>
  <head>
    <style>
      #peeps {
        color:red;
      }
    </style>
  </head>
  <body> 
	  <form action="runCalc.php" method="get">
		  Num1 <input type="text" name="num1"><br>
		  Num2 <input type="text" name="num2"><br>
		  <select name="type">
		    <option>Add</option>
		    <option>Subtract</option>
		  </select>
		  <input type="submit" value="Calculate">
	  </form>
  </body>
</html>
