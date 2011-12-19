<?php
	include ('common/config.php');
	$page_title = ""; //Leave Blank to use page_id Title
	
	//URL ??
	$currentFile = $_SERVER['REQUEST_URI'];
	if (eregi("\?", $currentFile)) {
		$currentFile = substr(0, strpos($currentFile, '?')) ;
	}
	$parts = Explode('/', $currentFile);
	$page_id = substr($parts[count($parts) - 1], 0, -4);
	
	//Are we at the index?
	if ($page_id == "index" OR $page_id == "") {
		//$currentFile = $_SERVER["SCRIPT_NAME"];
		//$parts = Explode('/', $currentFile);
		//$page_id = substr($parts[count($parts) - 1], 0, -4);
		$page_id = "index.php";
		
	//Does the Page Exist in the Database?
	} elseif (!getContent($page_id)) {
		$error404 = "<H1>404 ERROR</H1>File Not Found";
	}
	$position = 14;
	include ('pagination.php');
	$query2 = "SELECT * FROM templates";
	$result2 = mysql_query($query2);
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
				<h1>iWork For School</h1>
				<?php if ($page <= 1) { ?>
				<div id="content_heading">
					iWork for School is a resource for iWork users who find themselves in and around schools.  We have loads of templates to fit your needs and they are 100% free.  Whether you're a colege student, teacher, or parent you'll be able to find the iWork templates you need right here on iwork4school.com!
				</div>
				<?php 
					}
					$n = 0;
					$i = 0;
					echo "<table border='0' cellpadding='0' cellspacing='1'>";
					while ($row = mysql_fetch_array($result)){
						$pic = $row['image'];
						$pic = str_replace(".png", "_th.png", $pic);
						$full = $row['image'];
						$pic180 = str_replace(".png", "_180.png", $full);
						$post = $row['name']; 
						if ($n <= 3) {
							if ($page == 1 && $i == 0){ 
								echo "<tr><td colspan='4' style='vertical-align:top;font-size:9.5pt;text-align:left;'><h2>Featured Template</h2><div style='float:left;margin-right: 10px;margin-bottom: 10px;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic180."' alt='" . $post . "' border='0'/></a></div><div><h3><a href='".$row['type']."/".$row['page_id']."'>".$post."</a></h3>" . $row['html'] . "</div></td></tr>";
								echo "<tr><td><div style='clear:both;'></div></td></tr>";
								?>
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
								<tr><td>&nbsp;</td></tr><tr>
								<?php
								$i++;
							} elseif ($page >= 2 && $i == 0) {?>
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
								<tr><td>&nbsp;</td></tr><tr>
								<?php
								$i++;
								echo "<td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' alt='" . $post . "' border='0'/></a><br/>";
								echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
								$n++;
							} else {
								echo "<td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' alt='" . $post . "' border='0'/></a><br/>";
								echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
								$n++;
							}

						} else {
							switch ($i) {
								case "2":?>
									</tr><tr><td colspan='4'>
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
									</td></tr><tr><td>&nbsp;
									<?php
									$i++;
									echo "</td></tr><tr><td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' alt='" . $post . "' border='0'/></a><br/>";
									echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
									$n = 1;
									break;
								case "4":?>
									</tr><tr><td colspan="4">&nbsp;
									<?php
									$i++;
									echo "</td></tr><tr><td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' alt='" . $post . "' border='0'/></a><br/>";
									echo "<a href='".$row['type']."/".$row['page_id']."'>".$post."</a></td>";
									$n = 1;
									break;
								default:
									$i++;
									echo "</tr><tr><td style='vertical-align: top;width:100px;height:150px;font-size:9.5pt;text-align:center;'><a href='".$row['type']."/".$row['page_id']."' border='0'><img src='templates/images/".$pic."' alt='" . $post . "' border='0'/></a><br/>";
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
			</div><!-- template -->
			<div id="right_column">
				<?php include('common/sidebar.php');?>
			</div><!-- End right_column -->
			<div style="clear:both;"></div>
		</div><!-- End Content_main -->
		
		<div id="content_footer">
			&nbsp;
		</div><!-- End content_footer -->
		<div style="clear:both;"></div>
	</div><!-- End Content -->
<?php include('common/footer.php');?>