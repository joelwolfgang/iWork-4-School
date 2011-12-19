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

include ('common/header.php');?>
	<div id="content">
		<div id="content_header">
			&nbsp;
		</div><!-- End content_header -->
		<div id="content_main">
			<div id="left_column">
				<?php include('navbar.php');?>
			</div>		
			<div id="template">
				<div id="cse-search-results"></div>
				<script type="text/javascript">
				  var googleSearchIframeName = "cse-search-results";
				  var googleSearchFormName = "cse-search-box";
				  var googleSearchFrameWidth = 495;
				  var googleSearchDomain = "www.google.com";
				  var googleSearchPath = "/cse";
				</script>
				<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
			</div>
			<div style="clear:both;"></div>
		</div><!-- End Content_main -->
		
		<div id="content_footer">
			&nbsp;
		</div><!-- End content_footer -->
		<div style="clear:both;"></div>
	</div><!-- End Content -->

<?php
include ('common/footer.php');?> 