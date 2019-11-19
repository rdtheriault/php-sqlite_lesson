<html>
  <head>
    <style>
      #peeps {
        color:red;
      }
    </style>
  </head>
  <body>
    <form action="runPost.php" method="post">
	    Name: <input type="text" name="name"><br>
	    E-mail: <input type="text" name="email"><br>
	    <input type="submit" value="Post">
	  </form>
	  <form action="runGet.php" method="get">
	    Name: <input type="text" name="name"><br>
	    E-mail: <input type="text" name="email"><br>
	    <input type="submit" value="Get">
	  </form>
  </body>
</html>
