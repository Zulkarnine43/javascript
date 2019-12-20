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

      clearTimeOut();

      var timeout;

      function timeoutTrigger(){
      document.getElementById("show").innerHTML="The timeout has been Triggered";
      }

      function timeInit(){
      	timeout=setTimeout("timeoutTrigger()",3000);
      	 document.getElementById("show").innerHTML="The timeout has been Started";
      }



      function timeoutClear(){
      	clearTimeout(timeout)
      document.getElementById("show").innerHTML="The timeout has been Cleared";
      }


        </script>
       

       <div>
       	<input type="button" name="" value="Test timeout" onclick="timeInit()">
       		<input type="button" name="" value="Test timeout" onclick="timeoutClear()">
       </div>
       <div id=show>
       	
       </div>

		</section>
		<footer class="footer">
			<h2>training with live project</h2>
		</footer> 
	</section>

</body>
</html>