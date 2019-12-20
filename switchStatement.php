<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>
</head>
<body>
	<section class="content">
		<header class="header">
			<h2>Javascript Fundamentals</h2>
		</header>
		<section class="maincontent">
			

			<input type="text" name="" id=ctext>

			<div id="show"></div>
			<button onclick="check()">Check</button>


        <script type="text/javascript">
        	
      function check(){
      	var txt;
      	var coding = document.getElementById('ctext').value;

      	switch(coding){
      		case 'java':
      		txt="I love java";
      		break;
      		case 'php':
      		txt="I love php";
      		break;
      		case 'c#':
      		txt="I love c#";
      		break;

      		default:
      		txt="Unkonwn";
      	}
      	document.getElementById("show").innerHTML=txt;
      }


        </script>
		</section>
		<footer class="footer">
			<h2>training with live project</h2>
		</footer> 
	</section>

</body>
</html>