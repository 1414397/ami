<?php
/**
 * Created by PhpStorm.
 * User: Aaru
 * Date: 03/05/2016
 * Time: 11:05
 */


define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba7adc8d866da9');
define('DB_PASSWORD', '26b08a1c');
define('DB_DATABASE', 'DB_PHP');
$db    = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 ?>