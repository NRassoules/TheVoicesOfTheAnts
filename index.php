<!DOCTYPE html>
<html>
	<head>
		<?php
			require "views/links.php";
		?>
	</head>
	<body>
		<section id="imgSection">
			<section id="fillSection">
				<h1 class="bringToFront">Changing Currents</h1>
				<div class="jumbotron" id="frontPage">
					<h2 class="currentsText">Topics</h2>
				</div>
			</section>
		</section>
		
	</body>
	<script type="text/Javascript">
			$(document).ready(function(){
				$(".bringToFront").hide().fadeIn(2000);
				$(".bringToFront").animate({marginTop : "70px"} , 1000);
			});
	</script>
</html>