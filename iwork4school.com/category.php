<?php
	include ('common/config.php');
	$category = $_GET['category'];
	$page_id = $category;
	include ('pagination.php');
	include('common/header.php');?>
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
					<h1>iWork <?php echo ucwords($category); ?> Templates</h1>
				</div>
			<?php 
					$n = 0;
					$i = 0;
					echo "<table border='0' cellpadding='0' cellspacing='0'>";
					while ($row = mysql_fetch_array($result)){
						$pic = $row['image'];
						$pic = str_replace(".png", "_th.png", $pic);
						$full = $row['image'];
						$post = $row['name']; 
						if ($n <= 3) {
							if ($i == 0){ ?>
								<tr><td colspan="4">
									<script type="text/javascript"><!--
										google_ad_client = "pub-0770103695182964";
										/* Top, 468x60, created 4/6/10 */
										google_ad_slot = "7286263315";
										google_ad_width = 468;
										google_ad_height = 60;
										//-->
										</script>
										<script type="text/javascript"
										src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
									</script>
								</td></tr>
								<tr><td colspan="4">&nbsp;</td></tr>
								<?php
								$i++;
								echo "<td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' border='0' alt='".$post."'></a><br>";
								echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
								$n++;
							} else {
								echo "<td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' border='0' alt='".$post."'></a><br>";
								echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
								$n++;
							}

						} else {
							switch ($i) {
								case "2":?>
									</td></tr><tr><td colspan='4'>
									<script type="text/javascript"><!--
										google_ad_client = "pub-0770103695182964";
										/* Center, 468x60, created 4/6/10 */
										google_ad_slot = "2109282053";
										google_ad_width = 468;
										google_ad_height = 60;
										//-->
										</script>
										<script type="text/javascript"
										src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
									</script>
									</td></tr><tr><td colspan="4">&nbsp;
									<?php
									$i++;
									echo "</td></tr><tr><td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' border='0' alt='".$post."'></a><br>";
									echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
									$n = 1;
									break;
								case "4":?>
									</td></tr><tr><td colspan="4">&nbsp;
									<?php
									$i++;
									echo "</td></tr><tr><td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' border='0' alt='".$post."'></a><br>";
									echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
									$n = 1;
									break;
								default:
									$i++;
									echo "</td></tr><tr><td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' border='0' alt='".$post."'></a><br>";
									echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
									$n = 1;
									break;
							}
						
						}
					}
					while ($n <= 3) {
						echo "<td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'>&nbsp;</td>";
						$n++;
					}
					echo "</tr></table>";
					echo $pagination;
				?>
			</div>
			<div id="right_column">
				<?php include('common/sidebar.php');?>
			</div>
			<div style="clear:both;"></div>
		</div><!-- End content_main -->
		<div style="clear:both;"></div>
		<div id="content_footer">
			&nbsp;
		</div><!-- End content_footer -->
	</div><!-- End Content -->
<?php include('common/footer.php');?>