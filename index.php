<?php
// PHP detect language script.

//check first to see if they've been nice and set the language
if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {

//grab all the languages
$langs=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);

//start going through each one
foreach ($langs as $value) {

//select only the first two letters
$choice=substr($value,0,2);

//include the different language page based on their first chosen language
switch ($choice) {
case "en":
include("en/index.html"
break;
case "fr":
include("fr/index.html"
break;
default:
include("en/index.html"
}
}
}

//If the language is not set then use this as default
else {
include("en/index.html"
}
?> 
