<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';

$about_section = modaboutus::getHtml($params->get('category'));

require JModuleHelper::getLayoutPath('mod_tictok_home_aboutus');

?>