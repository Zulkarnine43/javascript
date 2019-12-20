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
			<div onclick="liveproject()">Click here</div>
			<script type="text/javascript">
			function liveproject(){
				//alert(this);

				var a=200;
				this.x=300;
				this.y=400;
				this.z=function(){
					return this.x+this.y;
				}
			}

			var lp=new liveproject();
			document.write(lp.z());


			</script>
		</section>
		<footer class="footer">
			<h2>training with live project</h2>
		</footer> 
	</section>

</body>
</html>