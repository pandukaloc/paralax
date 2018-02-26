<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';

$about_section = modpageramdomfeatures::getHtml($params->get('category'));
$cat_alias = modpageramdomfeatures::getcalalias($params->get('category'));

require JModuleHelper::getLayoutPath('mod_tictok_home_randomfeatures');

?>