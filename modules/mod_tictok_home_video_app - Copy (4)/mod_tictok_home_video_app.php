<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';

$html = modpagevideo::getHtml();
//$htmlmob=modpageheader::getHtmlMobile();
require JModuleHelper::getLayoutPath('mod_tictok_home_video_app');

?>