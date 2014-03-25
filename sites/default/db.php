<?php

global $databases;

if (preg_match("{^/Users/ken/Documents/SIA/site-upgrade}", $_SERVER["DOCUMENT_ROOT"])) {

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
