<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Signup CodePattern</title>

	<?php
    include_once 'connect.php';
    ?>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<header>
		<h1>Code Pattern</h1>
	</header>
    
	<main class="index">
  <h3>Sign up</h3>
    <form action="" method="post">

        <input type="text" name="uname" required>
        <input type="password" name="upass" required>

        <button type="submit" name="submit">Signup</button>
	    <p>or</p>
	    <a class="ref" href="index.php">Back to Login Page</a>

    </form>

	<?php
	  if(isset($_POST['submit']))
      {
          $sql = "INSERT INTO users (username, upassword) VALUES ('".$_POST["uname"]."','".$_POST["upass"]."')";
          $result = sqlsrv_query($conn, $sql);
          if ($result == FALSE)
          echo (sqlsrv_errors());
          
          while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
           echo ($row['username'] . " " . $row['upassword'] . PHP_EOL);
          }
          sqlsrv_free_stmt($result);
     
        }
	    ?>

	</main>

</body>
</html>
