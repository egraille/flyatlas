<?
$langs = array();
if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
      preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
 
    if (count($lang_parse[1])) {
        // create a list like "en" => 0.8
        $langs = array_combine($lang_parse[1], $lang_parse[4]);
    	
        // set default to 1 for any without q factor
        foreach ($langs as $lang => $val) {
            if ($val === '') $langs[$lang] = 1;
        }
 
        // sort list based on value	
        arsort($langs, SORT_NUMERIC);
    }
}
 
foreach ($langs as $lang => $val) {
	if (strpos($lang, 'de') === 0) {
		// show German site
	} else if (strpos($lang, 'en') === 0) {
		// show English site
	} 
}
