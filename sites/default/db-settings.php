<?php

global $databases;
global $site_root;
global $host;
global $civi_database;

$databases = array (
    'default' =>
    array (
        'default' =>
        array (
            'driver' => 'mysql',
            'port' => '',
            'prefix' => '',
        ),
    ),
);

$s275 = "/home/singersin/www/www";
if (preg_match("{^${s275}}", getenv("DOCUMENT_ROOT"))
    ||
    preg_match("{^${s275}}", getenv("PWD"))) {
    # Production server

    $host = 'www.singersinaccord.org';
    $site_root = $s275;
    $civi_database = 'singersin_combined';

} else {
    # Development server
    $host = 'localhost';
    $site_root = '/Users/ken/Documents/SIA/server275-site';
    $civi_database = 'singersin_combined';
}

$flerb = function($dbs) {
    $shell_user = posix_getpwuid(posix_getuid());
    $home_cnf = $shell_user['dir']."/.my.cnf";

    foreach(array($home_cnf, "sites/default/.my.cnf") as $file) {
	if (!file_exists($file)) {
	    continue;
	}
	// print("using $file<br>");
	$cnf = parse_ini_file($file, true);

	global $SITE_CONFIG;
	$SITE_CONFIG = $cnf;

	foreach ($cnf as $section => $vals) {
	    if ($section == 'mailman') {
		continue;
	    }
	    foreach(array('password', 'database', 'host', 'user') as $key) {
		$key2 = $key=='user' ? 'username' : $key;
		if (isset($vals[$key])) {
		    // print("Setting $key=$cnf[$key]<br>");
		    $dbs[$key2] = $vals[$key];
		}
	    }
	}
    }
    return $dbs;
};

$databases['default']['default'] = $flerb($databases['default']['default']);
unset($flerb);
