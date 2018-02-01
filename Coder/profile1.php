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
	    
		
    
    <h2>Welcome 
		<?php
	 $id = $_POST["uid"];
          $sql = "SELECT * FROM users WHERE ID = ".$_POST["uid"]." ";
          $result = sqlsrv_query($conn, $sql);
          if ($result == FALSE)
          echo (sqlsrv_errors());
		  
          while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
           echo ($row['username'] . PHP_EOL);
		
          }
	  
          sqlsrv_free_stmt($result);
     
        
	    ?>
	    </h2>
		
	<form action="level1.php" method="post">

        	<input type="text" name="uid" id="uid" class="hide" value="<?php echo $_POST["uid"]; ?>">
	    
        	<button type="submit" name="submit" class="ref">Level1</button>
	 
    	</form>
	    
	    <a class="ref" href="level1.php?<?php echo $id ?>">Level1</a>
	    <a class="ref" href="level2.php">Level2</a>

	</main>
	</div>

</body>
</html>
