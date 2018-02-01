<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pattern</title>

	<style>
		.pattern{
			font-family: cursive;
		}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<h1>Level 1</h1>
	<h3>Expected Result:</h3>
	<div id="run1">
			
	</div>

	<div id="pattern" class="pattern">
		<textarea rows="20" cols="60" id="patt">
// write code here ...

</textarea>

<textarea rows="20" cols="60">
Hint:

Try to form Table element.
var y = '<table>'


// Include for loop.
// Add code to be printed in var y (eg: y+="*" or y+="<tr>") 

// Include '<tr></tr>' to form row
// Include '<td></td>' to form column
// Close table element

REQUIRED to write at end : result.innerHTML = y;
	</textarea>

		
	</div>

	<button id="btn">Submit</button>

	<div id="scriptContainer">
			
	</div>
	<h3>Actual Result:</h3>
	<div id="result">
			
	</div>

	<div id="output">
		
	</div>

	<script>
		
		jQuery(document).ready(function ($) {

		    var run1 = document.getElementById('run1');
		    // var run2 = document.getElementById('run2');

		$("#btn").click(function (){
			var r = document.getElementById('result');

			run();

		function run() {
			r.innerHTML = " ";
		    var inp = document.getElementById('patt');
		    var scriptText = inp.value;
		    var oldScript = document.getElementById('scriptContainer');
		    var newScript;
		    var x = "var result = document.getElementById('result');";

		    if (oldScript) {
		      oldScript.parentNode.removeChild(oldScript);
		    }

		    newScript = document.createElement('script');
		    newScript.id = 'scriptContainer';
		    newScript.text = x + ' ' + inp.value;
		    document.body.appendChild(newScript);
		    
		    let divList  = document.getElementsByTagName("div");
		    let d1 = document.getElementById("run1").childNodes;
		    let d2 = document.getElementById("result").childNodes;

	document.getElementById("output").innerHTML = '<h4>Matching : ' + d1[0].isEqualNode(d2[0])+'</h4><form action="" method="post"> <button type="submit" name="submit" class="ref">Done</button></form>';
		} 
		
		
	});

		var y = '<table>';
		
		for(var i = 0;i<=4;i++){
			y += '<tr>'
			for(var j = 0;j<=4;j++){
				if(i==0||i==4){
					y += "<td>*</td>";
				}
				else{
					if(j==0||j==4){
						y += "<td>*</td>";
					}
					else{
						y += "<td></td>";
					}
				}

			}
			y += "</tr>";
		}
		y += "</table>"

		run1.innerHTML = y;
	});
	</script>
		
	<?php
	 
		echo $id;
		if(isset($_POST['submit']))
		      {
			  $sql = "UPDATE levels SET level1 = 'true' WHERE ID = ".$id."";
			  $result = sqlsrv_query($conn, $sql);
			  if ($result == FALSE)
			  echo (sqlsrv_errors());

			  while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
		//            echo ($row['username'] . " " . $row['upassword'] . PHP_EOL);
				
			  }

			  sqlsrv_free_stmt($result);

			}
		?>
	

</body>
</html>
