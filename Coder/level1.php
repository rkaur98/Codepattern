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

	<div id="run1">
			
	</div>

	<div id="pattern" class="pattern">
		<textarea rows="20" cols="50" id="patt">

        </textarea>

		<button id="btn">Submit</button>

		
		<div id="scriptContainer">
			
		</div>

		<div id="result">
			
		</div>
	</div>

	<script>
		
		jQuery(document).ready(function ($) {

		    var run1 = document.getElementById('run1');
		    // var run2 = document.getElementById('run2');

		$("#btn").click(function (){
			run();

		function run() {
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
		    
		    // x.id = 'result';
		    // x.text = '';
		    // document.getElementById('scriptContainer').append(x);
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

</body>
</html>
