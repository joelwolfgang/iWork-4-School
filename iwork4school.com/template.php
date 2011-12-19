<?php
	include ('common/config.php');
	$template = $_GET['template'];
	$query = "select * FROM templates WHERE page_id = '$template' LIMIT 1";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$page_id = $row['name'];
	$type = $row['type'];
	$pic = $row['image'];
	$pic = str_replace(".png", "_180.png", $pic);
	$full = $row['image'];
	include ('common/header.php');
	?>
	<script type="text/javascript">
	(function() {
	var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
	s.type = 'text/javascript';
	s.async = true;
	s.src = 'http://widgets.digg.com/buttons.js';
	s1.parentNode.insertBefore(s, s1);
	})();
	</script>
	<div id="content">
		<div id="content_header">
			&nbsp;
		</div><!-- End content_header -->
		<div id="content_main">
			<div id="top-full">
				<span><script type="text/javascript"><!--
					google_ad_client = "ca-pub-0770103695182964";
					/* iwork4school leader */
					google_ad_slot = "8972761026";
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script></span><br/>
				<span><script type="text/javascript"><!--
					google_ad_client = "ca-pub-0770103695182964";
					/* iwork4school - leader link */
					google_ad_slot = "5974289290";
					google_ad_width = 728;
					google_ad_height = 15;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script></span>
			</div>
			<br/>
			<div id="left_column">
				<?php include('navbar.php');?>
			</div>
			<div id="template">
				<div id="template_title">
					<h1><?php echo $row['name']; ?></h1>
				</div>
				<div id="opportunity">
					<script type="text/javascript"><!--
						google_ad_client = "pub-0770103695182964";
						/* 250x250, created 3/20/10 */
						google_ad_slot = "1291939086";
						google_ad_width = 250;
						google_ad_height = 250;
						//-->
						</script>
						<script type="text/javascript"
						src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div><!-- End Opportunity -->
				<div id="template_content">	
					<?php
						if ($_SERVER["SERVER_NAME"] == "localhost") {
							$turl = curPageURL();
						} else {
							$turl = getBitlyUrl(curPageURL());
						}
						$name = $row['name'];
						$test = "test";
						echo "<a href='../templates/images/".$full."' border='0' rel='example1'><img src='../templates/images/".$pic."' border='0' alt='" . $name . "'></a><br>";
						echo $row['html']."<br/><br/>";
						echo "<a href='../templates/09/".$row['09_link'].".zip' onClick=\"_gaq.push(['_trackEvent', 'Download', '" . htmlspecialchars($name) . "', 'iwork 09']);\">DOWNLOAD iWork '09 Version</a><br />";
						echo "<a href='../templates/08/".$row['08_link'].".zip' onclick=\"_gaq.push(['_trackEvent', 'Download', '" . htmlspecialchars($name) . "', 'iwork 08']);\">DOWNLOAD iWork '08 Version</a><br />";
						?>
						<ul id="template_social_links" class="count_box">
							<!-- Facebook -->
							<li><?php echo '<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=178099078911584&amp;xfbml=1"></script><fb:like href="iwork4school.com/' . $type . '/'. $template . '" send="false" layout="box_count" width="45" show_faces="false" font="arial" style="vertical-align:bottom; text-align:right;"></fb:like>';?></li>
							<!-- Twitter -->
							<li><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $turl;?>" data-count="vertical" data-via="iworktemplates">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
							<!-- LinkedIn -->
							<li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="top"></script></li>
							<!-- +1 -->
							<li><g:plusone size="tall"></g:plusone></li>
						</ul>
						<br/>
						<ul id="template_social_links" class="16links">
							<!-- Delicious -->
							<li><a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&noui&jump=close&url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=560,height=560'); return false;"><img src="http://static.delicious.com/img/delicious.gif" height="16" width="16" alt="Save to Delicious" border="0" /></a></li>
							<!-- digg -->
							<li><a class="DiggThisButton DiggIcon"><span style="display:none"><?php print $test;?></span></a></li>
							<!-- Stumbledupon -->
							<li><script src="http://www.stumbleupon.com/hostedbadge.php?s=4"></script></li>
							<!-- Reddit -->
							<li><a href="http://reddit.com/submit" onclick="window.location = 'http://reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="http://reddit.com/static/spreddit1.gif" alt="submit to reddit" border="0" /> </a></li>
						</ul>

				</div><!-- End template_content -->
				
			</div><!-- End template -->
			<div id="right_column">
				<?php include('common/sidebar.php');?>
			</div>
			<div style="clear:both"></div>
		</div><!-- End content_main -->
		<div id="content_footer">
			&nbsp;
		</div><!-- End content_footer -->
		<div style="clear:both;"></div>
	</div><!-- End Content -->
<?php include('common/footer.php');?>