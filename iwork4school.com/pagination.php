<?php
$page = $_GET[page];
$tbl_name="templates";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 5;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your pagination_query, make sure you mirror it here.
	*/
	if ($page_id = $category){
		$pagination_query = "SELECT COUNT(*) as num FROM $tbl_name WHERE type='$category' OR level='$category' OR subject='$category' OR category_1='$category' OR category_2='$category' OR category_3='$category' OR category_4='$category' OR category_5='$category' OR subject='$category'";
		$targetpage = "category.php?category=".$category."&";
		$page_id = $category;
		$limit = 24;
	} else {
		$pagination_query = "SELECT COUNT(*) as num FROM $tbl_name";
		$targetpage = 'index.php?';
		$page_id = 'index.php';
		if ($page == 1 || $page == ''){ 
			$limit = 25;
		} else {
			$limit = 24;
		}
	}
	$total_pages = mysql_fetch_array(mysql_query($pagination_query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for pagination_query. */
	//$targetpage = $page_id; 	//your file name  (the name of this file)
	
	
									//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	if ($page_id = $category){
		$sql = "SELECT * FROM $tbl_name WHERE type='$category' OR level='$category' OR category_1='$category' OR category_2='$category' OR category_3='$category' OR category_4='$category' OR category_5='$category' OR subject='$category' ORDER BY id desc LIMIT $start, $limit";
	} else {
		$sql = "SELECT * FROM $tbl_name ORDER BY id desc LIMIT $start, $limit";
	}
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"".$targetpage."page=$prev\">&laquo; previous</a>";
		else
			$pagination.= "<span class=\"disabled\">&laquo; previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"".$targetpage."page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"".$targetpage."page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"".$targetpage."page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"".$targetpage."page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"".$targetpage."page=1\">1</a>";
				$pagination.= "<a href=\"".$targetpage."page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"".$targetpage."page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"".$targetpage."page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"".$targetpage."page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"".$targetpage."page=1\">1</a>";
				$pagination.= "<a href=\"".$targetpage."page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"".$targetpage."page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"".$targetpage."page=$next\">next &raquo;</a>";
		else
			$pagination.= "<span class=\"disabled\">next &raquo;</span>";
		$pagination.= "</div>\n";		
	}
	?>