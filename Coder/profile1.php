<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Code Pattern</title>

	<?php
    include_once 'connect.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	
	<div id="container">
	<header>
		<h1>Code Pattern</h1>
	</header>

	<main class="index">
	    <a class="ref" href="level1.php">Level1</a>
	    <a class="ref" href="level2.php">Level2</a>
		
    
    
	<?php
	 
          $sql = "SELECT * FROM users WHERE ID = ".$_POST["uid"]." ";
          $result = sqlsrv_query($conn, $sql);
          if ($result == FALSE)
          echo (sqlsrv_errors());
		  
          while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
           echo ($row['username'] . PHP_EOL);
		
          }
	  
          sqlsrv_free_stmt($result);
     
        
	    ?>
	</main>
	</div>

</body>
</html>
