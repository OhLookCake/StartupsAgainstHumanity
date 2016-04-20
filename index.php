<!DOCTYPE HTML>
<html>
<head>
<title>Startups Against Humanity</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				*/
		$().UItoTop({ easingType: 'easeOut' });
});
</script>

</head>
<body>
<!-- main idea  -->
<div class="bodycontent">
	<div class = "box">
	<div class="container">
		<div class="logo">
			<h4><a href="index.html" class="logo">
			Startups Against Humanity
			</a></h4>
		</div>	
		
		<div class="mainidea">
			<h2>
			 <?php
				$cardfilename = 'wcards.txt';
				$startupfilename = 'startups.txt';

				$cardfile = file($cardfilename); 
				$card = $cardfile[rand(0, count($cardfile) - 1)];
				$card = str_replace(array("\n", "\r"), '', $card);

				$startupfile= file($startupfilename); 
				$startup = $startupfile[rand(0, count($startupfile) - 1)];
				$startup= str_replace(array("\n", "\r"), '', $startup);
				
				
				echo "It's like $startup for $card";
				
			 ?>
			</h2>
			<h3>
			<a href="javascript:window.location.reload()">Moar!</a>
			</h3>
		</div>
	</div>
	</div>
</div>
<!-- /main idea -->
<!-- arrow thing  -->
<div class="scroller">
	<a href="#rulesnstuff" class="scroll"><img src="images/downtriangle.png" class="img-responsive" alt=""></a>
</div>
<!-- /arrow thing  -->
<!-- rules and other stuff -->
<div class="rulesnstuff" id="rulesnstuff">
	<div class = "box">
	<div class="container">
		<div class="rules">
			<h3 class = "sectionheading">How To Play</h3>
			<h4>
			<p> 
			With a startup for just about anything out there, we decided to mash the popular "It's like x for y" elevator pitch with cards from Cards Against Humanity. Some people find it entertaining to just read the pitch and giggle silently to themselves.
			<p>
			If you're in a group, it's more fun if one person comes up with a name and a business model for the startup. Other members of the group indicate their level of amusement by announcing how much hypothetical money they would be willing to invest in this hypothetical startup.
			<p>
			This is not a complicated game. 
			</h4>
		</div>
		<div class="legal">
			<h3  class = "sectionheading"> Legal Stuff </h3>
			<h4>
			<p>
			Second part of the sentence sourced from <a href = "http://cardsagainsthumanity.com/wcards.txt">Cards Against Humanity</a>. However, this page is neither endorsed by, nor affiliated with CAH. Although, it sure would be nice to get some validation from those guys. Just a thumbs up gif or some sort of acknowledgement, y'know?
			<p>
			This derivative work is licensed under the same <a href = "https://creativecommons.org/licenses/by-nc-sa/2.0/">Creative Commons BY-NC-SA 2.0 license</a>.
			<p>
			The companies named are their own trademarks. Probably. 
			<p>
			Created by <a href="https://twitter.com/OhLookCake">Eeshan Malhotra </a>
			</p>
			</h4>
		</div>
	</div>
	</div>
</div>
<!-- /rules and other stuff  -->
<!-- go to top -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!--/go to top -->





