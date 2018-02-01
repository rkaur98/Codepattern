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
    
    <script>
      a = window.location.hash.substring(1);
      console.log(a);
    </script>  
	<?php
    
	 ?>

	</main>

</body>
</html>
