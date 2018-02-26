<?php 

defined('_JEXEC') or die;

// include the syndicate functions only
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php';

$features_section = modfeatures::getHtml($params->get('category'));
$getarticle = $params->get('title');


require JModuleHelper::getLayoutPath('mod_tictok_home_features');

?>