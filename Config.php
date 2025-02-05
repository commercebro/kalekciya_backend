<?php

// Database Configuration
$myfile = fopen(__DIR__.'/.default_stores', "r") or die("Unable to open config file!");
$default_stores = json_decode(fread($myfile,filesize(__DIR__.'/.default_stores')),true);
fclose($myfile);

// Other options
$config = [
	'app_name' => 'Kalekciya app',
	'public_path' => dirname(__FILE__).'/admin', // DIRECTORY where your index.php should be.
	'locale' => 'en',
	'stores' => $default_stores,
	'upload_files_extensions_allowed' => [
		'image/jpeg' => 'jpeg', 
		'text/xml' => 'xml',
	],
	'options' => [
		'auto_cache' => false,
		'timeout' => 121
	],
];                                                                                                      
