<?php

define('DBHOST' , 'localhost');
define('DBUSER' , 'root');
define('DBPASS' , '');
define('DBNAME' , 'bootstrap');

/**
* $dbconnect : koneksi kedatabse
*/
$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/**
* Check Error yang terjadi saat koneksi
* jika terdapat error amka die()// stop dan tampilkan error
*/
if($dbconnect->connect-error){
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}