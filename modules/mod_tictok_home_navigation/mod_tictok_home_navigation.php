<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';
$menu =  JFactory::getApplication()->getMenu();
$currentmenuitem = $menu->getActive()->id;

$html = Modpagenavigation::getHtml($currentmenuitem);
//$htmlmob=modpageheader::getHtmlMobile();
require JModuleHelper::getLayoutPath('mod_tictok_home_navigation');

?>