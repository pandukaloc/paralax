<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';








$about_section = modpagetestimonials::getHtml($params->get('category'));
$cat_alias = modpagetestimonials::getcatalias($params->get('category'));
require JModuleHelper::getLayoutPath('mod_tictok_home_testimonials');

?>