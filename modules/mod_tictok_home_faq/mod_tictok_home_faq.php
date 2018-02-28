<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';

$about_section = modpagefaq::getHtml($params->get('category'));
$cat_alias = modpagefaq::getcatalias($params->get('category'));
require JModuleHelper::getLayoutPath('mod_tictok_home_faq');

?>