<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- CSS -->
	<link rel="alternate" type="application/rss+xml" title="iWork 4 School RSS" href="http://feeds.feedburner.com/iwork4school"/>
	<link rel="stylesheet" href="<?php print $currenturl;?>css/main.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php print $currenturl;?>css/lavalamp.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php print $currenturl;?>css/colorbox.css" type="text/css" media="screen"/>
	<!-- JS -->
	<script type="text/javascript" src="<?php print $currenturl;?>js/jquery-1.4.1.js"></script>
	<script type="text/javascript" src="<?php print $currenturl;?>js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php print $currenturl;?>js/jquery.lavalamp.min.js"></script>
	<script type="text/javascript" src="<?php print $currenturl;?>js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="<?php print $currenturl;?>js/swfobject.js"></script> 
    <!-- Basic Meta Data -->
	<meta property="fb:admins" content="152001061" />
	<meta content="41.681994;-85.976667" name="geo.position" /> 
	<meta content="Elkhart, Indiana" name="geo.placename" /> 
	<meta content="US-IN" name="geo.region" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="en" http-equiv="content-language"/>
	<meta content='Teachers, students and educational professionals use this site as a resource for free Apple iWork templates we offer Pages Templates, Keynote Templates, and Numbers Templates' name='description'/>
	<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" /> 
	<link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" /> 
	<meta name="DC.title" lang="english" content="iWork Templates for School" /> 
	<meta name="DC.creator" content="Joel Wolfgang" /> 
	<meta name="DC.subject" lang="english" content="Capitals; Middle; Atom; Teacher; Street; Stellar; French; Paper; detention; Meteor; classroom; presentation; Fractions; Definition; history; School; Referral; astronomy; letter; reward-chart; notebook; Pages; Car; German; College; Keynote; Electronic; Multiplication; Vacation; games; APA; Letter; biology; Jobs; physics; french; seating; Test; Notice; Levels; Disasters; MLA; Categories; language; math; US-History; gradebook; tips; Respect; Table; respect; Project; Counties; counting; Alphabet; binder; Structures; fractions; Flip; Home; discipline; Signs; charting; Frequency; interactive; Elementary; Subject; multiplication; Travel; Shortcuts; Presentation; addition; Sticker; Phrases; iWork; Spanish; CBE; Dynamic; History; Time; Rules; bus; Submit; certificate; House; City; Research; Misc; colors; Essay; science; spanish; Density; U.S; german; Addition; Worksheet; Chart; Coin; Websites; Showers; Featured; Template; award; behavior; research-paper; Gradebook; CMS; Leaf; European" /> 
	<meta name="DC.description" lang="english" content="Teachers, students and educational professionals use this site as a resource for free Apple iWork templates we offer Pages Templates, Keynote Templates, and Numbers Templates" /> 
	<meta name="DC.date" content="04/03/2010" /> 
	<meta name="DC.type" scheme="DCTERMS.DCMIType" content="Text" /> 
	<meta name="DC.format" content="text/html" /> 
	<meta name="DC.format" content="22369 bytes" /> 
	<meta name="DC.identifier" scheme="DCTERMS.URI" content="http://iwork4school.com" /> 
	<meta name="DC.language" scheme="DCTERMS.URI" content="english" />
	<!--<script type="text/javascript">
		$(function() { $(".lavaLamp").lavaLamp({ fx: "backout", speed: 700 })});
	</script>-->
	<script type="text/javascript">
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$("a[rel='example1']").colorbox();
			$("a[rel='example2']").colorbox({transition:"fade"});
			$("a[rel='example3']").colorbox({transition:"none", width:"75%", height:"75%"});
			$("a[rel='example4']").colorbox({slideshow:true});
			$(".example5").colorbox();
			$(".example6").colorbox({iframe:true, innerWidth:425, innerHeight:344});
			$(".example7").colorbox({width:"80%", height:"80%", iframe:true});
			$(".example8").colorbox({width:"50%", inline:true, href:"#inline_example1"});
			$(".example9").colorbox({
				onOpen:function(){ alert('onOpen: colorbox is about to open'); },
				onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
				onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
				onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
				onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
			});
			
			//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});
		});
	</script>
<?php 
	if ($page_id = $category) {
		print "<title>iWork " .ucwords($page_id). " Templates</title>";
	} elseif (!(empty($template))) {
		print "<title>" . $row['name'] . " | " . ucwords($type) . " Template</title>";
		print '<meta property="og:title" content="' . $row["name"] . '"/>';
		print '<meta property="og:site_name" content="iWork For School"/>';
		print '<meta property="og:image" content="http://iwork4school.com/templates/images/' . $full . '"/>';
		print '<script type="text/javascript" src="http://widgets.digg.com/buttons.js"></script>';
	} elseif ($page_id = 'index.php') {
		print "<title>iWork Templates for School</title>";
	}
	?>
<?php include_once("analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
	<div id="header_bottom">
		<div id="menu">
			<ul>
				<li><a href="<?php print $currenturl;?>">Home</a></li>
				<li><a href="<?php print $currenturl;?>pages">Pages</a></li>
				<li><a href="<?php print $currenturl;?>numbers">Numbers</a></li>
				<li><a href="<?php print $currenturl;?>keynote">Keynote</a></li>
				<li><a href="mailto:iworktemplates@gmail.com?subject=Here%20is%20my%20template&body=Please%20attach%20a%20compressed%20file%20that%20includes%20the%20template%20you%20would%20like%20to%20submit%20">Submit</a></li>
			</ul>
		</div><!-- End Menu -->
		<div id="header_main_content">
			<img src="<?php print $currenturl;?>/media/images/report-header.png" alt="iwork4school" />
		</div>
		<div id="header_main_content_right">
			<div id="social_links">
				<ul>
					<li><a href="http://twitter.com/iworktemplates" target="_blank"><img src="<?php print $currenturl;?>media/images/twitter.png" border="0" alt="twitter" /></a></li>
					<li><a href="http://www.facebook.com/#!/pages/iWork-templates/105485992814420" target="_blank"><img src="<?php print $currenturl;?>media/images/facebook.png" border="0" alt="facebook" /></a></li>
					<li><a href="http://youtube.com/freeiworktemplates" target="_blank"><img src="<?php print $currenturl;?>media/images/youtube.png" border="0" alt="youtube" /></a></li>
					<li><a href="http://feeds.feedburner.com/iwork4school"><img src="<?php print $currenturl;?>media/images/rss.png" border="0" alt="Subcribe to our feed" /></a></li>
				</ul>
			</div><!-- End social_links -->
			<div id="search">
				<form action="http://iwork4school.com/search.php" id="cse-search-box">
				  <div>
					<input type="hidden" name="cx" value="partner-pub-0770103695182964:vpu80s2f48w" />
					<input type="hidden" name="cof" value="FORID:10" />
					<input type="hidden" name="ie" value="UTF-8" />
					<input type="text" name="q" size="24" />
					<input type="submit" name="sa" value="Search" />
				  </div>
				</form>
				<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
			</div>
		</div>
	</div><!-- End header_bottom -->
	<div id="fb-root"></div>
		<script type="text/javascript">
		  window.fbAsyncInit = function() {
			FB.init({appId: '137840062896531', status: true, cookie: true,
					 xfbml: true});
		  };
		  (function() {
			var e = document.createElement('script'); e.async = true;
			e.src = document.location.protocol +
			  '//connect.facebook.net/en_US/all.js';
			document.getElementById('fb-root').appendChild(e);
		  }());
		</script>