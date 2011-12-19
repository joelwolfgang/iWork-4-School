<?php
include ('common/config.php');

$myFile = "sitemap.xml";
unlink($myFile);

$query = "SELECT * FROM templates WHERE featured = '1' ORDER BY id DESC";
$result = mysql_query($query) or die(mysql_error());

$ourFileName = "sitemap.xml";
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);

$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?xml version="1.0" encoding="UTF-8"?>';
$stringData .= '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$stringData .= '<url>';
$stringData .= '<loc>http://www.iwork4school.com/</loc>';
$stringData .= '<lastmod>'. date("Y-m-d") .'</lastmod>';
$stringData .= '<changefreq>daily</changefreq>';
$stringData .= '<priority>0.8</priority>';
$stringData .= '</url>';

while ($row = mysql_fetch_array($result)) {
	$stringData .= '<url>';
    $stringData .= '<loc>http://www.iwork4school.com/'.$row['type'].'/'.$row['page_id'].'</loc>';
    $stringData .= '<changefreq>weekly</changefreq>';
    $stringData .= '</url>';
}

$stringData .= '</urlset>';

fwrite($fh, $stringData);


include('common/closedb.php');
?>