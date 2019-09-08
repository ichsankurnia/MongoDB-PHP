# MongoDB-PHP

add mongodb driver to php.ini in the apache config
download and install latest version of driver https://pecl.php.net/package/mongodb
adjust with your system ex: 7.3 Thread Safe (TS) x64
extract and copy php_mongodb.dll to c:\xampp\php\ext
open apache config, select php.ini add the extension of mongodb
	extension=php_mongodb.dll
save that, restart apache


install composer https://getcomposer.org/ to use MongoDB\Client instead MongoDB\Driver\Manager
go to project path:
	composer require mongodb/mongodb

just add require_once "/vendor/autoload.php"; in each scripts