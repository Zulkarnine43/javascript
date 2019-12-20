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
		
        <script type="text/javascript">
        	

     function totalNum(){
     	this.x=20;
     	this.y=function(){
     		return this.x+this.x;

     	}
     }
     totalNum.prototype.a=200;
     var tn=new totalNum();
     document.write(tn.a);


        </script>
		</section>
		<footer class="footer">
			<h2>training with live project</h2>
		</footer> 
	</section>

</body>
</html>