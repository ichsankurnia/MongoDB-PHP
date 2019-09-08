# MongoDB-PHP

Add mongodb driver to php.ini in the apache config
Download and install latest version of driver https://pecl.php.net/package/mongodb
Ddjust with your system ex: 7.3 Thread Safe (TS) x64
Extract and copy php_mongodb.dll to c:\xampp\php\ext
Open apache config, select php.ini add the extension of mongodb
	extension=php_mongodb.dll
Save that, restart apache


Install composer https://getcomposer.org/ to use MongoDB\Client instead MongoDB\Driver\Manager
Go to project path:
	composer require mongodb/mongodb

Just add require_once "/vendor/autoload.php"; in each scripts
