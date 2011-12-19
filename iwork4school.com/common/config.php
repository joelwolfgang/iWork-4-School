<?php
	include ('config_data.php');
	include ('opendb.php');
	include ('functions.php');
$currenturl = 'http://www.iwork4school.com/';

// GET CONTENT //
function getContent($page, $printit=false) {
global $db;
$query = "select html from templates where page_id='$page_id'";
$result = mysql_query($query);
$db = mysql_fetch_array($result); 
if ($db) {
    if ($printit == false) {
      return $db['html'];
      } else {
               $content = $db['html'];
               if (eregi("<?", $content)) {
               	 print eval (" ?>" . $content . "<?php ");
               } else print $content;
             }
   } else return "";
}

?>