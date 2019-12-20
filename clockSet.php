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
			<div>
				<span id=hour></span>
				<span id=minute></span>
				<span id=second></span>
			</div>
		
        <script type="text/javascript">

        	function clock(){
          
           var date = new Date();
           var hour=date.getHours();
           var minute=date.getMinutes();
            var second=date.getSeconds();
          //document.write(date);

          document.getElementById("hour").innerHTML=hour;
           document.getElementById("minute").innerHTML=minute;
            document.getElementById("second").innerHTML=second;
        }

        setInterval(clock,1000);
        </script>
     

		</section>
		<footer class="footer">
			<h2>training with live project</h2>
		</footer> 
	</section>

</body>
</html>