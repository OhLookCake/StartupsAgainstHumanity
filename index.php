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
			<?php
				$cardfilename = 'wcards.txt';
				$startupfilename = 'startups.txt';

				$cardfile = file($cardfilename); 
				$card = $cardfile[rand(0, count($cardfile) - 1)];
				$card = str_replace(array("\n", "\r"), '', $card);

				$startupfile= file($startupfilename); 
				$startup = $startupfile[rand(0, count($startupfile) - 1)];
				$startup= str_replace(array("\n", "\r"), '', $startup);
				
				echo "<h2>";
				echo "It's like $startup for $card";
				echo "</h2>";
				echo "<div class = \"sharebuttons\">";
				echo "<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-text=\"It's like $startup for $card\" data-hashtags=\"StartupsAgainstHumanity\" data-dnt=\"true\">Tweet</a>";
				echo "&nbsp;&nbsp;";
				echo "<iframe src=\"https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.sagainsth.com&layout=button&mobile_iframe=true&width=57&height=20&appId\" width=\"57\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>";
				echo "</div>";

			?>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			<h3>
			<a href="javascript:window.location.reload()">More!</a>
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
			Hit 'More!' to get a new one. This is not a complicated game. 
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
			Created by <a href="http://www.eeshanmalhotra.com">Eeshan Malhotra</a>
			</p>
			</h4>
		</div>
	</div>
	</div>
</div>
<!-- /rules and other stuff  -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77931273-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10976788; 
var sc_invisible=1; 
var sc_security="7131536b"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+ "statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="shopify stats" href="http://statcounter.com/shopify/" target="_blank">
<img class="statcounter" src="//c.statcounter.com/10976788/0/7131536b/1/" alt="shopify stats"></a></div></noscript> 
<!-- End of StatCounter Code for Default Guide -->

<!-- go to top -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!--/go to top -->

</body>
</html>



