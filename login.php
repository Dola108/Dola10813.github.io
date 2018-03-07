<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="theme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>1Tag</title>
</head>
<body>
	<div>
		<?php
			echo 'Your name is ' . $_POST['name'];
		?>
	</div>
	<div class="top-container">
	
	<h1>Scroll Down</h1>
	<p>Scroll down to see the sticky effect.</p>
	</div>

	<div class="header" id="myHeader">
	  <h2>1Tag</h2>
	  <button type="button" onclick="document.active("http://localhost/proj/1Tag.html")" class="button2" style="margin-right: 5%; 
		        															padding: 6px 16px;
		        															font-size: 14px;">Log out</button>
	</div>

	<div class="content">
	  <h3>On Scroll Sticky Header</h3>
	  
	</div>

	<script>
	window.onscroll = function() {myFunction()};

	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    header.classList.add("sticky");
	  } else {
	    header.classList.remove("sticky");
	  }
	}
	</script>
</body>
</html>
