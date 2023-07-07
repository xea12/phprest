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

 defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
 defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'opt'.DS.'lampp'.DS.'htdocs'.DS.'phprest');
 //opt/lampp/htdocs/phprest/include/
 defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
 defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');


 //load the config file
 require_once(INC_PATH.DS.'config.php');

 //core classes
 require_once(CORE_PATH.DS.'post.php');