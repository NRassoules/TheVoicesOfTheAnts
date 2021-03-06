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
				<?php include 'views/navbar.php';?>
				<h1 class="bringToFront"><a href="http://www.thevoicesoftheants.com">Changing Currents</a></h1>
				<div class="jumbotron" id="frontPage">
					<div class="container" id="bar">
						<div id="redCircle"></div>
						<div id="yellowCircle"></div>
						<div id="greenCircle"></div>
					</div>
					<div id="triggerHide">
						<h2 class="currentsText">Topics</h2>
						<div class="well currentsWell">
							<div class="well currentsWell hvr-radial-out topicButtonFirst">
								<h2 class="topicButtonText">Fashion</h2>
							</div> 
							<div class="well currentsWell hvr-radial-out topicButton">
								<h2 class="topicButtonText">Music</h2>
							</div>
							<div class="well currentsWell hvr-radial-out topicButton">
								<h2 class="topicButtonText">Art</h2>
							</div>
							<div class="well currentsWell hvr-radial-out topicButton">
								<h2 class="topicButtonText">Photos</h2>
							</div>
							<div class="well currentsWell hvr-radial-out topicButton">
								<h2 class="topicButtonText">Global</h2>
							</div>
							<div class="well currentsWell hvr-radial-out topicButton">
								<h2 class="topicButtonText">Culinary</h2>
							</div>
						</div>
					</div>
					<h2 class="currentsText black trigger">Top Post Across All Topics:</h2>
				</div>
			</section>
		</section>
	</body>
	<script type="text/Javascript">
			$(document).ready(function(){
				$(".bringToFront").hide().fadeIn(2000);
				$(".bringToFront").animate({marginTop : "120px"} , 1000);

				$(".trigger").click(function(){
					$("#triggerHide").fadeOut(1000);
				});
			});
	</script>
</html>