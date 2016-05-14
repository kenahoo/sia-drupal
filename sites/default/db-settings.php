<?php

global $databases;
global $site_root;
global $host;

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

$s275 = "/Users/ken/Documents/SIA/server275-site";
if (preg_match("{^${s275}}", getenv("DOCUMENT_ROOT"))
    ||
    preg_match("{^${s275}}", getenv("PWD"))) {
    # Production server

    $host = 'www.singersinaccord.org';
    $site_root = $s275;

} else {
    # Development server
    $host = 'localhost';
    $site_root = '/Users/ken/Documents/SIA/server275-site';
}

function flerb($dbs) {
    $shell_user = posix_getpwuid(posix_getuid());
    $home_cnf = $shell_user['dir']."/.my.cnf";
    if (file_exists($home_cnf)) {
	$cnf = parse_ini_file($home_cnf);
    } else if (file_exists(".my.cnf")) {
	$cnf = parse_ini_file(".my.cnf");
    } else {
	return $dbs;
    }
    foreach(array('password', 'database', 'host', 'user') as $key) {
        $key2 = $key=='user' ? 'username' : $key;
        if (isset($cnf[$key])) {
            $dbs[$key2] = $cnf[$key];
        }
    }
    return $dbs;
}

$databases['default']['default'] = flerb($databases['default']['default']);
