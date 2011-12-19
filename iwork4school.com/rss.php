<?php
include ('common/config.php');

$myFile = "iwork4school.xml";
unlink($myFile);

$query = "SELECT * FROM templates WHERE featured = '1' ORDER BY id DESC";
$result = mysql_query($query) or die(mysql_error());

$ourFileName = "iwork4school.xml";
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);

$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?xml version="1.0" encoding="UTF-8"?>';
$stringData .= '<rss version="2.0">';
$stringData .= '<channel>';
$stringData .= '<title>iWork 4 School</title>';
$stringData .= '<description>Free Templates for Apple\'s iWork</description>';
$stringData .= '<link>http://www.iwork4school.com</link>';

while ($row = mysql_fetch_array($result)) {
	$full = $row['image'];
	$pic180 = str_replace(".png", "_180.png", $full);
	$stringData .= '<item>';
	$stringData .= '<title>'.$row['name'].'</title>';
	$stringData .= '<img>';
	$stringData .= '<url>http://www.iwork4school.com/templates/images/'.$pic180.'</url>';
	$stringData .= '<link>http://www.iwork4school.com/'.$row['type'].'/'.$row['page_id'].'</link>';
	$stringData .= '</img>';
	$stringData .= '<guid>http://www.iwork4school.com/'.$row['type'].'/'.$row['page_id'].'</guid>';
	$stringData .= '<description>'.$row['html'].'</description>';
	$stringData .= '</item>';
}

$stringData .= '</channel>';
$stringData .= '</rss>';

fwrite($fh, $stringData);


include('common/closedb.php');
?>