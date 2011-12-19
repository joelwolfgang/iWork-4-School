<h2>Categories</h2>
<h3>Levels</h3>
	<a href="<?php print $currenturl;?>Early-Elementary">Early Elementary</a><br/>
	<a href="<?php print $currenturl;?>Elementary">Elementary</a><br/>
	<a href="<?php print $currenturl;?>Middle-School">Middle School</a><br/>
	<a href="<?php print $currenturl;?>High-School">High School</a><br/>
	<a href="<?php print $currenturl;?>College">College</a><br/>
	<a href="<?php print $currenturl;?>teacher">Teacher</a><br/>
<h3>Subject</h3>
<?php
	$subject_query = "SELECT DISTINCT subject AS 'school_subject' FROM templates WHERE featured = 1 ORDER BY subject";
	$subject_result = mysql_query($subject_query);
	while ($subject_row = mysql_fetch_array($subject_result)){
		if (empty($subject_row['school_subject'])) {
			print "";
		} else {
			print "<a href=\"".$currenturl.$subject_row['school_subject']."\">".$subject_row['school_subject']."</a><br/>";
		}
	}
	?>
<h3>Misc</h3>
<?php
	$static_query = "SELECT DISTINCT category_1 AS 'category' FROM templates UNION SELECT DISTINCT category_2 AS 'category' FROM templates UNION SELECT DISTINCT category_3 AS 'category' FROM templates UNION SELECT DISTINCT category_4 AS 'category' FROM templates ORDER BY category";
	$static_result = mysql_query($static_query);
	while ($static_row = mysql_fetch_array($static_result)){
		if (empty($static_row['category'])) {
			print "";
		} else {
			print "<a href=\"".$currenturl.$static_row['category']."\">".$static_row['category']."</a><br/>";
		}
	}
	?>