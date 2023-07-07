<?php
/**
 * Template File Doc Comment
 * 
 * PHP version 7.4
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */


$db_user = 'root';
$db_password = '';
$db_name = 'phprest';

$db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_user, $db_password);

//set the database attributes 
$db->setAttribute(PDO::ATTR_ERRMODE, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

define('APP_NAME', 'PHP REST API');


?>

