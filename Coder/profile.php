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
<body class="profile">
	<script>
		jQuery(document).ready(function($){
		$( ".start" ).click(function() {
			$(this).parent().toggleClass("hide");
			$(this).parent().next().toggleClass("hide");
		});
    	
		});
	</script>
    
    <form action="profile1.php" method="post">

        <input type="text" name="uid" id="uid" class="hide">
	
	    <script>
	      a = window.location.hash.substring(1);
	      console.log(a);
	      document.getElementById('uid').value = a;
	    </script>  
	    
        <button type="submit" name="submit" class="start">Start</button>
	 
    </form>
	

</body>
</html>
