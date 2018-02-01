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

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<header>
		<h1>Code Pattern</h1>
	</header>

	<main class="index">
    <a class="ref" href="level1.php">Level1</a>
    <a class="ref" href="level2.php">Level2</a>
    
<!--     <script>
      a = window.location.hash.substring(1);
      console.log(a);
      document.getElementById('uid').innerHTML = a;
    </script>   -->
	<?php
		$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		echo $url; // Outputs: Full URL
		if( strpos( $url, "#" ) === false ) echo "NO HASH !";
   		else echo "HASH IS: #".explode( "#", $url )[1]; 
// 	$url=parse_url("http://domain.com/site/gallery/1#photo45 ");
// 	echo $url["fragment"];
// 	  $sql = "SELECT * FROM users WHERE ID = ".$_POST["uname"]." ";
//           $result = sqlsrv_query($conn, $sql);
//           if ($result == FALSE)
//           echo (sqlsrv_errors());
		  
//           while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
//            echo ($row['username'] . PHP_EOL);
		
//           }
	  
//           sqlsrv_free_stmt($result);
    
	 ?>

	</main>

</body>
</html>
