<?php

global $databases;
global $site_root;

if ((isset($_SERVER["DOCUMENT_ROOT"])
     && preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", $_SERVER["DOCUMENT_ROOT"]))
    ||
    (isset($_ENV["PWD"])
     && preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", $_ENV["PWD"]))) {

    $site_root = '/Users/ken/Documents/SIA/site-upgrade';
    $databases = array (
        'default' =>
        array (
            'default' =>
            array (
                'driver' => 'mysql',
                'database' => 'pantheon',
                'username' => 'ken',
                'password' => '***REMOVED***',
                'host' => 'localhost',
                'port' => '',
                'prefix' => '',
            ),
        ),
    );

} else {

    $site_root = '/home/kenahoo/dev.singersinaccord.org';
    $databases = array (
        'default' =>
        array (
            'default' =>
            array (
                'driver' => 'mysql',
                'database' => 'pantheon3',
                'username' => 'kenahoo',
                'password' => '***REMOVED***',
                'host' => 'mysql.singersinaccord.org',
                'port' => '',
                'prefix' => '',
            ),
        ),
    );
}
