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


if (preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", getenv("DOCUMENT_ROOT"))
    ||
    preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", getenv("PWD"))) {

    $host = 'localhost';
    $site_root = '/Users/ken/Documents/SIA/site-upgrade';

} else {
    $host = 'www.singersinaccord.org';
    $site_root = '/home/kenahoo/singersinaccord.org';
}

function flerb($dbs) {
    $shell_user = posix_getpwuid(posix_getuid());
    $cnf = parse_ini_file($shell_user['dir']."/.my.cnf");
    foreach(['password', 'database', 'host', 'user'] as $key) {
        $key2 = $key=='user' ? 'username' : $key;
        if (isset($cnf[$key])) {
            $dbs[$key2] = $cnf[$key];
        }
    }
    return $dbs;
}

$databases['default']['default'] = flerb($databases['default']['default']);
