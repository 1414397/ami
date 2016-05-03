<?php
/**
 * Created by PhpStorm.
 * User: Aaru
 * Date: 03/05/2016
 * Time: 09:56
 */

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b7f21762e78a1b');
define('DB_PASSWORD', '4d011cab');
define('DB_DATABASE', 'CMM007ALDB-1414397');
$db    = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if($db->connect_errno){
die('Connectfailed['.$db->connect_error.']');
}

?>