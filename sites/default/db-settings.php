<?php

global $databases;
global $site_root;
global $host;

if (preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", getenv("DOCUMENT_ROOT"))
    ||
    preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", getenv("PWD"))) {

    $host = 'localhost';
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

} else if (preg_match("{dev.singersinaccord.org}", getenv("DOCUMENT_ROOT"))
           ||
           preg_match("{dev.singersinaccord.org}", getenv("PWD"))) {

    $host = 'dev.singersinaccord.org';
    $site_root = '/home/kenahoo/dev.singersinaccord.org';
    $databases = array (
        'default' =>
        array (
            'default' =>
            array (
                'driver' => 'mysql',
                'database' => 'dev_sia',
                'username' => 'kenahoo',
                'password' => '***REMOVED***',
                'host' => 'mysql.singersinaccord.org',
                'port' => '',
                'prefix' => '',
            ),
        ),
    );

} else {

    $host = 'www.singersinaccord.org';
    $site_root = '/home/kenahoo/singersinaccord.org';
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
