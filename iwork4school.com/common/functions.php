<?php 

// Ondemand function to generate dynamic bit.ly urls
function getBitlyUrl($url) {  
    // fill up this 2 lines below with your login and api key
    $bitlylogin = 'joel00031';
    $bitlyapikey= 'R_5f718b42b5a65baa147cacee568ced16';
    
    
    // you dont need to change below this line
    $bitlyurl = file_get_contents("http://api.bit.ly/shorten?version=2.0.1&longUrl=".$url."&login=".$bitlylogin."&apiKey=".$bitlyapikey);  
     
    $bitlycontent = json_decode($bitlyurl,true);

    $bitlyerror = $bitlycontent["errorCode"];

    if ($bitlyerror == 0){
        $bitlyurl = $bitlycontent["results"][$url]["shortUrl"];
    }
    else $bitlyurl = $url;

    return $bitlyurl;
}

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

?>